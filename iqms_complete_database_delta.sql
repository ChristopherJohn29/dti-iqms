-- Delta patch to apply recommendations to IQMS schema

-- 1) Add composite index to iqms_analyses (if not present)
ALTER TABLE `iqms_analyses`
  ADD KEY `idx_office_process_year_module` (`office_id`, `process_id`, `fiscal_year`, `module_code`),
  ADD CONSTRAINT `fk_analyses_approved_by_users` FOREIGN KEY (`approved_by`) REFERENCES `users`(`id`) ON DELETE SET NULL;

-- 2) Fix organization outcomes uniqueness (drop old unique and add new composite)
ALTER TABLE `iqms_organization_outcomes`
  DROP INDEX `unique_analysis_outcome_code`;
CREATE UNIQUE INDEX `unique_analysis_outcome_code_measure`
  ON `iqms_organization_outcomes` (`analysis_id`, `outcome_code`, `measure`(100));

-- 3) Add effectiveness_indicator to opportunities
ALTER TABLE `iqms_opportunity_register`
  ADD COLUMN `effectiveness_indicator` varchar(255) AFTER `opportunity_owner`;

-- 4) Create opportunity monitoring table
CREATE TABLE IF NOT EXISTS `iqms_opportunity_monitoring` (
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

-- 5) Fix seed typo in stakeholder entries if needed
-- You can run an update after seeding to correct a misplaced reference code if it exists
-- UPDATE `iqms_stakeholder_entries` SET `risk_reference`='RR-2', `opportunity_reference`=NULL WHERE `analysis_id`=1 AND `category_id`=10 AND `analysis_set_number`=1 AND `opportunity_reference`='RR-2';

