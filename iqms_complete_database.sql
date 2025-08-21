-- =====================================================
-- COMPLETE IQMS DATABASE SCHEMA WITH SEED DATA
-- Department of Trade and Industry - IQMS System
-- =====================================================

-- Drop existing tables if they exist (in reverse dependency order)
DROP TABLE IF EXISTS `iqms_risk_monitoring`;
DROP TABLE IF EXISTS `iqms_risk_treatments`;
DROP TABLE IF EXISTS `iqms_risk_causes`;
DROP TABLE IF EXISTS `iqms_opportunity_monitoring`;
DROP TABLE IF EXISTS `iqms_opportunity_actions`;
DROP TABLE IF EXISTS `iqms_quality_objective_action_plans`;
DROP TABLE IF EXISTS `iqms_process_performance_monitoring`;
DROP TABLE IF EXISTS `iqms_improvement_actions`;
DROP TABLE IF EXISTS `iqms_opportunity_register`;
DROP TABLE IF EXISTS `iqms_risk_register`;
DROP TABLE IF EXISTS `iqms_process_performance`;
DROP TABLE IF EXISTS `iqms_quality_objectives`;
DROP TABLE IF EXISTS `iqms_organization_outcomes`;
DROP TABLE IF EXISTS `iqms_swot_entries`;
DROP TABLE IF EXISTS `iqms_stakeholder_entries`;
DROP TABLE IF EXISTS `iqms_stakeholder_categories`;
DROP TABLE IF EXISTS `iqms_analyses`;
DROP TABLE IF EXISTS `iqms_form_configurations`;
DROP TABLE IF EXISTS `iqms_processes`;
DROP TABLE IF EXISTS `iqms_offices`;

-- =====================================================
-- 1. CORE INFRASTRUCTURE TABLES
-- =====================================================

-- Table: iqms_offices
CREATE TABLE `iqms_offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_code` varchar(50) NOT NULL UNIQUE,
  `office_name` varchar(255) NOT NULL,
  `office_type` enum('Bureau','Region','Office','Division') DEFAULT 'Office',
  `parent_office_id` int(11) NULL,
  `address` text,
  `contact_person` varchar(255),
  `contact_email` varchar(255),
  `contact_phone` varchar(50),
  `sort_order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_office_code` (`office_code`),
  KEY `idx_office_type` (`office_type`),
  KEY `idx_parent_office` (`parent_office_id`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`parent_office_id`) REFERENCES `iqms_offices`(`id`) ON DELETE SET NULL
);

-- Table: iqms_processes
CREATE TABLE `iqms_processes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `process_code` varchar(50) NOT NULL UNIQUE,
  `process_name` varchar(255) NOT NULL,
  `process_description` text,
  `process_category` varchar(100),
  `default_process_owner` varchar(255),
  `form_code` varchar(50) DEFAULT 'FM-PL-02',
  `revision` varchar(10) DEFAULT '3',
  `sort_order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_process_code` (`process_code`),
  KEY `idx_process_category` (`process_category`),
  KEY `idx_status` (`status`)
);

-- Table: iqms_form_configurations
CREATE TABLE `iqms_form_configurations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_code` varchar(50) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `form_code` varchar(50) NOT NULL,
  `revision` varchar(10) NOT NULL,
  `form_title` varchar(255) NOT NULL,
  `form_description` text,
  `requires_office` tinyint(1) DEFAULT 1,
  `requires_process` tinyint(1) DEFAULT 1,
  `requires_fiscal_year` tinyint(1) DEFAULT 1,
  `is_active` tinyint(1) DEFAULT 1,
  `effective_date` date,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_module_form_revision` (`module_code`, `form_code`, `revision`),
  KEY `idx_module_code` (`module_code`),
  KEY `idx_form_code` (`form_code`)
);

-- Table: iqms_analyses (Universal analysis management)
CREATE TABLE `iqms_analyses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_code` varchar(50) NOT NULL,
  `office_id` int(11) NOT NULL,
  `process_id` int(11) NULL,
  `fiscal_year` varchar(10) NOT NULL,
  `process_owner` varchar(255),
  `analysis_title` varchar(255),
  `analysis_description` text,
  `form_date` date,
  `analysis_status` enum('Draft','In Progress','Completed','Approved','Archived') DEFAULT 'Draft',
  `approved_by` int(11) NULL,
  `approved_date` datetime NULL,
  `metadata` JSON,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_module_office_process_year` (`module_code`, `office_id`, `process_id`, `fiscal_year`),
  KEY `idx_module_code` (`module_code`),
  KEY `idx_fiscal_year` (`fiscal_year`),
  KEY `idx_analysis_status` (`analysis_status`),
  KEY `idx_status` (`status`),
  KEY `idx_office_process_year_module` (`office_id`, `process_id`, `fiscal_year`, `module_code`),
  FOREIGN KEY (`office_id`) REFERENCES `iqms_offices`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`process_id`) REFERENCES `iqms_processes`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`approved_by`) REFERENCES `users`(`id`) ON DELETE SET NULL
);

-- =====================================================
-- 2. STAKEHOLDER ANALYSIS TABLES
-- =====================================================

-- Table: iqms_stakeholder_categories
CREATE TABLE `iqms_stakeholder_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` varchar(50) NOT NULL UNIQUE,
  `category_name` varchar(255) NOT NULL,
  `category_description` text,
  `category_number` varchar(10),
  `sort_order` int(11) DEFAULT 0,
  `is_system_category` tinyint(1) DEFAULT 1,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_category_code` (`category_code`),
  KEY `idx_category_number` (`category_number`),
  KEY `idx_status` (`status`)
);

-- Table: iqms_stakeholder_entries
CREATE TABLE `iqms_stakeholder_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `custom_category_name` varchar(255) NULL,
  `needs_expectations` text NOT NULL,
  `potential_risks` text,
  `potential_opportunities` text,
  `to_be_considered` enum('Yes','No') DEFAULT 'Yes',
  `risk_reference` varchar(100),
  `opportunity_reference` varchar(100),
  `analysis_set_number` int(11) DEFAULT 1,
  `entry_notes` text,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_analysis_category` (`analysis_id`, `category_id`),
  KEY `idx_analysis_set` (`analysis_set_number`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`category_id`) REFERENCES `iqms_stakeholder_categories`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 3. SWOT ANALYSIS TABLES
-- =====================================================

-- Table: iqms_swot_entries
CREATE TABLE `iqms_swot_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `swot_type` enum('strength','weakness','opportunity','threat') NOT NULL,
  `item_number` varchar(20) NOT NULL,
  `item_description` text NOT NULL,
  `potential_risk` text,
  `potential_opportunity` text,
  `reference_links` varchar(255),
  `priority_level` enum('Low','Medium','High','Critical') DEFAULT 'Medium',
  `action_required` text,
  `responsible_person` varchar(255),
  `target_date` date,
  `current_status` enum('Identified','In Progress','Completed','On Hold') DEFAULT 'Identified',
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_analysis_item_number` (`analysis_id`, `item_number`),
  KEY `idx_analysis_swot_type` (`analysis_id`, `swot_type`),
  KEY `idx_swot_type` (`swot_type`),
  KEY `idx_priority_level` (`priority_level`),
  KEY `idx_current_status` (`current_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 4. ORGANIZATION OUTCOMES TABLES
-- =====================================================

-- Table: iqms_organization_outcomes
CREATE TABLE `iqms_organization_outcomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `outcome_code` varchar(20) NOT NULL,
  `organizational_outcome` text NOT NULL,
  `measure` text NOT NULL,
  `baseline` varchar(255),
  `target` varchar(255),
  `current_accomplishment` varchar(255),
  `percentage_accomplishment` decimal(5,2),
  `outcome_status` enum('Active','Inactive','Completed','On Hold') DEFAULT 'Active',
  `remarks` text,
  `responsible_person` varchar(255),
  `monitoring_frequency` enum('Monthly','Quarterly','Semi-Annual','Annual') DEFAULT 'Semi-Annual',
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  -- Allow multiple OO rows per code; distinguish by measure for uniqueness
  -- Note: measure is TEXT so we index a prefix length; adjust if you change to VARCHAR
  KEY `idx_outcome_status` (`outcome_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);
-- Create composite unique index including measure prefix
CREATE UNIQUE INDEX `unique_analysis_outcome_code_measure`
  ON `iqms_organization_outcomes` (`analysis_id`, `outcome_code`, `measure`(100));

-- =====================================================
-- 5. QUALITY OBJECTIVES TABLES
-- =====================================================

-- Table: iqms_quality_objectives
CREATE TABLE `iqms_quality_objectives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `objective_code` varchar(20) NOT NULL,
  `quality_objective` text NOT NULL,
  `target` text NOT NULL,
  `output_indicator` varchar(255),
  `process_owner` varchar(255),
  `objective_status` enum('Not Started','In Progress','Completed','On Hold') DEFAULT 'Not Started',
  `completion_percentage` decimal(5,2) DEFAULT 0.00,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_analysis_objective_code` (`analysis_id`, `objective_code`),
  KEY `idx_objective_status` (`objective_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);

-- Table: iqms_quality_objective_action_plans
CREATE TABLE `iqms_quality_objective_action_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objective_id` int(11) NOT NULL,
  `action_text` text NOT NULL,
  `timeline` varchar(100),
  `responsibility` varchar(255),
  `resources_needed` text,
  `references` varchar(255),
  `action_status` enum('Not Started','In Progress','Completed','On Hold') DEFAULT 'Not Started',
  `completion_date` date NULL,
  `remarks` text,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_objective_id` (`objective_id`),
  KEY `idx_action_status` (`action_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`objective_id`) REFERENCES `iqms_quality_objectives`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 6. PROCESS PERFORMANCE TABLES
-- =====================================================

-- Table: iqms_process_performance
CREATE TABLE `iqms_process_performance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `sequence_number` int(11) NOT NULL,
  `quality_objective_statement` text NOT NULL,
  `quality_target` text NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_analysis_sequence` (`analysis_id`, `sequence_number`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);

-- Table: iqms_process_performance_monitoring
CREATE TABLE `iqms_process_performance_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `performance_id` int(11) NOT NULL,
  `monitoring_type` enum('annual','monthly') NOT NULL,
  `period_type` varchar(20) NOT NULL,
  `target_value` decimal(10,2),
  `actual_value` decimal(10,2),
  `percentage_achievement` decimal(5,2),
  `remarks` text,
  `monitoring_date` date,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_performance_period` (`performance_id`, `period_type`),
  KEY `idx_monitoring_type` (`monitoring_type`),
  KEY `idx_period_type` (`period_type`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`performance_id`) REFERENCES `iqms_process_performance`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 7. RISK REGISTER TABLES
-- =====================================================

-- Table: iqms_risk_register
CREATE TABLE `iqms_risk_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `risk_id` varchar(20) NOT NULL,
  `risk_description` text NOT NULL,
  `potential_impact` text,
  `risk_category` varchar(100),
  `probability` int(1) CHECK (probability BETWEEN 1 AND 5),
  `impact` int(1) CHECK (impact BETWEEN 1 AND 5),
  `risk_score` int(2) GENERATED ALWAYS AS (probability * impact) STORED,
  `priority` enum('1st','2nd','3rd','4th','5th') DEFAULT '3rd',
  `risk_status` enum('open','closed','monitoring') DEFAULT 'open',
  `identification_date` date,
  `risk_owner` varchar(255),
  `effectiveness_indicator` text,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_analysis_risk_id` (`analysis_id`, `risk_id`),
  KEY `idx_risk_category` (`risk_category`),
  KEY `idx_risk_score` (`risk_score`),
  KEY `idx_priority` (`priority`),
  KEY `idx_risk_status` (`risk_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);

-- Table: iqms_risk_causes
CREATE TABLE `iqms_risk_causes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `risk_id` int(11) NOT NULL,
  `cause_number` varchar(10) NOT NULL,
  `cause_description` text NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_risk_id` (`risk_id`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`risk_id`) REFERENCES `iqms_risk_register`(`id`) ON DELETE CASCADE
);

-- Table: iqms_risk_treatments
CREATE TABLE `iqms_risk_treatments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `risk_id` int(11) NOT NULL,
  `treatment_description` text NOT NULL,
  `treatment_type` enum('Mitigate','Transfer','Accept','Avoid') DEFAULT 'Mitigate',
  `responsible_person` varchar(255),
  `target_date` date,
  `treatment_status` enum('Planned','In Progress','Completed','Overdue') DEFAULT 'Planned',
  `effectiveness` enum('Low','Medium','High') DEFAULT 'Medium',
  `cost_estimate` decimal(10,2),
  `actual_cost` decimal(10,2),
  `completion_date` date,
  `remarks` text,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_risk_id` (`risk_id`),
  KEY `idx_treatment_type` (`treatment_type`),
  KEY `idx_treatment_status` (`treatment_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`risk_id`) REFERENCES `iqms_risk_register`(`id`) ON DELETE CASCADE
);

-- Table: iqms_risk_monitoring
CREATE TABLE `iqms_risk_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `risk_id` int(11) NOT NULL,
  `quarter` enum('Q1','Q2','Q3','Q4') NOT NULL,
  `monitoring_result` enum('Y','N','P') DEFAULT 'N',
  `monitoring_notes` text,
  `monitoring_date` date,
  `monitored_by` varchar(255),
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_risk_quarter` (`risk_id`, `quarter`),
  KEY `idx_quarter` (`quarter`),
  KEY `idx_monitoring_result` (`monitoring_result`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`risk_id`) REFERENCES `iqms_risk_register`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 8. OPPORTUNITY REGISTER TABLES
-- =====================================================

-- Table: iqms_opportunity_register
CREATE TABLE `iqms_opportunity_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `opportunity_id` varchar(20) NOT NULL,
  `opportunity_description` text NOT NULL,
  `probability` int(1) CHECK (probability BETWEEN 1 AND 5),
  `strategic_impact` int(1) CHECK (strategic_impact BETWEEN 1 AND 5),
  `service_impact` int(1) CHECK (service_impact BETWEEN 1 AND 5),
  `financial_impact` int(1) CHECK (financial_impact BETWEEN 1 AND 5),
  `reputation_impact` int(1) CHECK (reputation_impact BETWEEN 1 AND 5),
  `overall_score` decimal(3,1) GENERATED ALWAYS AS ((strategic_impact + service_impact + financial_impact + reputation_impact) / 4.0) STORED,
  `opportunity_status` enum('Identified','In Progress','Implemented','Closed','On Hold') DEFAULT 'Identified',
  `identification_date` date,
  `target_implementation_date` date,
  `actual_implementation_date` date,
  `opportunity_owner` varchar(255),
  `effectiveness_indicator` varchar(255),
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_analysis_opportunity_id` (`analysis_id`, `opportunity_id`),
  KEY `idx_overall_score` (`overall_score`),
  KEY `idx_opportunity_status` (`opportunity_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);

-- Table: iqms_opportunity_actions
CREATE TABLE `iqms_opportunity_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opportunity_id` int(11) NOT NULL,
  `action_description` text NOT NULL,
  `responsibility` varchar(255),
  `timeline` varchar(100),
  `success_indicator` text,
  `action_status` enum('Planned','In Progress','Completed','Cancelled') DEFAULT 'Planned',
  `completion_date` date,
  `remarks` text,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  KEY `idx_opportunity_id` (`opportunity_id`),
  KEY `idx_action_status` (`action_status`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`opportunity_id`) REFERENCES `iqms_opportunity_register`(`id`) ON DELETE CASCADE
);

-- Table: iqms_opportunity_monitoring
CREATE TABLE `iqms_opportunity_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opportunity_id` int(11) NOT NULL,
  `quarter` enum('Q1','Q2','Q3','Q4') NOT NULL,
  `monitoring_result` enum('Y','N') DEFAULT 'N',
  `monitoring_date` date,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_opportunity_quarter` (`opportunity_id`, `quarter`),
  FOREIGN KEY (`opportunity_id`) REFERENCES `iqms_opportunity_register`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 9. IMPROVEMENT ACTION TABLES
-- =====================================================

-- Table: iqms_improvement_actions
CREATE TABLE `iqms_improvement_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_id` int(11) NOT NULL,
  `action_number` int(11) NOT NULL,
  `improvement_action` text NOT NULL,
  `responsibility` varchar(255),
  `timeline` varchar(100),
  `resources_needed` text,
  `action_status` enum('Planned','In Progress','Completed','On Hold','Cancelled') DEFAULT 'Planned',
  `start_date` date,
  `target_completion_date` date,
  `actual_completion_date` date,
  `completion_percentage` decimal(5,2) DEFAULT 0.00,
  `remarks` text,
  `priority_level` enum('Low','Medium','High','Critical') DEFAULT 'Medium',
  `cost_estimate` decimal(10,2),
  `actual_cost` decimal(10,2),
  `success_metrics` text,
  `lessons_learned` text,
  `status` tinyint(1) DEFAULT 1,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11),
  `last_update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_by` int(11),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_analysis_action_number` (`analysis_id`, `action_number`),
  KEY `idx_action_status` (`action_status`),
  KEY `idx_priority_level` (`priority_level`),
  KEY `idx_timeline` (`timeline`),
  KEY `idx_status` (`status`),
  FOREIGN KEY (`analysis_id`) REFERENCES `iqms_analyses`(`id`) ON DELETE CASCADE
);

-- =====================================================
-- 10. SEED DATA - OFFICES
-- =====================================================

INSERT INTO `iqms_offices` (`office_code`, `office_name`, `office_type`, `sort_order`, `created_by`) VALUES
('DTI-NCR', 'DTI-NCR Regional Office', 'Region', 1, 1),
('DTI-CAR', 'DTI-CAR Regional Office', 'Region', 2, 1),
('DTI-1', 'DTI-Region 1 Office', 'Region', 3, 1),
('DTI-2', 'DTI-Region 2 Office', 'Region', 4, 1),
('DTI-3', 'DTI-Region 3 Office', 'Region', 5, 1),
('DTI-4A', 'DTI-Region 4A Office', 'Region', 6, 1),
('DTI-4B', 'DTI-Region 4B Office', 'Region', 7, 1),
('DTI-5', 'DTI-Region 5 Office', 'Region', 8, 1),
('DTI-6', 'DTI-Region 6 Office', 'Region', 9, 1),
('DTI-10', 'DTI-10 Regional Office', 'Region', 10, 1),
('DTI-7', 'DTI-Region 7 Office', 'Region', 11, 1),
('DTI-8', 'DTI-Region 8 Office', 'Region', 12, 1),
('DTI-9', 'DTI-Region 9 Office', 'Region', 13, 1),
('DTI-11', 'DTI-Region 11 Office', 'Region', 14, 1),
('DTI-12', 'DTI-Region 12 Office', 'Region', 15, 1),
('DTI-13', 'DTI-Region 13 Office', 'Region', 16, 1),
('DTI-BARMM', 'DTI-BARMM Regional Office', 'Region', 17, 1);

-- =====================================================
-- 11. SEED DATA - PROCESSES
-- =====================================================

INSERT INTO `iqms_processes` (`process_code`, `process_name`, `process_description`, `process_category`, `default_process_owner`, `created_by`) VALUES
('TRAINING', 'CONDUCT OF TRAINING', 'Training programs for MSMEs and business development', 'Training', 'Training Coordinator', 1),
('CONSULTATION', 'BUSINESS CONSULTATION', 'One-on-one business consultation services', 'Consultation', 'Business Counselor', 1),
('MONITORING', 'BUSINESS MONITORING', 'Monitoring and evaluation of assisted businesses', 'Monitoring', 'Monitoring Officer', 1),
('REGISTRATION', 'BUSINESS REGISTRATION', 'Business name registration and permits assistance', 'Registration', 'Registration Officer', 1),
('FINANCING', 'FINANCING ASSISTANCE', 'Assistance in accessing financing programs', 'Financing', 'Financing Coordinator', 1),
('MARKET_ACCESS', 'MARKET ACCESS FACILITATION', 'Trade fairs and market linkage activities', 'Marketing', 'Marketing Officer', 1),
('PRODUCT_DEV', 'PRODUCT DEVELOPMENT', 'Product development and improvement programs', 'Development', 'Product Development Specialist', 1);

-- =====================================================
-- 12. SEED DATA - FORM CONFIGURATIONS
-- =====================================================

INSERT INTO `iqms_form_configurations` (`module_code`, `module_name`, `form_code`, `revision`, `form_title`, `requires_office`, `requires_process`, `requires_fiscal_year`, `effective_date`, `created_by`) VALUES
('STAKEHOLDERS', 'Process Stakeholders Analysis', 'FM-PL-02', '3', 'Process Stakeholders Analysis', 1, 1, 1, '2025-04-01', 1),
('SWOT', 'Process SWOT Analysis', 'FM-PL-03', '2', 'Process SWOT Analysis', 1, 1, 1, '2025-06-01', 1),
('ORG_OUTCOMES', 'Organization Outcomes', 'FM-PL-04', '2', 'Organization Outcomes', 1, 0, 1, '2025-04-01', 1),
('QUALITY_OBJ', 'Quality Objectives', 'FM-PL-05', '3', 'Quality Objectives', 1, 1, 1, '2025-04-01', 1),
('PROCESS_PERF', 'Process Performance Monitoring', 'FIA-PL-06', '3', 'Process Performance Monitoring', 1, 1, 1, '2025-04-01', 1),
('OPP_REGISTER', 'Opportunity Register', 'FM-PL-07', '3', 'Opportunity Register', 1, 1, 1, '2025-04-01', 1),
('RISK_REGISTER', 'Risk Register', 'FM-PL-08', '3', 'Risk Register', 1, 1, 1, '2025-04-01', 1),
('IMPROVEMENT', 'Improvement Action', 'FM-PL-09', '3', 'Improvement Action', 1, 1, 1, '2025-04-01', 1);

-- =====================================================
-- 13. SEED DATA - STAKEHOLDER CATEGORIES
-- =====================================================

INSERT INTO `iqms_stakeholder_categories` (`category_code`, `category_name`, `category_description`, `category_number`, `sort_order`, `created_by`) VALUES
('business_persons', 'Business Persons', 'Inclusions: business owners, entrepreneurs, MSMEs, product/service providers, investors', '1', 1, 1),
('government_agencies', 'Government Agencies', 'National and local government agencies, regulatory bodies', '2', 2, 1),
('financial_institutions', 'Financial Institutions', 'Banks, lending institutions, microfinance organizations', '3', 3, 1),
('development_partners', 'Development Partners', 'NGAs, LGUs, NGOs, Coaches/Mentors/Designers, MSME Council, Local Chambers, and Industry Associations, Province', '4', 4, 1),
('academic_institutions', 'Academic Institutions', 'Universities, colleges, research institutions, training centers', '5', 5, 1),
('media_partners', 'Media Partners', 'Print, broadcast, digital media organizations', '6', 6, 1),
('suppliers_vendors', 'Suppliers and Vendors', 'Service providers, equipment suppliers, contractors', '7', 7, 1),
('community_groups', 'Community Groups', 'Cooperatives, associations, community organizations', '8', 8, 1),
('regulatory_bodies', 'Regulatory Bodies', 'Professional regulation commissions, standards organizations', '9', 9, 1),
('dti_staff', 'DTI Staff/Contractual Services', 'Technical and non-technical DTI personnel', '10', 10, 1);

-- =====================================================
-- 14. SEED DATA - SAMPLE ANALYSES
-- =====================================================

-- Sample Stakeholder Analysis for DTI-10 Training Process
INSERT INTO `iqms_analyses` (`module_code`, `office_id`, `process_id`, `fiscal_year`, `process_owner`, `analysis_title`, `form_date`, `analysis_status`, `created_by`) VALUES
('STAKEHOLDERS', 10, 1, '2025', 'Training Coordinator', 'Stakeholder Analysis - Training Process FY 2025', '2025-04-01', 'In Progress', 1);

-- Sample SWOT Analysis for DTI-10 Training Process
INSERT INTO `iqms_analyses` (`module_code`, `office_id`, `process_id`, `fiscal_year`, `process_owner`, `analysis_title`, `form_date`, `analysis_status`, `created_by`) VALUES
('SWOT', 10, 1, '2025', 'Training Coordinator', 'SWOT Analysis - Training Process FY 2025', '2025-06-01', 'In Progress', 1);

-- Sample Organization Outcomes for DTI-10
INSERT INTO `iqms_analyses` (`module_code`, `office_id`, `process_id`, `fiscal_year`, `process_owner`, `analysis_title`, `form_date`, `analysis_status`, `created_by`) VALUES
('ORG_OUTCOMES', 10, NULL, '2025', 'Regional Director', 'Organization Outcomes FY 2025', '2025-04-01', 'In Progress', 1);

-- Sample Quality Objectives for DTI-10 Training Process
INSERT INTO `iqms_analyses` (`module_code`, `office_id`, `process_id`, `fiscal_year`, `process_owner`, `analysis_title`, `form_date`, `analysis_status`, `created_by`) VALUES
('QUALITY_OBJ', 10, 1, '2025', 'Training Coordinator', 'Quality Objectives - Training Process FY 2025', '2025-04-01', 'In Progress', 1);

-- Sample Risk Register for DTI-10 Training Process
INSERT INTO `iqms_analyses` (`module_code`, `office_id`, `process_id`, `fiscal_year`, `process_owner`, `analysis_title`, `form_date`, `analysis_status`, `created_by`) VALUES
('RISK_REGISTER', 10, 1, '2025', 'Training Coordinator', 'Risk Register - Training Process FY 2025', '2025-04-01', 'In Progress', 1);

-- Sample Opportunity Register for DTI-10 Training Process
INSERT INTO `iqms_analyses` (`module_code`, `office_id`, `process_id`, `fiscal_year`, `process_owner`, `analysis_title`, `form_date`, `analysis_status`, `created_by`) VALUES
('OPP_REGISTER', 10, 1, '2025', 'Training Coordinator', 'Opportunity Register - Training Process FY 2025', '2025-04-01', 'In Progress', 1);

-- =====================================================
-- 15. SEED DATA - SAMPLE STAKEHOLDER ENTRIES
-- =====================================================

-- Business Persons stakeholder entries
INSERT INTO `iqms_stakeholder_entries` (`analysis_id`, `category_id`, `needs_expectations`, `potential_risks`, `potential_opportunities`, `to_be_considered`, `risk_reference`, `opportunity_reference`, `analysis_set_number`, `created_by`) VALUES
(1, 1, '1.5 Proper, comfortable and Minimum Public Health Standards Protocol-compliant venue with decent food', '', '', 'Yes', '', 'OR-2', 1, 1),
(1, 1, '1.6 Organized / systematized conduct of various DTI training activities', 'Training not implemented as planned', 'Increase participants retention and improve learning', 'No', '', 'OR-8', 2, 1),
(1, 1, '1.18 Expected learning objectives achieved', 'Training not implemented as planned', 'Improved business outcomes', 'Yes', '', 'OR-4', 3, 1);

-- Development Partners stakeholder entries
INSERT INTO `iqms_stakeholder_entries` (`analysis_id`, `category_id`, `needs_expectations`, `potential_risks`, `potential_opportunities`, `to_be_considered`, `risk_reference`, `opportunity_reference`, `analysis_set_number`, `created_by`) VALUES
(1, 4, '4.2 Clear and judicious MOA or MOU', 'Misalignment of goals and objectives', 'Efficient resource allocation and availability of competent Resource Speakers', 'Yes', 'RR-3', 'OR-3', 1, 1),
(1, 4, '4.3 Prompt and fair compensation of services rendered', 'Legal and Contractual Implications', 'long-term collaboration and trust among development partners', 'No', 'RR-4', 'OR-4', 2, 1);

-- DTI Staff stakeholder entries
INSERT INTO `iqms_stakeholder_entries` (`analysis_id`, `category_id`, `needs_expectations`, `potential_risks`, `potential_opportunities`, `to_be_considered`, `risk_reference`, `opportunity_reference`, `analysis_set_number`, `created_by`) VALUES
(1, 10, '10.1 Ready provision of appropriate resources and logistical support in the implementation of PAPs', 'Training not implemented as planned', 'Improved training delivery', 'Yes', '', 'RR-2', 1, 1),
(1, 10, '10.2 Provision of capability building activities as well as physical and mental wellness program', 'Demotivated personnel', 'Efficient resource utilization and improved staff performance', 'No', 'RR-5', 'OR-5', 2, 1);

-- =====================================================
-- 16. SEED DATA - SAMPLE SWOT ENTRIES
-- =====================================================

-- Strengths
INSERT INTO `iqms_swot_entries` (`analysis_id`, `swot_type`, `item_number`, `item_description`, `potential_opportunity`, `reference_links`, `current_status`, `created_by`) VALUES
(2, 'strength', 'S-1', 'Presence of dedicated, reliable and competent staff', 'Pool of in-house resource persons to conduct the training effectively and efficiently', 'OR-6', 'Identified', 1),
(2, 'strength', 'S-2', 'Inclusive growth programs in place (e.g. training programs)', 'Effective and efficient conduct of relevant trainings', 'OR-1', 'Identified', 1),
(2, 'strength', 'S-3', 'Availability of ICT infrastructure (hardware, software, systems)', 'Use of new methodology in conducting trainings online such as thru zoom, googlemeet, webex, teams', 'OR-7', 'Identified', 1);

-- Weaknesses
INSERT INTO `iqms_swot_entries` (`analysis_id`, `swot_type`, `item_number`, `item_description`, `current_status`, `created_by`) VALUES
(2, 'weakness', 'W-1', 'Limited manpower', 'Identified', 1),
(2, 'weakness', 'W-5', 'Lack of integrated database and data management system', 'Identified', 1);

-- Opportunities
INSERT INTO `iqms_swot_entries` (`analysis_id`, `swot_type`, `item_number`, `item_description`, `potential_opportunity`, `reference_links`, `current_status`, `created_by`) VALUES
(2, 'opportunity', 'O-1', 'Availability of external training programs', 'Pool of in-house resource persons to conduct the training effectively and efficiently', 'OR-6', 'Identified', 1),
(2, 'opportunity', 'O-3', 'Availability and advancement of ICT infra and systems', 'More MSMEs can be reached to participate in the training program', 'OR-8', 'Identified', 1);

-- Threats
INSERT INTO `iqms_swot_entries` (`analysis_id`, `swot_type`, `item_number`, `item_description`, `current_status`, `created_by`) VALUES
(2, 'threat', 'T-1', 'Negative Political Interventions', 'Identified', 1),
(2, 'threat', 'T-2', 'Power interruptions', 'Identified', 1);

-- =====================================================
-- 17. SEED DATA - SAMPLE ORGANIZATION OUTCOMES
-- =====================================================

INSERT INTO `iqms_organization_outcomes` (`analysis_id`, `outcome_code`, `organizational_outcome`, `measure`, `baseline`, `target`, `outcome_status`, `responsible_person`, `created_by`) VALUES
(3, 'OO1', 'EXPORTS AND INVESTMENT DEVELOPED', 'Amount of Exports', 'c/o Head Office', 'c/o Head Office', 'Active', 'Regional Director', 1),
(3, 'OO1', 'EXPORTS AND INVESTMENT DEVELOPED', 'Amount of Approved Investments', 'c/o Head Office', 'c/o Head Office', 'Active', 'Regional Director', 1),
(3, 'OO2', 'COMPETITIVE AND INNOVATIVE INDUSTRY AND SERVICES SECTOR DEVELOPED', 'No. of MSMEs assisted', '2,500', '3,000', 'Active', 'Industry Development Officer', 1),
(3, 'OO3', 'EMPOWERED AND PROTECTED CONSUMERS', 'No. of consumer complaints resolved', '95%', '98%', 'Active', 'Consumer Protection Officer', 1);

-- =====================================================
-- 18. SEED DATA - SAMPLE QUALITY OBJECTIVES
-- =====================================================

INSERT INTO `iqms_quality_objectives` (`analysis_id`, `objective_code`, `quality_objective`, `target`, `output_indicator`, `process_owner`, `objective_status`, `created_by`) VALUES
(4, 'QO-001', 'Enhance Competitiveness of MSMEs', '80% of training participants show improved business performance within 6 months', 'No. of MSMEs with improved performance', 'Training Coordinator', 'In Progress', 1),
(4, 'QO-002', 'Build Productivity and Efficiency of MSMEs', '50% of trainings conducted as scheduled/planned per semester based on the approved Annual Work and Financial Plan', 'No. of Trainings Conducted', 'Industry Focal Person', 'Not Started', 1);

-- Sample Action Plans for Quality Objectives
INSERT INTO `iqms_quality_objective_action_plans` (`objective_id`, `action_text`, `timeline`, `responsibility`, `resources_needed`, `action_status`, `created_by`) VALUES
(1, 'Conduct Training Needs Assessment (TNA) for target participants', 'Quarterly', 'Training Coordinator', 'Survey forms, data collection tools', 'In Progress', 1),
(1, 'Develop competency-based training modules', 'Semi-annually', 'Training Coordinator/Subject Matter Experts', 'Training materials, expert consultants', 'Not Started', 1),
(2, 'Develop database of competent pool of resource persons', 'Annually', 'Industry Focal Person/NC Counselor', 'Database of in-house speakers', 'Not Started', 1);

-- =====================================================
-- 19. SEED DATA - SAMPLE RISK REGISTER
-- =====================================================

INSERT INTO `iqms_risk_register` (`analysis_id`, `risk_id`, `risk_description`, `potential_impact`, `risk_category`, `probability`, `impact`, `priority`, `risk_status`, `identification_date`, `risk_owner`, `effectiveness_indicator`, `created_by`) VALUES
(5, 'RR-1', 'Dissatisfied clients', '1.1 Low CSF rating', 'Service Delivery', 2, 3, '1st', 'open', '2025-06-05', 'Training Coordinator', '100% Satisfactory CSF rating', 1),
(5, 'RR-2', 'Inadequate training resources', 'Poor training quality and participant experience', 'Resource Management', 3, 3, '2nd', 'open', '2025-06-05', 'Training Coordinator', 'All training sessions fully equipped', 1),
(5, 'RR-3', 'Misalignment with partner expectations', 'Partnership breakdown and resource loss', 'Partnership Management', 2, 4, '1st', 'open', '2025-06-05', 'Partnership Coordinator', 'Clear MOA/MOU compliance rate', 1);

-- Sample Risk Causes
INSERT INTO `iqms_risk_causes` (`risk_id`, `cause_number`, `cause_description`, `created_by`) VALUES
(1, '1.1', 'Training not applicable to business level', 1),
(1, '1.2', 'Poor trainer engagement', 1),
(2, '2.1', 'Limited budget allocation', 1),
(2, '2.2', 'Equipment malfunction or unavailability', 1);

-- Sample Risk Treatments
INSERT INTO `iqms_risk_treatments` (`risk_id`, `treatment_description`, `treatment_type`, `responsible_person`, `target_date`, `treatment_status`, `created_by`) VALUES
(1, 'Conduct comprehensive Training Needs Assessment before each program', 'Mitigate', 'Training Coordinator', '2025-07-01', 'Planned', 1),
(1, 'Implement trainer evaluation and feedback system', 'Mitigate', 'Training Coordinator', '2025-08-01', 'Planned', 1),
(2, 'Establish equipment maintenance schedule and backup resources', 'Mitigate', 'Administrative Officer', '2025-07-15', 'Planned', 1);

-- =====================================================
-- 20. SEED DATA - SAMPLE OPPORTUNITY REGISTER
-- =====================================================

INSERT INTO `iqms_opportunity_register` (`analysis_id`, `opportunity_id`, `opportunity_description`, `probability`, `strategic_impact`, `service_impact`, `financial_impact`, `reputation_impact`, `opportunity_status`, `identification_date`, `opportunity_owner`, `effectiveness_indicator`, `created_by`) VALUES
(6, 'OR-1', 'Effective and efficient conduct of relevant trainings', 3, 3, 3, 3, 3, 'Identified', '2025-06-01', 'Training Coordinator', 'Client satisfaction feedback/rating', 1),
(6, 'OR-6', 'Pool of in-house resource persons to conduct training effectively and efficiently', 4, 4, 4, 3, 4, 'Identified', '2025-06-01', 'Training Coordinator', 'Number of certified internal trainers', 1),
(6, 'OR-7', 'Use of new methodology in conducting trainings online', 3, 3, 4, 2, 3, 'Identified', '2025-06-01', 'IT Coordinator', 'Percentage of online training sessions conducted', 1),
(6, 'OR-8', 'More MSMEs can be reached to participate in training programs', 4, 4, 5, 3, 4, 'In Progress', '2025-06-01', 'Training Coordinator', 'Number of participants reached through online platforms', 1);

-- Sample Opportunity Actions
INSERT INTO `iqms_opportunity_actions` (`opportunity_id`, `action_description`, `responsibility`, `timeline`, `success_indicator`, `action_status`, `created_by`) VALUES
(1, '1.1 Ensure to conduct TNA and profiling of participants and communication in advance to the resource person', 'Training Coordinator', 'every conduct of training', 'Client satisfaction feedback/rating', 'Planned', 1),
(2, 'Develop internal trainer certification program', 'Training Coordinator', 'Annually', 'Number of certified internal trainers', 'Planned', 1),
(3, 'Implement hybrid training delivery system', 'IT Coordinator/Training Coordinator', 'Q3 2025', 'Percentage of online training sessions conducted', 'In Progress', 1),
(4, 'Expand training reach through digital platforms', 'Training Coordinator', 'Q2-Q4 2025', 'Number of participants reached through online platforms', 'In Progress', 1);

-- =====================================================
-- END OF SCRIPT
-- =====================================================

-- Display completion message
SELECT 'IQMS Database Schema and Seed Data Installation Complete!' as Status;
