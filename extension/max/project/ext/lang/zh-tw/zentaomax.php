<?php
$lang->project->approval = '審批';
$lang->project->previous = '上一步';

$lang->project->approvalflow = new stdclass();
$lang->project->approvalflow->flow   = '審批流程';
$lang->project->approvalflow->object = '審批對象';

$lang->project->approvalflow->objectList[''] = '';
$lang->project->approvalflow->objectList['stage'] = '階段';
$lang->project->approvalflow->objectList['task']  = '任務';

$lang->project->copyProjectConfirm   = '完善項目信息';
$lang->project->executionInfoConfirm = '完善迭代信息';
$lang->project->stageInfoConfirm     = '完善階段信息';

$lang->project->executionInfoTips = '為了避免重複，請修改迭代名稱和迭代代號，設置計劃開始時間和計劃完成時間。';

$lang->project->chosenProductStage = '請為 “%s” 產品選擇要複製的對應產品的階段 產品：%s';
$lang->project->notCopyStage       = '不複製';
$lang->project->completeCopy       = '複製完成';

$lang->project->copyProject->code               = '『' . $lang->executionCommon . '』代號不可重複需要修改';
$lang->project->copyProject->select             = '選擇要複製的項目';
$lang->project->copyProject->confirmData        = '確認要複製的數據';
$lang->project->copyProject->improveData        = '完善新項目的數據';
$lang->project->copyProject->completeData       = '完成項目複製';
$lang->project->copyProject->selectPlz          = '請選擇要複製的項目';
$lang->project->copyProject->cancel             = '取消複製';
$lang->project->copyProject->all                = '全部數據';
$lang->project->copyProject->basic              = '基礎數據';
$lang->project->copyProject->allList            = array('項目自身的數據', '項目所包含的%s', '項目和%s的文檔目錄', '項目%s所包含的任務', 'QA質量保證計劃', '過程裁剪設置', '團隊成員安排與權限');
$lang->project->copyProject->toComplete         = '去完善';
$lang->project->copyProject->selectProjectPlz   = '請選擇項目';
$lang->project->copyProject->confirmCopyDataTip = '請確認要複製的數據：';
$lang->project->copyProject->basicInfo          = '項目數據（所屬項目集，項目名稱，項目代號，所屬產品）';
$lang->project->copyProject->selectProgram      = '請選擇項目集';
$lang->project->copyProject->sprint             = '迭代';

global $config;
if($config->systemMode == 'light') $lang->project->copyProject->basicInfo = '項目數據（項目名稱，項目代號，所屬產品）';
