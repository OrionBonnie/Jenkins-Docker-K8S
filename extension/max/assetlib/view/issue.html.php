<?php
/**
 * The issue of assetlib module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2021 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Shujie Tian <tianshujie@easycorp.ltd>
 * @package     assetlib
 * @version     $Id: issue.html.php 4903 2021-06-25 08:25:59Z tsj $
 * @link        https://www.zentao.net
 */
?>
<?php include $app->getModuleRoot() . "common/view/header.html.php"?>
<div id="mainMenu" class="clearfix">
  <div class="btn-toobar pull-left">
    <div class='btn-group'>
      <a href='javascript:;' class='btn btn-link btn-limit' data-toggle='dropdown'><span class='text' title='<?php echo zget($libs, $libID);?>'><?php echo zget($libs, $libID);?></span> <span class='caret'></span></a>
      <ul class='dropdown-menu'>
        <?php foreach($libs as $key => $lib) echo "<li class='" . ($libID == $key ? 'active' : '') . "' title='{$lib}' title='{$lib}'>" . html::a($this->createLink('assetlib', 'issue', "libID=$key"), $lib) . "</li>";?>
      </ul>
    </div>
    <?php
    $menus = $lang->assetlib->featureBar['browse'];
    foreach($menus as $key => $menuItem)
    {
        $active = $key == $browseType ? ' btn-active-text' : '';
        echo html::a($this->createLink('assetlib', 'issue', "libID=$libID&browseType=$key"), "<span class='text'>{$menuItem}</span>", '', "class='btn btn-link $active'");
    }
    ?>
    <a class="btn btn-link querybox-toggle" id='bysearchTab'><i class="icon icon-search muted"></i> <?php echo $lang->searchAB;?></a>
  </div>
  <div class="btn-toolbar pull-right">
    <?php
    if(common::hasPriv('assetlib', 'issueLibView'))
    {
        $link = helper::createLink('assetlib', 'issueLibView', "libID=$libID");
        echo html::a($link, "<i class='icon icon-list-alt muted'> </i>" . $this->lang->assetlib->libView, '', "class='btn btn-link'");
    }
    ?>
    <div class='btn-group'>
      <button type='button' class='btn btn-link dropdown-toggle' data-toggle='dropdown' id='importAction'><i class='icon icon-import muted'></i> <?php echo $lang->import ?><span class='caret'></span></button>
      <ul class='dropdown-menu pull-right' id='importActionMenu'>
      <?php
      $class = common::hasPriv('assetlib', 'importIssue') ? '' : "class=disabled";
      $link  = common::hasPriv('assetlib', 'importIssue') ?  $this->createLink('assetlib', 'importIssue', "libID=$libID") : '#';
      echo "<li $class>" . html::a($link, $lang->assetlib->importIssue) . "</li>";
      ?>
      </ul>
    </div>
  </div>
</div>
<div class="cell<?php if($browseType == 'bysearch') echo ' show';?>" id="queryBox" data-module='issueLib'></div>
<div id="mainContent" class="main-table">
  <?php if(empty($issues)):?>
  <div class="table-empty-tip">
    <p><span class="text-muted"><?php echo $lang->noData;?></span></p>
  </div>
  <?php else:?>
  <form  class='main-table' id='issueForm' method='post' data-ride="table">
    <table class="table has-sort-head" id='issueList'>
      <?php
      $vars = "libID=$libID&browseType=$browseType&param=$param&orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}";
      $canBatchAssignTo = common::hasPriv('assetlib', 'batchAssignToIssue');
      $canBatchApprove  = common::hasPriv('assetlib', 'batchApproveIssue');
      $canBatchRemove   = common::hasPriv('assetlib', 'batchRemoveIssue');
      $canBatchAction   = ($browseType == 'all' or $browseType == 'bysearch') ? ($canBatchApprove or $canBatchRemove) : ($canBatchAssignTo or $canBatchApprove or $canBatchRemove);
      ?>
      <thead>
        <tr>
          <th class='text-left c-id'>
            <?php
            if($canBatchAction) echo "<div class='checkbox-primary check-all' title='{$this->lang->selectAll}'><label></label></div>";
            common::printOrderLink('id', $orderBy, $vars, $lang->assetlib->id);
            ?>
          </th>
          <th class='text-left'><?php common::printOrderLink('title', $orderBy, $vars, $lang->issue->title);?></th>
          <th class='c-pri' title='<?php echo $lang->pri;?>'><?php common::printOrderLink('pri', $orderBy, $vars, $lang->assetlib->priAB);?></th>
          <th class='c-severity'><?php common::printOrderLink('severity', $orderBy, $vars, $lang->issue->severity);?></th>
          <th class='c-status'><?php common::printOrderLink('status', $orderBy, $vars, $lang->assetlib->status);?></th>
          <th class="c-type"><?php common::printOrderLink('type', $orderBy, $vars, $lang->issue->type);?></th>
          <?php if($browseType == 'draft'):?>
          <th class='c-assignedTo'><?php common::printOrderLink('assignedTo', $orderBy, $vars, $lang->assetlib->assignedTo);?></th>
          <?php endif;?>
          <th class='c-createdBy'><?php common::printOrderLink('createdBy', $orderBy, $vars, $lang->assetlib->createdBy);?></th>
          <th class='c-createdDate w-100px'><?php common::printOrderLink('createdDate', $orderBy, $vars, $lang->assetlib->createdDate);?></th>
          <?php if($browseType == 'all' or $browseType == 'bysearch'):?>
          <th class='c-assignedTo'><?php common::printOrderLink('assignedTo', $orderBy, $vars, $lang->assetlib->approved);?></th>
          <th class='c-approvedDate'><?php common::printOrderLink('approvedDate', $orderBy, $vars, $lang->assetlib->approvedDate);?></th>
          <?php endif;?>
          <th class='c-actions-3'><?php echo $lang->actions;?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($issues as $issue):?>
        <tr>
          <td>
            <?php echo $canBatchAction ? html::checkbox('issueIDList', array($issue->id => '')) . sprintf('%03d',$issue->id) : sprintf('%03d',$issue->id);?>
          </td>
          <td class='c-name' title="<?php echo $issue->title?>"><?php echo html::a($this->createLink('assetlib', 'issueView', "issueID=$issue->id"), $issue->title);?></td>
          <td id='pri' title="<?php echo $issue->pri;?>"><span class="label-pri label-pri-<?php echo $issue->pri?>"><?php echo $issue->pri;?></span></td>
          <td title="<?php echo zget($lang->issue->severityList, $issue->severity);?>" class='severity-issue severity-<?php echo $issue->severity;?>'><?php echo zget($lang->issue->severityList, $issue->severity);?></td>
          <td><?php echo "<span class='status-{$issue->status}'>" . zget($lang->assetlib->statusList, $issue->status) . '</span>';?></td>
          <td title="<?php echo zget($lang->issue->typeList, $issue->type);?>"><?php echo zget($lang->issue->typeList, $issue->type);?></td>
          <?php if($browseType == 'draft'):?>
          <td><?php echo $this->assetlib->printAssignedHtml($issue, $approvers, 'issue');?></td>
          <?php endif;?>
          <td title="<?php echo zget($users, $issue->createdBy);?>"><?php echo zget($users, $issue->createdBy);?></td>
          <td><?php echo helper::isZeroDate($issue->createdDate) ? '' : substr($issue->createdDate, 0, 11);?></td>
          <?php if($browseType == 'all' or $browseType == 'bysearch'):?>
          <td class='c-assignedTo'><?php echo $issue->status == 'active' ? zget($users, $issue->assignedTo) : '';?></td>
          <td><?php echo helper::isZeroDate($issue->approvedDate) ? '' : $issue->approvedDate;?></td>
          <?php endif;?>
          <td class='c-actions'>
            <?php
            $vars = "issueID={$issue->id}";
            common::printIcon('assetlib', 'editIssue',    $vars, $issue, 'list', 'edit');
            common::printIcon('assetlib', 'approveIssue', $vars, $issue, 'list', 'glasses', '', 'iframe', true);
            common::printIcon('assetlib', 'removeIssue',  $vars, $issue, 'list', 'unlink', 'hiddenwin');
            ?>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <div class='table-footer'>
      <?php if($canBatchAction):?>
      <div class="checkbox-primary check-all"><label><?php echo $lang->selectAll?></label></div>
      <?php endif;?>
      <div class="table-actions btn-toolbar">
        <?php if($canBatchApprove):?>
        <div class="btn-group dropup">
          <button data-toggle="dropdown" type="button" class="btn"><?php echo $lang->assetlib->approve;?> <span class="caret"></span></button>
          <ul class="dropdown-menu" role='menu'>
            <li>
              <?php
              foreach($lang->assetlib->resultList as $key => $value)
              {
                  if(empty($key)) continue;
                  $actionLink = $this->createLink('assetlib', 'batchApproveIssue', "libID=$libID&result=$key");
                  echo html::a("javascript:$(\".table-actions #approve\").val(\"$key\");setFormAction(\"$actionLink\", \"hiddenwin\", \"#issueList\")", $value);
              }
              ?>
            </li>
          </ul>
        </div>
        <?php endif;?>

        <?php if($canBatchAssignTo and $browseType == 'draft'):?>
        <div class="btn-group dropup">
          <button data-toggle="dropdown" type="button" class="btn"><?php echo $lang->assetlib->assignedTo;?> <span class="caret"></span></button>
          <?php
          $withSearch = count($approvers) > 10;
          $actionLink = $this->createLink('assetlib', 'batchAssignToIssue', "libID=$libID");
          echo html::select('assignedTo', $approvers, '', 'class="hidden"');
          if($withSearch):
          ?>
          <div class="dropdown-menu search-list search-box-sink" data-ride="searchList">
            <div class="input-control search-box has-icon-left has-icon-right search-example">
              <input id="userSearchBox" type="search" autocomplete="off" class="form-control search-input">
              <label for="userSearchBox" class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label>
              <a class="input-control-icon-right search-clear-btn"><i class="icon icon-close icon-sm"></i></a>
            </div>
          <?php $membersPinYin = common::convert2Pinyin($approvers);?>
          <?php else:?>
          <div class="dropdown-menu search-list">
          <?php endif;?>
            <div class="list-group">
              <?php
              foreach($approvers as $key => $value)
              {
                  if(empty($key)) continue;
                  $searchKey = $withSearch ? ('data-key="' . zget($membersPinYin, $value, '') . " @$key\"") : "data-key='@$key'";
                  echo html::a("javascript:$(\".table-actions #assignedTo\").val(\"$key\");setFormAction(\"$actionLink\", \"hiddenwin\", \"#issueList\")", $value, '', $searchKey);
              }
              ?>
            </div>
          </div>
        </div>
        <?php endif;?>
        <?php if($canBatchRemove):?>
        <?php
        $removeLink = inlink('batchRemoveIssue');
        echo html::commonButton($lang->assetlib->removeIssue, "onclick=\"setFormAction('$removeLink', 'hiddenwin', this)\"");
        ?>
        <?php endif;?>
      </div>
      <?php $pager->show('right', 'pagerjs');?>
    </div>
  </form>
  <?php endif;?>
</div>
<?php include $app->getModuleRoot() . "common/view/footer.html.php"?>
