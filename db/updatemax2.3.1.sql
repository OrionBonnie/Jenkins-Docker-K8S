ALTER TABLE `zt_auditplan` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_meeting` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_issue` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_risk` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_opportunity` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_process` ADD `model` char(30) NOT NULL DEFAULT 'waterfall' AFTER `id`;
ALTER TABLE `zt_programactivity` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_programoutput` ADD `execution` mediumint(8) unsigned NOT NULL AFTER `project`;
ALTER TABLE `zt_auditcl` ADD `model` char(30) NOT NULL DEFAULT 'waterfall' AFTER `id`;
ALTER TABLE `zt_meastemplate` ADD `model` char(30) NOT NULL AFTER `id`;
UPDATE `zt_meastemplate` SET `model` = 'waterfall';
