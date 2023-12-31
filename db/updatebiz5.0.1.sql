REPLACE INTO `zt_workflow` (`parent`, `child`, `type`, `navigator`, `app`, `position`, `module`, `table`, `name`, `flowchart`, `js`, `css`, `order`, `buildin`, `administrator`, `desc`, `version`, `status`, `createdBy`, `createdDate`, `editedBy`, `editedDate`) VALUES
('',	'',	'flow',	'primary',	'project',	'',	'program',	'zt_project',	'项目集',	'',	'',	'',	0,	1,	'',	'',	'1.0',	'normal',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('',	'',	'flow',	'primary',	'project',	'',	'project',	'zt_project',	'项目',	'',	'',	'',	0,	1,	'',	'',	'1.0',	'normal',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('',	'',	'flow',	'primary',	'project',	'',	'execution',	'zt_project',	'执行',	'',	'',	'',	0,	1,	'',	'',	'1.0',	'normal',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00');

REPLACE INTO `zt_workflowaction` (`module`, `action`, `name`, `type`, `batchMode`, `extensionType`, `open`, `position`, `layout`, `show`, `order`, `buildin`, `virtual`, `conditions`, `verifications`, `hooks`, `linkages`, `js`, `css`, `toList`, `blocks`, `desc`, `status`, `createdBy`, `createdDate`, `editedBy`, `editedDate`) VALUES
('program',	'browse',	'项目集列表',	'single',	'different',	'none',	'normal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'create',	'添加项目集',	'single',	'different',	'none',	'normal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'edit',	'编辑项目集',	'single',	'different',	'none',	'normal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'view',	'项目集详情',	'single',	'different',	'none',	'normal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'delete',	'删除项目集',	'single',	'different',	'none',	'none',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'close',	'关闭项目集',	'single',	'different',	'none',	'modal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'activate',	'激活项目集',	'single',	'different',	'none',	'modal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'start',	'启动项目集',	'single',	'different',	'none',	'modal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'suspend',	'挂起项目集',	'single',	'different',	'none',	'modal',	'browseandview',	'normal',	'dropdownlist',	0,	1,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'',	'enable',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00');

REPLACE INTO `zt_workflowfield` (`module`, `field`, `type`, `length`, `name`, `control`, `expression`, `options`, `default`, `rules`, `placeholder`, `order`, `searchOrder`, `exportOrder`, `canExport`, `canSearch`, `isValue`, `readonly`, `buildin`, `desc`, `createdBy`, `createdDate`, `editedBy`, `editedDate`) VALUES
('program',	'id',	'mediumint',	'8',	'编号',	'input',	'',	'',	'',	'',	'',	1,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'type',	'varchar',	'20',	'类型',	'select',	'',	'16',	'sprint',	'',	'',	2,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'parent',	'mediumint',	'8',	'父项目集',	'input',	'',	'',	'0',	'',	'',	3,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'name',	'varchar',	'90',	'项目集名称',	'input',	'',	'',	'',	'',	'',	4,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'budget',	'varchar',	'30',	'预算',	'input',	'',	'',	'0',	'',	'',	6,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'budgetUnit',	'char',	'30',	'预算单位',	'input',	'',	'',	'CNY',	'',	'',	7,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'admin',	'2021-07-28 16:55:23'),
('program',	'begin',	'date',	'',	'计划开始',	'input',	'',	'',	'',	'',	'',	8,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'end',	'date',	'',	'计划完成',	'input',	'',	'',	'',	'',	'',	9,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'days',	'smallint',	'5',	'可用工作日',	'input',	'',	'',	'',	'',	'',	10,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'status',	'varchar',	'10',	'状态',	'select',	'',	'17',	'',	'',	'',	11,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'stage',	'enum',	'',	'阶段',	'input',	'',	'',	'1',	'',	'',	12,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'pri',	'enum',	'',	'优先级',	'input',	'',	'',	'1',	'',	'',	13,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'desc',	'text',	'',	'项目集描述',	'input',	'',	'',	'',	'',	'',	14,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'openedBy',	'varchar',	'30',	'由谁创建',	'select',	'',	'user',	'',	'',	'',	15,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'openedDate',	'datetime',	'',	'创建日期',	'input',	'',	'',	'',	'',	'',	16,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'closedBy',	'varchar',	'30',	'由谁关闭',	'select',	'',	'user',	'',	'',	'',	17,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'closedDate',	'datetime',	'',	'关闭日期',	'input',	'',	'',	'',	'',	'',	18,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'canceledBy',	'varchar',	'30',	'由谁取消',	'select',	'',	'user',	'',	'',	'',	19,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'canceledDate',	'datetime',	'',	'取消日期',	'input',	'',	'',	'',	'',	'',	20,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'PO',	'varchar',	'30',	'PO',	'select',	'',	'user',	'',	'',	'',	21,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'PM',	'varchar',	'30',	'负责人',	'select',	'',	'user',	'',	'',	'',	22,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'QD',	'varchar',	'30',	'QD',	'select',	'',	'user',	'',	'',	'',	23,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'RD',	'varchar',	'30',	'RD',	'select',	'',	'user',	'',	'',	'',	24,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'team',	'varchar',	'90',	'团队',	'input',	'',	'',	'',	'',	'',	25,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'acl',	'enum',	'',	'访问控制',	'select',	'',	'18',	'open',	'',	'',	26,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'whitelist',	'text',	'',	'白名单',	'select',	'',	'7',	'',	'',	'',	27,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'order',	'mediumint',	'8',	'排序',	'input',	'',	'',	'',	'',	'',	28,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00'),
('program',	'deleted',	'enum',	'',	'已删除',	'select',	'',	'[\"\\u672a\\u5220\\u9664\",\"\\u5df2\\u5220\\u9664\"]',	'0',	'',	'',	29,	0,	0,	'0',	'0',	'0',	'1',	1,	'',	'',	'2021-07-28 16:54:38',	'',	'0000-00-00 00:00:00');
