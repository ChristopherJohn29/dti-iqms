<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title"><?=$title?></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- IQMS Header -->
        <div class="iqms-header">
            <div class="form-info">
                <div class="info-row">
                    <span class="info-label">FORM CODE:</span>
                    <span class="info-value">FM-PL-03</span>
                </div>
                <div class="info-row">
                    <span class="info-label">REVISION:</span>
                    <span class="info-value">2</span>
                </div>
                <div class="info-row">
                    <span class="info-label">DATE:</span>
                    <span class="info-value">01-Jun-25</span>
                </div>
            </div>

            <div class="process-info">
                <div class="info-row">
                    <span class="info-label">BUREAU/REGIONS/OFFICE:</span>
                    <span class="info-value">DTI-10 REGIONAL OFFICE</span>
                </div>
                <div class="info-row">
                    <span class="info-label">PROCESS:</span>
                    <span class="info-value">CONDUCT OF TRAINING</span>
                </div>
                <div class="info-row">
                    <span class="info-label">PROCESS OWNER:</span>
                    <span class="info-value">Training Coordinator</span>
                </div>
            </div>
        </div>

<input type="hidden" id="iqmsModuleCode" value="SWOT">
<input type="hidden" id="iqmsOfficeId" value="10">
<input type="hidden" id="iqmsProcessId" value="1">
<input type="hidden" id="iqmsFiscalYear" value="2025">




        <!-- Search and Filter -->
        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" class="iqms-search-bar search-input" placeholder="Search SWOT items..." id="searchSWOT">
            </div>
            <div class="col-md-3">
                <select class="iqms-form-control filter-select" id="filterSWOT">
                    <option value="all">All Categories</option>
                    <option value="strengths">Strengths</option>
                    <option value="weaknesses">Weaknesses</option>
                    <option value="opportunities">Opportunities</option>
                    <option value="threats">Threats</option>
                </select>
            </div>
            <div class="col-md-1 text-right">
                <button class="iqms-btn iqms-btn-success">
                    <i class="fe-download"></i> Export
                </button>
            </div>
        </div>

        <!-- SWOT Container -->
        <div class="swot-container">
            <div class="swot-box strengths">
                <div class="swot-header">
                    <span>STRENGTHS</span>
                    <button class="add-btn" onclick="openModal('strength')">+</button>
                </div>
                <div class="swot-content" id="strengths-content">
                    <!-- Strengths items will be added here dynamically -->
                </div>
            </div>


            <div class="swot-box weaknesses">
                <div class="swot-header">
                    <span>WEAKNESSES</span>
                    <button class="add-btn" onclick="openModal('weakness')">+</button>
                </div>
                <div class="swot-content" id="weaknesses-content">
                    <!-- Weaknesses items will be added here dynamically -->
                </div>
            </div>

            <div class="swot-box opportunities">
                <div class="swot-header">
                    <span>OPPORTUNITIES</span>
                    <button class="add-btn" onclick="openModal('opportunity')">+</button>
                </div>
                <div class="swot-content" id="opportunities-content">
                    <!-- Opportunities items will be added here dynamically -->
                </div>
            </div>

            <div class="swot-box threats">
                <div class="swot-header">
                    <span>THREATS</span>
                    <button class="add-btn" onclick="openModal('threat')">+</button>
                </div>
                <div class="swot-content" id="threats-content">
                    <!-- Threats items will be added here dynamically -->
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- content -->

<!-- Modal for Add/Edit SWOT Item -->
<div id="swotModal" class="iqms-modal">
    <div class="iqms-modal-content" style="max-width: 700px;">
        <div class="iqms-modal-header">
            <h3 class="iqms-modal-title" id="modalTitle">Add SWOT Item</h3>
            <span class="iqms-close" onclick="closeModal()">&times;</span>
        </div>

        <form class="iqms-form" id="swotForm">
            <input type="hidden" id="itemId">
            <input type="hidden" id="itemType">

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemNumber">Item Number:</label>
                <input type="text" class="iqms-form-control" id="itemNumber" required>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="itemText">Issue/Description:</label>
                <textarea class="iqms-form-control" id="itemText" rows="3" required></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="potentialRisk">Potential Risk (Negative Effect):</label>
                <textarea class="iqms-form-control" id="potentialRisk" rows="3"></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="potentialOpportunity">Potential Opportunity (Positive Effect):</label>
                <textarea class="iqms-form-control" id="potentialOpportunity" rows="3"></textarea>
            </div>

            <div class="iqms-form-group">
                <label class="iqms-form-label" for="reference">Reference/Links:</label>
                <input type="text" class="iqms-form-control" id="reference">
            </div>

            <div class="mt-4">
                <button type="submit" class="iqms-btn iqms-btn-primary">Save</button>
                <button type="button" class="iqms-btn iqms-btn-secondary" onclick="closeModal()">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
$(function(){
  var ENDPOINT = {
    ENSURE: '<?=base_url('admin/iqms-data/ensure')?>',
    LIST:   '<?=base_url('admin/iqms-data/list')?>',
    SAVE:   '<?=base_url('admin/iqms-data/save')?>',
    DEL:    '<?=base_url('admin/iqms-data/delete')?>',
    EXPORT: '<?=base_url('admin/iqms-data/export')?>'
  };
  var moduleCode = $('#iqmsModuleCode').val();
  var officeId   = parseInt($('#iqmsOfficeId').val(),10) || null;
  var processId  = $('#iqmsProcessId').val() ? parseInt($('#iqmsProcessId').val(),10) : null;
  var fiscalYear = $('#iqmsFiscalYear').val() || (new Date().getFullYear());
  var analysisId = null;

  function ensureAnalysis(){
    return $.post(ENDPOINT.ENSURE, { module_code: moduleCode, office_id: officeId, process_id: processId, fiscal_year: fiscalYear }, function(resp){ analysisId = resp.id; }, 'json');
  }

  // Canonicalization maps for swot_type values from DB
  var SWOT_CANON = { strength:'strength', strengths:'strength', weakness:'weakness', weaknesses:'weakness', opportunity:'opportunity', opportunities:'opportunity', threat:'threat', threats:'threat' };
  var SWOT_CAT   = { strength:'strengths', weakness:'weaknesses', opportunity:'opportunities', threat:'threats' };

  function loadSwot(){
    return $.getJSON(ENDPOINT.LIST, { table:'iqms_swot_entries', analysis_id: analysisId }, function(rows){
      var dataByType = { strengths:[], weaknesses:[], opportunities:[], threats:[] };
      $.each(rows || [], function(_, r){
        var raw = String(r && r.swot_type || '').toLowerCase().trim();
        var canon = SWOT_CANON[raw]; if(!canon) return; // skip unknown/empty types
        var cat = SWOT_CAT[canon]; if(!cat) return;
        dataByType[cat].push({ id:r.id, number:r.item_number||'', text:r.item_description||'', risk:r.potential_risk||'', opportunity:r.potential_opportunity||'', reference:r.reference_links||'' });
      });
      renderCategory('strengths', dataByType.strengths);
      renderCategory('weaknesses', dataByType.weaknesses);
      renderCategory('opportunities', dataByType.opportunities);
      renderCategory('threats', dataByType.threats);
    });
  }

  function renderCategory(category, items){
    var $c = $('#'+category+'-content'); $c.empty();
    if(!items.length){ $c.html('<div class="no-items">No items found</div>'); return; }
    $.each(items, function(_, item){
      var oppHtml = item.opportunity ? '<div class="item-opportunity"><strong>Opportunity:</strong> '+escapeHtml(item.opportunity)+'</div>' : '';
      var refHtml = item.reference ? '<div class="item-reference"><strong>Reference:</strong> '+escapeHtml(item.reference)+'</div>' : '';
      var $el = $('<div class="swot-item"/>').attr('data-id', item.id).html(
        '<div class="swot-item-header">'+
        '  <span class="item-number">'+escapeHtml(item.number)+'</span>'+
        '  <div class="item-actions">'+
        '    <button class="edit-btn" onclick="editItem(\''+category+'\','+item.id+')">Edit</button>'+
        '    <button class="delete-btn" onclick="deleteItem(\''+category+'\','+item.id+')">Delete</button>'+
        '  </div>'+
        '</div>'+
        '<div class="item-text">'+escapeHtml(item.text)+'</div>'+
        oppHtml + refHtml
      );
      $c.append($el);
    });
  }

  function escapeHtml(s){ return String(s||'').replace(/[&<>"']/g, function(m){ return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;','\'':'&#39;'}[m]); }); }

  window.openModal = function(type, id){
    var typeNames = { strength:'Strength', weakness:'Weakness', opportunity:'Opportunity', threat:'Threat' };
    $('#modalTitle').text((id?'Edit ':'Add ')+typeNames[type]+' Item');
    $('#itemType').val(type);
    if(id){
      // Load row for editing
      $.getJSON(ENDPOINT.LIST, { table:'iqms_swot_entries', analysis_id: analysisId }, function(rows){
        var r = rows.find(function(x){ return x.id==id; });
        if(r){
          $('#itemId').val(id);
          $('#itemNumber').val(r.item_number||'');
          $('#itemText').val(r.item_description||'');
          $('#potentialRisk').val(r.potential_risk||'');
          $('#potentialOpportunity').val(r.potential_opportunity||'');
          $('#reference').val(r.reference_links||'');
        }
        $('#swotModal').css('display','flex');
      });
    } else {
      $('#swotForm')[0].reset();
      $('#itemId').val('');
      var prefix = (type==='strength'?'S-': type==='weakness'?'W-': type==='opportunity'?'O-':'T-');
      $.getJSON(ENDPOINT.LIST, { table:'iqms_swot_entries', analysis_id: analysisId }, function(rows){
        var nextNum = (rows||[]).filter(function(r){
          var raw = String(r && r.swot_type || '').toLowerCase().trim();
          var canon = SWOT_CANON[raw] || raw; // default to raw if unknown
          return canon === type;
        }).length + 1;
        $('#itemNumber').val(prefix+nextNum);
        $('#swotModal').css('display','flex');
      });
    }
  };

  window.closeModal = function(){ $('#swotModal').hide(); };

  window.saveSWOTItem = function(){
    var type = $('#itemType').val();
    var id   = $('#itemId').val();
    var data = {
      table:'iqms_swot_entries',
      id: id,
      analysis_id: analysisId,
      swot_type: type,
      item_number: $('#itemNumber').val(),
      item_description: $('#itemText').val(),
      potential_risk: $('#potentialRisk').val(),
      potential_opportunity: $('#potentialOpportunity').val(),
      reference_links: $('#reference').val()
    };
    $.post(ENDPOINT.SAVE, data, function(){ loadSwot().then(function(){ closeModal(); }); });
  };

  window.editItem = function(category, id){ var type = category.slice(0,-1); openModal(type, id); };

  window.deleteItem = function(category, id){
    if(!confirm('Are you sure you want to delete this item?')) return;
    $.post(ENDPOINT.DEL, { table:'iqms_swot_entries', id:id }, function(){ loadSwot().then(function(){ filterSWOTItems(); }); });
  };

  function filterSWOTItems(){
    var term = $('.search-input').val().toLowerCase();
    var filter = $('.filter-select').val();
    ['strengths','weaknesses','opportunities','threats'].forEach(function(cat){
      var $box = $('.swot-box.'+cat);
      if(filter!=='all' && filter!==cat){ $box.hide(); return; } else { $box.show(); }
      var $items = $('#'+cat+'-content .swot-item');
      var any=false; $items.each(function(){
        var vis = $(this).text().toLowerCase().indexOf(term) >= 0; $(this).toggle(vis); any = any||vis; });
      var $c = $('#'+cat+'-content'); var $no = $c.find('.no-items');
      if(!any && $items.length>0){ if(!$no.length) $c.append('<div class="no-items">No items match your search</div>'); }
      else if($no.length){ $no.remove(); }
    });
  }

  // Bind form submit
  $('#swotForm').on('submit', function(e){ e.preventDefault(); saveSWOTItem(); });
  $('.search-input').on('input', filterSWOTItems);
  $('.filter-select').on('change', filterSWOTItems);

  // Initialize
  ensureAnalysis().then(loadSwot);
});
</script>
