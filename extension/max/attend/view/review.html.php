<?php
/**
 * The review view file of refund module of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     refund 
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../common/view/header.modal.html.php';?>
<?php include $app->getModuleRoot() . 'common/view/kindeditor.html.php';?>
<form method='post' id='ajaxForm' action='<?php echo inlink('review', "id={$attendID}&reviewStatus=reject")?>'>
  <table class='table table-form'>
    <tr>
      <th class='w-80px text-middle'><?php echo $lang->attend->rejectReason;?></th>
      <td><?php echo html::textarea('comment', '', "class='form-control'");?></td>
    </tr>
    <tr>
      <th></th>
      <td><?php echo baseHTML::submitButton();?></td>
    </tr>
  </table>
</form>
<?php include '../../common/view/footer.modal.html.php';?>
