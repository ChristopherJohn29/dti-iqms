-- Seed initial field_config JSON for STAKEHOLDERS and SWOT
UPDATE `iqms_form_configurations`
SET `field_config` = JSON_OBJECT(
  'primary_table', 'iqms_stakeholder_entries',
  'fields', JSON_ARRAY(
    JSON_OBJECT('name','category_id','type','select','label','Category','lookup','stakeholder_categories'),
    JSON_OBJECT('name','custom_category_name','type','text','label','Custom Category'),
    JSON_OBJECT('name','needs_expectations','type','textarea','label','Needs/Expectations'),
    JSON_OBJECT('name','potential_risks','type','textarea','label','Potential Risks'),
    JSON_OBJECT('name','potential_opportunities','type','textarea','label','Potential Opportunities'),
    JSON_OBJECT('name','to_be_considered','type','select','options', JSON_ARRAY('Yes','No')),
    JSON_OBJECT('name','risk_reference','type','text','label','Risk Ref (RR-x)'),
    JSON_OBJECT('name','opportunity_reference','type','text','label','Opp Ref (OR-x)'),
    JSON_OBJECT('name','analysis_set_number','type','number','label','Set #')
  )
)
WHERE module_code='STAKEHOLDERS';

UPDATE `iqms_form_configurations`
SET `field_config` = JSON_OBJECT(
  'primary_table', 'iqms_swot_entries',
  'fields', JSON_ARRAY(
    JSON_OBJECT('name','item_number','type','text','label','Item # (S-1/W-1/O-1/T-1)'),
    JSON_OBJECT('name','swot_type','type','select','options', JSON_ARRAY('strength','weakness','opportunity','threat')),
    JSON_OBJECT('name','item_description','type','textarea','label','Description'),
    JSON_OBJECT('name','potential_risk','type','textarea','label','Potential Risk (negative effect)'),
    JSON_OBJECT('name','potential_opportunity','type','textarea','label','Potential Opportunity (positive effect)'),
    JSON_OBJECT('name','reference_links','type','text','label','References (RR-x, OR-x)'),
    JSON_OBJECT('name','priority_level','type','select','options', JSON_ARRAY('Low','Medium','High','Critical')),
    JSON_OBJECT('name','action_required','type','textarea','label','Action Required'),
    JSON_OBJECT('name','responsible_person','type','text','label','Responsible Person'),
    JSON_OBJECT('name','target_date','type','date','label','Target Date'),
    JSON_OBJECT('name','current_status','type','select','options', JSON_ARRAY('Identified','In Progress','Completed','On Hold'))
  )
)
WHERE module_code='SWOT';

