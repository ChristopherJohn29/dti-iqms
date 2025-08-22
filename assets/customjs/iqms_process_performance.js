(function($){
  'use strict';

  // IQMS Process Performance JS (separated for easier debugging)
  // Uses jQuery and IqmsApi backend endpoints

  $(function(){
    // Context from hidden fields
    var moduleCode = $('#iqmsModuleCode').val() || 'PROCESS_PERFORMANCE';
    var officeId   = $('#iqmsOfficeId').val()   || 10;
    var processId  = $('#iqmsProcessId').val()  || 1;
    var fiscalYear = $('#iqmsFiscalYear').val() || '2025';

    // Build base and endpoints (same approach as other IQMS pages)
    var base = (window.BASE_URL || '/');
    if(base.slice(-1) !== '/') base += '/';
    var ENDPOINT = {
      ENSURE: base + 'admin/iqms-data/ensure',
      LIST:   base + 'admin/iqms-data/list',
      SAVE:   base + 'admin/iqms-data/save',
      DEL:    base + 'admin/iqms-data/delete',
      CHILDREN: base + 'admin/iqms-data/children'
    };

    var analysisId = null;
    var performances = [];

    function esc(s){
      return String(s == null ? '' : s).replace(/[&<>"']/g, function(m){
        return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m];
      });
    }

    function ensureAnalysis(){
      return $.post(ENDPOINT.ENSURE, {
        module_code: moduleCode,
        office_id: officeId,
        process_id: processId,
        fiscal_year: fiscalYear
      }, function(r){ analysisId = r.id; }, 'json');
    }

    function loadPerformances(){
      if(!analysisId){ return; }
      $.getJSON(ENDPOINT.LIST, { table: 'iqms_process_performance', analysis_id: analysisId }, function(rows){
        performances = rows || [];
        renderPerformances();
      });
    }

    function renderPerformances(){
      var $tbody = $('#tableBody');
      if(!$tbody.length) return;
      $tbody.empty();
      if(!performances.length){
        $tbody.append('<tr><td colspan="23" class="text-center text-muted">No entries yet</td></tr>');
        return;
      }
      $.each(performances, function(_, r){
        var perfId = r.id;
        var tr = '<tr>' +
          '<td>'+ esc(r.sequence_number||'') +'</td>'+
          '<td>'+ esc(r.quality_objective_statement||'') +'</td>'+
          '<td>'+ esc(r.quality_target||'') +'</td>'+
          // Annual placeholders (7 cells)
          '<td></td><td></td><td></td><td></td><td></td><td></td><td></td>'+
          // Monthly placeholders (12 cells: split into two lines for readability)
          '<td></td><td></td><td></td><td></td><td></td><td></td>'+
          '<td></td><td></td><td></td><td></td><td></td><td></td>'+
          // Action cell with Update button now
          '<td class="text-center"><button class="btn btn-primary btn-sm" onclick="openMonitoring('+perfId+')"><i class="fe-edit"></i> Update</button></td>'+
        '</tr>';

        var $tr = $(tr);
        $('#tableBody').append($tr);
        hydrateMonitoringCells($tr, perfId);
      });
    }

    // Hydrate monitoring cells from iqms_process_performance_monitoring
    function hydrateMonitoringCells($tr, perfId){
      // Indices: after first 3 columns, next 7 are annual blocks, then 12 monthly
      var annualKeys = ['annual','Q1','Q2','SEM1','Q3','Q4','SEM2'];
      var monthlyKeys = ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];

      // Set placeholders initially
      var $cells = $tr.find('td');
      // Annual start index = 3, Monthly start index = 10 (3 + 7)
      for(var i=0;i<7;i++){ $cells.eq(3+i).text(''); }
      for(var j=0;j<12;j++){ $cells.eq(10+j).text(''); }

      // Fetch all children for this performance
      $.getJSON(ENDPOINT.CHILDREN, { table:'iqms_process_performance_monitoring', fk:'performance_id', id: perfId }, function(rows){
        var map = {};
        $.each(rows||[], function(_, m){ map[String(m.period_type).toUpperCase()] = m; });
        // Fill annual
        $.each(annualKeys, function(idx, key){ var rec = map[key]; if(rec){ $cells.eq(3+idx).text(rec.actual_value!=null? rec.actual_value : (rec.target_value!=null? rec.target_value : '')); }});
        // Fill monthly
        $.each(monthlyKeys, function(idx, key){ var rec = map[key]; if(rec){ $cells.eq(10+idx).text(rec.actual_value!=null? rec.actual_value : (rec.target_value!=null? rec.target_value : '')); }});
        // Replace last action cell with Update button
        var actionIdx = $cells.length-1;
        $cells.eq(actionIdx).html('<button class="btn btn-primary btn-sm" onclick="openMonitoring('+perfId+')"><i class="fe-edit"></i> Update</button>');
      });
    }

    // Monitoring modal handlers (simple numeric inputs for now)
    window.openMonitoring = function(perfId){
      var $m = $('#monitoringModal');
      if(!$m.length){ return alert('Monitoring modal is missing.'); }
      $('#monitoringPerformanceId').val(perfId);
      // Clear fields
      $m.find('input[type=number], input[type=text], textarea').val('');
      // Load existing values
      $.getJSON(ENDPOINT.CHILDREN, { table:'iqms_process_performance_monitoring', fk:'performance_id', id: perfId }, function(rows){
        var map = {};
        $.each(rows||[], function(_, m){ map[String(m.period_type).toUpperCase()] = m; });
        var fill = function(id, key){ if(map[key]){ $('#'+id).val(map[key].actual_value || map[key].target_value || ''); } };
        // Annual
        fill('annualVal','ANNUAL'); fill('q1Val','Q1'); fill('q2Val','Q2'); fill('sem1Val','SEM1'); fill('q3Val','Q3'); fill('q4Val','Q4'); fill('sem2Val','SEM2');
        // Monthly
        var mons=['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'];
        var keys=['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];
        for(var i=0;i<12;i++){ fill(mons[i]+'Val', keys[i]); }
        $m.show();
      });
    };

    window.closeMonitoring = function(){ $('#monitoringModal').hide(); };

    window.saveMonitoring = function(){
      var perfId = $('#monitoringPerformanceId').val();
      if(!perfId) return;
      // Build batch of upserts for annual + monthly periods
      var entries = [];
      function build(period, selector){ entries.push({ period:period, val: $(selector).val() }); }
      // Annual
      build('ANNUAL','#annualVal'); build('Q1','#q1Val'); build('Q2','#q2Val'); build('SEM1','#sem1Val'); build('Q3','#q3Val'); build('Q4','#q4Val'); build('SEM2','#sem2Val');
      // Monthly
      var mons=['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];
      var ids=['#janVal','#febVal','#marVal','#aprVal','#mayVal','#junVal','#julVal','#augVal','#sepVal','#octVal','#novVal','#decVal'];
      for(var i=0;i<12;i++){ build(mons[i], ids[i]); }

      // For each entry, get existing row by period_type to decide insert/update
      var i=0; (function next(){
        if(i>=entries.length){ alert('Monitoring updated!'); closeMonitoring(); return loadPerformances(); }
        var e = entries[i++];
        $.getJSON(ENDPOINT.CHILDREN, { table:'iqms_process_performance_monitoring', fk:'performance_id', id: perfId, extra_key:'period_type', extra_val: e.period }, function(rows){
          var type = (['ANNUAL','Q1','Q2','Q3','Q4','SEM1','SEM2'].indexOf(e.period) !== -1) ? 'annual' : 'monthly';
          var payload = { table:'iqms_process_performance_monitoring', performance_id: perfId, monitoring_type: type, period_type: e.period, actual_value: e.val };
          if(rows && rows.length){ payload.id = rows[0].id; }
          $.post(ENDPOINT.SAVE, payload, function(){ next(); }, 'json');
        });
      })();
    };


    // Expose functions globally (same names as before; now jQuery-backed)
    window.openObjectiveModal = function(){
      $('#objectiveModalTitle').text('Add New Objective');
      $('#objectiveId').val('');
      $('#objectiveForm')[0].reset();
      $('#objectiveModal').show();
    };

    window.closeObjectiveModal = function(){
      $('#objectiveModal').hide();
    };

    window.editObjective = function(id){
      var r = (performances||[]).find(function(x){ return String(x.id) === String(id); });
      if(!r) return;
      $('#objectiveModalTitle').text('Edit Objective');
      $('#objectiveId').val(r.id);
      $('#objectiveNumber').val(r.sequence_number||'');
      $('#objectiveStatement').val(r.quality_objective_statement||'');
      $('#qualityTarget').val(r.quality_target||'');
      $('#objectiveModal').show();
    };

    window.deleteObjective = function(id){
      if(!confirm('Are you sure you want to delete this item?')) return;
      $.post(ENDPOINT.DEL, { table:'iqms_process_performance', id:id }, function(){
        loadPerformances();
      }, 'json');
    };

    window.saveObjective = function(){
      if(!analysisId){ alert('Analysis context not ready yet.'); return; }
      var id = $('#objectiveId').val() || null;
      var payload = {
        table: 'iqms_process_performance',
        id: id,
        analysis_id: analysisId,
        sequence_number: $('#objectiveNumber').val(),
        quality_objective_statement: $('#objectiveStatement').val(),
        quality_target: $('#qualityTarget').val()
      };
      $.post(ENDPOINT.SAVE, payload, function(){
        alert('Objective saved!');
        window.closeObjectiveModal();
        loadPerformances();
      }, 'json');
    };


    // Search filter using jQuery (keeps existing behavior, but via jQuery)
    $('#searchInput').on('keyup', function(){
      var term = ($(this).val()||'').toLowerCase();
      $('#monitoringTable tbody tr').each(function(){
        var txt = $(this).text().toLowerCase();
        $(this).toggle(txt.indexOf(term) !== -1);
      });
    });

    // Button placeholders (keeping names; wired to jQuery)
    window.saveData = function(){
      alert('Data saved successfully!');
    };
    window.exportToExcel = function(){
      alert('Exporting to Excel...');
      setTimeout(function(){ alert('Export completed!'); }, 1200);
    };
    window.resetData = function(){
      if(!confirm('Are you sure you want to reset all values to zero?')) return;
      alert('All values have been reset (placeholder).');
    };

    // Initialize
    ensureAnalysis().then(function(){
      loadPerformances();
    });
  });

})(jQuery);

