<?php
/**
 * The create view file of lieu module of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     lieu
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../common/view/header.modal.html.php';?>
<?php include $app->getModuleRoot() . 'common/view/datepicker.html.php';?>
<?php include $app->getModuleRoot() . 'common/view/chosen.html.php';?>
<?php js::set('signIn', $config->attend->signInLimit)?>
<?php js::set('signOut', $config->attend->signOutLimit)?>
<?php js::set('workingHours', $config->attend->workingHours)?>
<form id='ajaxForm' method='post' action="<?php echo $this->createLink('lieu', 'create')?>">
  <table class='table table-form table-condensed'>
    <tr>
      <th class='w-60px'><?php echo $lang->lieu->begin?></th>
      <td>
        <div class='input-group'>
          <span class='input-group-addon'><?php echo $lang->lieu->date;?></span>
          <?php echo html::input('begin', $date, "class='form-control form-date date-picker-down'")?>
          <span class='input-group-addon fix-border'><?php echo $lang->lieu->time;?></span>
          <?php echo html::input('start', $this->config->attend->signInLimit, "class='form-control form-time date-picker-down'")?>
        </div>
      </td>
      <td></td>
    </tr>
    <tr>
      <th><?php echo $lang->lieu->end?></th>
      <td>
        <div class='input-group'>
          <span class='input-group-addon'><?php echo $lang->lieu->date;?></span>
          <?php echo html::input('end', $date, "class='form-control form-date date-picker-down'")?>
          <span class='input-group-addon fix-border'><?php echo $lang->lieu->time;?></span>
          <?php echo html::input('finish', $this->config->attend->signOutLimit, "class='form-control form-time date-picker-down'")?>
        </div>
      </td>
      <td></td>
    </tr>
    <tr>
      <th><?php echo $lang->lieu->hours;?></th>
      <td><?php echo html::input('hours', '', "class='form-control'")?></td>
      <td></td>
    </tr>
    <tr>
      <th><?php echo $lang->lieu->overtime;?></th>
      <td><?php echo html::select('overtime[]', $overtimes, '', "class='form-control chosen' multiple")?></td>
      <td></td>
    </tr>
    <tr>
      <th><?php echo $lang->lieu->trip;?></th>
      <td><?php echo html::select('trip[]', $trips, '', "class='form-control chosen' multiple")?></td>
      <td></td>
    </tr>
    <tr>
      <th><?php echo $lang->lieu->desc;?></th>
      <td><?php echo html::textarea('desc', '', "class='form-control'")?></td>
      <td></td>
    </tr>
    <tr>
      <th></th>
      <td><?php echo baseHTML::submitButton();?></td>
      <td></td>
    </tr>
  </table>
</form>
<?php include '../../common/view/footer.modal.html.php';?>
