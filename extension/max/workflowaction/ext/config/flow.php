<?php
$config->workflowaction->buildin = new stdclass();
$config->workflowaction->buildin->actions['product']     = array('browse', 'create', 'batchedit', 'edit', 'view', 'delete', 'close', 'all');
$config->workflowaction->buildin->actions['story']       = array('create', 'batchcreate', 'batchedit', 'exporttemplate', 'import', 'showimport', 'edit', 'view', 'delete', 'close', 'activate', 'assignTo', 'review', 'change');
$config->workflowaction->buildin->actions['productplan'] = array('browse', 'create', 'batchedit', 'edit', 'view', 'delete');
$config->workflowaction->buildin->actions['release']     = array('browse', 'create', 'edit', 'view', 'delete');
$config->workflowaction->buildin->actions['program']     = array('browse', 'create', 'edit', 'delete', 'close', 'activate', 'start', 'suspend');
$config->workflowaction->buildin->actions['project']     = array('browse', 'create', 'batchedit', 'edit', 'view', 'delete', 'close', 'activate', 'start', 'suspend');
$config->workflowaction->buildin->actions['execution']   = array('task',   'create', 'batchedit', 'edit', 'view', 'delete', 'close', 'activate', 'start', 'putoff', 'suspend', 'all', 'build');
$config->workflowaction->buildin->actions['task']        = array('create', 'batchcreate', 'batchedit', 'exporttemplate', 'import', 'showimport', 'edit', 'view', 'delete', 'close', 'activate', 'assignTo', 'confirmStoryChange', 'start', 'finish', 'pause', 'restart', 'cancel');
$config->workflowaction->buildin->actions['build']       = array('create', 'edit', 'view', 'delete');
$config->workflowaction->buildin->actions['bug']         = array('browse', 'create', 'batchcreate', 'batchedit', 'exporttemplate', 'import', 'showimport', 'edit', 'view', 'delete', 'close', 'activate', 'assignTo', 'confirmBug', 'resolve', 'batchconfirm', 'batchresolve', 'batchactivate');
$config->workflowaction->buildin->actions['testcase']    = array('browse', 'create', 'batchcreate', 'batchedit', 'exporttemplate', 'import', 'showimport', 'edit', 'view', 'delete', 'review');
$config->workflowaction->buildin->actions['testtask']    = array('browse', 'create', 'edit', 'view', 'delete', 'close', 'activate', 'start', 'block');
$config->workflowaction->buildin->actions['testsuite']   = array('browse', 'create', 'edit', 'view', 'delete');
$config->workflowaction->buildin->actions['caselib']     = array('browse', 'create', 'edit', 'view', 'delete');
$config->workflowaction->buildin->actions['feedback']    = array('browse', 'create', 'batchedit', 'edit', 'view', 'delete', 'close', 'assignTo', 'review', 'comment', 'reply', 'ask', 'admin', 'adminview');
$config->workflowaction->buildin->actions['ticket']      = array('browse', 'create', 'edit', 'view', 'close', 'start', 'finish', 'assign', 'activate', 'batchedit');

$config->workflowaction->openBrowseModules = ',program,testsuite,testtask,release,productplan,';
$config->workflowaction->openBrowseActions = array('execution' => 'all');

$config->workflowaction->buildin->opens['product']['close']           = 'modal';
$config->workflowaction->buildin->opens['product']['delete']          = 'none';
$config->workflowaction->buildin->opens['program']['suspend']         = 'modal';
$config->workflowaction->buildin->opens['program']['activate']        = 'modal';
$config->workflowaction->buildin->opens['program']['close']           = 'modal';
$config->workflowaction->buildin->opens['program']['start']           = 'modal';
$config->workflowaction->buildin->opens['program']['delete']          = 'none';
$config->workflowaction->buildin->opens['project']['suspend']         = 'modal';
$config->workflowaction->buildin->opens['project']['activate']        = 'modal';
$config->workflowaction->buildin->opens['project']['close']           = 'modal';
$config->workflowaction->buildin->opens['project']['start']           = 'modal';
$config->workflowaction->buildin->opens['project']['delete']          = 'none';
$config->workflowaction->buildin->opens['execution']['suspend']       = 'modal';
$config->workflowaction->buildin->opens['execution']['activate']      = 'modal';
$config->workflowaction->buildin->opens['execution']['close']         = 'modal';
$config->workflowaction->buildin->opens['execution']['putoff']        = 'modal';
$config->workflowaction->buildin->opens['execution']['start']         = 'modal';
$config->workflowaction->buildin->opens['execution']['delete']        = 'none';
$config->workflowaction->buildin->opens['story']['activate']          = 'modal';
$config->workflowaction->buildin->opens['story']['close']             = 'modal';
$config->workflowaction->buildin->opens['story']['assignTo']          = 'modal';
$config->workflowaction->buildin->opens['story']['exporttemplate']    = 'modal';
$config->workflowaction->buildin->opens['story']['showimport']        = 'modal';
$config->workflowaction->buildin->opens['story']['import']            = 'modal';
$config->workflowaction->buildin->opens['story']['delete']            = 'none';
$config->workflowaction->buildin->opens['productplan']['delete']      = 'none';
$config->workflowaction->buildin->opens['release']['delete']          = 'none';
$config->workflowaction->buildin->opens['task']['assignTo']           = 'modal';
$config->workflowaction->buildin->opens['task']['confirmStoryChange'] = 'none';
$config->workflowaction->buildin->opens['task']['start']              = 'modal';
$config->workflowaction->buildin->opens['task']['finish']             = 'modal';
$config->workflowaction->buildin->opens['task']['pause']              = 'modal';
$config->workflowaction->buildin->opens['task']['restart']            = 'modal';
$config->workflowaction->buildin->opens['task']['close']              = 'modal';
$config->workflowaction->buildin->opens['task']['activate']           = 'modal';
$config->workflowaction->buildin->opens['task']['cancel']             = 'modal';
$config->workflowaction->buildin->opens['task']['delete']             = 'none';
$config->workflowaction->buildin->opens['task']['exporttemplate']     = 'modal';
$config->workflowaction->buildin->opens['task']['showimport']         = 'modal';
$config->workflowaction->buildin->opens['task']['import']             = 'modal';
$config->workflowaction->buildin->opens['build']['delete']            = 'none';
$config->workflowaction->buildin->opens['bug']['assignTo']            = 'modal';
$config->workflowaction->buildin->opens['bug']['confirmBug']          = 'modal';
$config->workflowaction->buildin->opens['bug']['resolve']             = 'modal';
$config->workflowaction->buildin->opens['bug']['activate']            = 'modal';
$config->workflowaction->buildin->opens['bug']['close']               = 'modal';
$config->workflowaction->buildin->opens['bug']['delete']              = 'none';
$config->workflowaction->buildin->opens['bug']['exporttemplate']      = 'modal';
$config->workflowaction->buildin->opens['bug']['showimport']          = 'modal';
$config->workflowaction->buildin->opens['bug']['import']              = 'modal';
$config->workflowaction->buildin->opens['bug']['batchconfirm']        = 'none';
$config->workflowaction->buildin->opens['bug']['batchresolve']        = 'none';
$config->workflowaction->buildin->opens['testcase']['delete']         = 'none';
$config->workflowaction->buildin->opens['testcase']['exporttemplate'] = 'modal';
$config->workflowaction->buildin->opens['testcase']['showimport']     = 'modal';
$config->workflowaction->buildin->opens['testcase']['import']         = 'modal';
$config->workflowaction->buildin->opens['testtask']['start']          = 'modal';
$config->workflowaction->buildin->opens['testtask']['activate']       = 'modal';
$config->workflowaction->buildin->opens['testtask']['close']          = 'modal';
$config->workflowaction->buildin->opens['testtask']['block']          = 'modal';
$config->workflowaction->buildin->opens['testtask']['delete']         = 'none';
$config->workflowaction->buildin->opens['testsuite']['delete']        = 'none';
$config->workflowaction->buildin->opens['caselib']['delete']          = 'none';
$config->workflowaction->buildin->opens['feedback']['review']         = 'modal';
$config->workflowaction->buildin->opens['feedback']['assignTo']       = 'modal';
$config->workflowaction->buildin->opens['feedback']['close']          = 'modal';
$config->workflowaction->buildin->opens['feedback']['comment']        = 'modal';
$config->workflowaction->buildin->opens['feedback']['flowreply']      = 'modal';
$config->workflowaction->buildin->opens['feedback']['flowask']        = 'modal';
$config->workflowaction->buildin->opens['feedback']['delete']         = 'none';
$config->workflowaction->buildin->opens['ticket']['close']            = 'modal';
$config->workflowaction->buildin->opens['ticket']['start']            = 'modal';
$config->workflowaction->buildin->opens['ticket']['finish']           = 'modal';

$config->workflowaction->buildin->layouts['product']['view']  = 'side';
$config->workflowaction->buildin->layouts['story']['edit']    = 'side';
$config->workflowaction->buildin->layouts['story']['view']    = 'side';
$config->workflowaction->buildin->layouts['project']['view']  = 'side';
$config->workflowaction->buildin->layouts['task']['edit']     = 'side';
$config->workflowaction->buildin->layouts['task']['view']     = 'side';
$config->workflowaction->buildin->layouts['bug']['edit']      = 'side';
$config->workflowaction->buildin->layouts['bug']['view']      = 'side';
$config->workflowaction->buildin->layouts['testcase']['edit'] = 'side';
$config->workflowaction->buildin->layouts['testcase']['view'] = 'side';
$config->workflowaction->buildin->layouts['testtask']['view'] = 'side';
$config->workflowaction->buildin->layouts['feedback']['view'] = 'side';
$config->workflowaction->buildin->layouts['ticket']['view']   = 'side';

$config->workflowaction->default->types['batchconfirm'] = 'batch';
$config->workflowaction->default->types['batchresolve'] = 'batch';

$config->workflowaction->buildin->types = array();
$config->workflowaction->buildin->types['product']['batchedit']     = 'batch';
$config->workflowaction->buildin->types['productplan']['batchedit'] = 'batch';
$config->workflowaction->buildin->types['story']['batchcreate']     = 'batch';
$config->workflowaction->buildin->types['story']['batchedit']       = 'batch';
$config->workflowaction->buildin->types['project']['batchedit']     = 'batch';
$config->workflowaction->buildin->types['execution']['batchedit']   = 'batch';
$config->workflowaction->buildin->types['bug']['batchcreate']       = 'batch';
$config->workflowaction->buildin->types['bug']['batchedit']         = 'batch';
$config->workflowaction->buildin->types['bug']['batchconfirm']      = 'batch';
$config->workflowaction->buildin->types['bug']['batchresolve']      = 'batch';
$config->workflowaction->buildin->types['bug']['batchactivate']     = 'batch';
$config->workflowaction->buildin->types['task']['batchcreate']      = 'batch';
$config->workflowaction->buildin->types['task']['batchedit']        = 'batch';
$config->workflowaction->buildin->types['feedback']['admin']        = 'batch';
$config->workflowaction->buildin->types['feedback']['browse']       = 'batch';
$config->workflowaction->buildin->types['feedback']['batchedit']    = 'batch';
$config->workflowaction->buildin->types['ticket']['browse']         = 'batch';
$config->workflowaction->buildin->types['caselib']['browse']        = 'batch';
$config->workflowaction->buildin->types['testcase']['browse']       = 'batch';
$config->workflowaction->buildin->types['testsuite']['browse']      = 'batch';
$config->workflowaction->buildin->types['testtask']['browse']       = 'batch';

$config->workflowaction->buildin->positions['product']['browse']          = 'browse';
$config->workflowaction->buildin->positions['product']['batchedit']       = 'browse';
$config->workflowaction->buildin->positions['product']['all']             = 'browse';
$config->workflowaction->buildin->positions['product']['view']            = 'browse';
$config->workflowaction->buildin->positions['productplan']['browse']      = 'browse';
$config->workflowaction->buildin->positions['productplan']['view']        = 'browse';
$config->workflowaction->buildin->positions['productplan']['batchedit']   = 'browse';
$config->workflowaction->buildin->positions['productplan']['view']        = 'browse';
$config->workflowaction->buildin->positions['release']['browse']          = 'browse';
$config->workflowaction->buildin->positions['release']['view']            = 'browse';
$config->workflowaction->buildin->positions['story']['browse']            = 'browse';
$config->workflowaction->buildin->positions['story']['exporttemplate']    = 'browse';
$config->workflowaction->buildin->positions['story']['import']            = 'browse';
$config->workflowaction->buildin->positions['story']['view']              = 'browse';
$config->workflowaction->buildin->positions['story']['batchedit']         = 'browse';
$config->workflowaction->buildin->positions['project']['batchedit']       = 'browse';
$config->workflowaction->buildin->positions['project']['create']          = 'browse';
$config->workflowaction->buildin->positions['project']['view']            = 'browse';
$config->workflowaction->buildin->positions['execution']['batchedit']     = 'browse';
$config->workflowaction->buildin->positions['execution']['activate']      = 'view';
$config->workflowaction->buildin->positions['execution']['close']         = 'view';
$config->workflowaction->buildin->positions['execution']['putoff']        = 'view';
$config->workflowaction->buildin->positions['execution']['view']          = 'browse';
$config->workflowaction->buildin->positions['build']['create']            = 'browse';
$config->workflowaction->buildin->positions['build']['view']              = 'browse';
$config->workflowaction->buildin->positions['bug']['view']                = 'browse';
$config->workflowaction->buildin->positions['bug']['batchconfirm']        = 'browse';
$config->workflowaction->buildin->positions['bug']['batchactivate']       = 'browse';
$config->workflowaction->buildin->positions['bug']['batchcreate']         = 'browse';
$config->workflowaction->buildin->positions['bug']['batchedit']           = 'browse';
$config->workflowaction->buildin->positions['bug']['batchresolve']        = 'browse';
$config->workflowaction->buildin->positions['bug']['exporttemplate']      = 'browse';
$config->workflowaction->buildin->positions['bug']['import']              = 'browse';
$config->workflowaction->buildin->positions['bug']['showimport']          = 'browse';
$config->workflowaction->buildin->positions['bug']['activate']            = 'view';
$config->workflowaction->buildin->positions['bug']['delete']              = 'view';
$config->workflowaction->buildin->positions['task']['import']             = 'browse';
$config->workflowaction->buildin->positions['task']['showimport']         = 'browse';
$config->workflowaction->buildin->positions['task']['view']               = 'browse';
$config->workflowaction->buildin->positions['task']['batchedit']          = 'browse';
$config->workflowaction->buildin->positions['task']['exporttemplate']     = 'browse';
$config->workflowaction->buildin->positions['task']['activate']           = 'view';
$config->workflowaction->buildin->positions['task']['cancel']             = 'view';
$config->workflowaction->buildin->positions['task']['confirmStoryChange'] = 'view';
$config->workflowaction->buildin->positions['task']['delete']             = 'view';
$config->workflowaction->buildin->positions['task']['pause']              = 'view';
$config->workflowaction->buildin->positions['feedback']['batchedit']      = 'browse';
$config->workflowaction->buildin->positions['feedback']['view']           = 'browse';
$config->workflowaction->buildin->positions['feedback']['create']         = 'browse';
$config->workflowaction->buildin->positions['ticket']['view']             = 'browse';
$config->workflowaction->buildin->positions['ticket']['create']           = 'browse';
$config->workflowaction->buildin->positions['testcase']['batchedit']      = 'browse';
$config->workflowaction->buildin->positions['testcase']['batchcreate']    = 'browse';
$config->workflowaction->buildin->positions['testcase']['import']         = 'browse';
$config->workflowaction->buildin->positions['testcase']['view']           = 'browse';
$config->workflowaction->buildin->positions['caselib']['view']            = 'browse';
$config->workflowaction->buildin->positions['testsuite']['view']          = 'browse';
$config->workflowaction->buildin->positions['testtask']['view']           = 'browse';
$config->workflowaction->buildin->positions['testtask']['create']         = 'browse';
$config->workflowaction->buildin->positions['program']['view']            = 'browse';

$config->workflowaction->buildin->shows['project']['activate']     = 'dropdownlist';
$config->workflowaction->buildin->shows['project']['close']        = 'dropdownlist';
$config->workflowaction->buildin->shows['project']['suspend']      = 'dropdownlist';
$config->workflowaction->buildin->shows['project']['delete']       = 'dropdownlist';
$config->workflowaction->buildin->shows['story']['exporttemplate'] = 'dropdownlist';
$config->workflowaction->buildin->shows['story']['import']         = 'dropdownlist';

$config->workflowaction->buildin->methods['project']['activate']        = 'operate';
$config->workflowaction->buildin->methods['project']['close']           = 'operate';
$config->workflowaction->buildin->methods['project']['start']           = 'operate';
$config->workflowaction->buildin->methods['project']['suspend']         = 'operate';
$config->workflowaction->buildin->methods['project']['batchedit']       = 'batchoperate';
$config->workflowaction->buildin->methods['execution']['activate']      = 'operate';
$config->workflowaction->buildin->methods['execution']['close']         = 'operate';
$config->workflowaction->buildin->methods['execution']['putoff']        = 'operate';
$config->workflowaction->buildin->methods['execution']['start']         = 'operate';
$config->workflowaction->buildin->methods['execution']['suspend']       = 'operate';
$config->workflowaction->buildin->methods['execution']['all']           = 'browse';
$config->workflowaction->buildin->methods['execution']['task']          = 'browse';
$config->workflowaction->buildin->methods['execution']['build']         = 'browse';
$config->workflowaction->buildin->methods['execution']['batchedit']     = 'batchoperate';
$config->workflowaction->buildin->methods['task']['activate']           = 'operate';
$config->workflowaction->buildin->methods['task']['assignTo']           = 'operate';
$config->workflowaction->buildin->methods['task']['cancel']             = 'operate';
$config->workflowaction->buildin->methods['task']['close']              = 'operate';
$config->workflowaction->buildin->methods['task']['confirmStoryChange'] = 'operate';
$config->workflowaction->buildin->methods['task']['finish']             = 'operate';
$config->workflowaction->buildin->methods['task']['pause']              = 'operate';
$config->workflowaction->buildin->methods['task']['restart']            = 'operate';
$config->workflowaction->buildin->methods['task']['start']              = 'operate';
$config->workflowaction->buildin->methods['task']['batchedit']          = 'batchoperate';
$config->workflowaction->buildin->methods['bug']['activate']            = 'operate';
$config->workflowaction->buildin->methods['bug']['assignTo']            = 'operate';
$config->workflowaction->buildin->methods['bug']['close']               = 'operate';
$config->workflowaction->buildin->methods['bug']['confirmBug']          = 'operate';
$config->workflowaction->buildin->methods['bug']['resolve']             = 'operate';
$config->workflowaction->buildin->methods['bug']['batchedit']           = 'batchoperate';
$config->workflowaction->buildin->methods['bug']['batchconfirm']        = 'batchoperate';
$config->workflowaction->buildin->methods['bug']['batchresolve']        = 'batchoperate';
$config->workflowaction->buildin->methods['bug']['batchactivate']       = 'batchoperate';
$config->workflowaction->buildin->methods['feedback']['admin']          = 'browse';
$config->workflowaction->buildin->methods['feedback']['adminview']      = 'view';
$config->workflowaction->buildin->methods['feedback']['assignTo']       = 'operate';
$config->workflowaction->buildin->methods['feedback']['batchedit']      = 'batchoperate';
$config->workflowaction->buildin->methods['feedback']['review']         = 'operate';
$config->workflowaction->buildin->methods['feedback']['comment']        = 'operate';
$config->workflowaction->buildin->methods['feedback']['reply']          = 'operate';
$config->workflowaction->buildin->methods['feedback']['ask']            = 'operate';
$config->workflowaction->buildin->methods['feedback']['close']          = 'operate';
$config->workflowaction->buildin->methods['ticket']['browse']           = 'browse';
$config->workflowaction->buildin->methods['ticket']['view']             = 'view';
$config->workflowaction->buildin->methods['ticket']['start']            = 'operate';
$config->workflowaction->buildin->methods['ticket']['close']            = 'operate';
$config->workflowaction->buildin->methods['ticket']['finish']           = 'operate';
$config->workflowaction->buildin->methods['testtask']['close']          = 'operate';
$config->workflowaction->buildin->methods['testtask']['activate']       = 'operate';
$config->workflowaction->buildin->methods['testtask']['start']          = 'operate';
$config->workflowaction->buildin->methods['testtask']['block']          = 'operate';
$config->workflowaction->buildin->methods['testtask']['batchedit']      = 'batchoperate';
$config->workflowaction->buildin->methods['testtask']['review']         = 'operate';

$config->workflowaction->buildin->methods['story']['batchedit']         = 'batchoperate';
$config->workflowaction->buildin->methods['story']['close']             = 'operate';
$config->workflowaction->buildin->methods['story']['activate']          = 'operate';
$config->workflowaction->buildin->methods['story']['assignTo']          = 'operate';
$config->workflowaction->buildin->methods['story']['review']            = 'operate';
$config->workflowaction->buildin->methods['story']['change']            = 'operate';
$config->workflowaction->buildin->methods['product']['batchedit']       = 'batchoperate';
$config->workflowaction->buildin->methods['product']['close']           = 'operate';
$config->workflowaction->buildin->methods['product']['all']             = 'browse';
$config->workflowaction->buildin->methods['productplan']['batchedit']   = 'batchoperate';
$config->workflowaction->buildin->methods['program']['close']           = 'operate';
$config->workflowaction->buildin->methods['program']['activate']        = 'operate';
$config->workflowaction->buildin->methods['program']['start']           = 'operate';
$config->workflowaction->buildin->methods['program']['suspend']         = 'operate';

$config->workflowaction->noNoticeActions[] = 'batchcreate';
$config->workflowaction->noNoticeActions[] = 'batchedit';
$config->workflowaction->noNoticeActions[] = 'batchassign';

$config->workflowaction->upgrade = array();
$config->workflowaction->upgrade['biz7.4']['feedback']['actions']    = array('reply', 'ask');
$config->workflowaction->upgrade['biz7.4']['feedback']['methods']    = array('reply' => 'operate', 'ask' => 'operate');
$config->workflowaction->upgrade['biz7.4']['feedback']['types']      = array();
$config->workflowaction->upgrade['biz7.4']['feedback']['batchModes'] = array('reply' => 'different', 'ask' => 'different');
$config->workflowaction->upgrade['biz7.4']['feedback']['opens']      = array('reply' => 'modal', 'ask' => 'modal');
$config->workflowaction->upgrade['biz7.4']['feedback']['positions']  = array();
$config->workflowaction->upgrade['biz7.4']['feedback']['shows']      = array();
$config->workflowaction->upgrade['biz7.4']['feedback']['statuses']   = array();
$config->workflowaction->upgrade['biz7.4']['feedback']['buildin']    = array('reply' => '1', 'ask' => '1');
$config->workflowaction->upgrade['biz7.4']['feedback']['conditions'] = array();
$config->workflowaction->upgrade['biz7.4']['feedback']['linkages']   = array();
$config->workflowaction->upgrade['biz7.4']['bug']['actions']         = array('batchactivate');
$config->workflowaction->upgrade['biz7.4']['bug']['methods']         = array('batchactivate' => 'batchoperate');
$config->workflowaction->upgrade['biz7.4']['bug']['types']           = array('batchactivate' => 'batch');
$config->workflowaction->upgrade['biz7.4']['bug']['batchModes']      = array('batchactivate' => 'different');
$config->workflowaction->upgrade['biz7.4']['bug']['opens']           = array('batchactivate' => 'normal');
$config->workflowaction->upgrade['biz7.4']['bug']['positions']       = array('batchactivate' => 'browse');
$config->workflowaction->upgrade['biz7.4']['bug']['shows']           = array();
$config->workflowaction->upgrade['biz7.4']['bug']['statuses']        = array();
$config->workflowaction->upgrade['biz7.4']['bug']['buildin']         = array('batchactivate' => '1');
$config->workflowaction->upgrade['biz7.4']['bug']['conditions']      = array();
$config->workflowaction->upgrade['biz7.4']['bug']['linkages']        = array();
