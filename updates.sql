ALTER TABLE `oc2_t_alerts` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc2_t_cron` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc2_t_locations_tmp` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc2_t_meta_fields` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc2_t_preference` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc2_t_widget` CHANGE `e_kind` `e_type` varchar(40);
ALTER TABLE `oc_t_alerts` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc_t_cron` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc_t_locations_tmp` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc_t_meta_fields` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc_t_preference` CHANGE `e_type` `e_type` varchar(40);
ALTER TABLE `oc_t_widget` CHANGE `e_kind` `e_type` varchar(40);
ALTER TABLE `oc_t_cron` ADD id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE `oc_t_latest_searches` ADD id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE `oc_t_log` ADD id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE `oc_t_plugin_category` ADD id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE `oc_t_preference` ADD id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY;