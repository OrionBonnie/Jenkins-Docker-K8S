<?php
/**
 * The browse view file of trip module of Ranzhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      chujilu <chujilu@cnezsoft.com>
 * @package     trip
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include $app->getModuleRoot() . 'common/view/header.html.php';?>
  <style>
  #menuActions{float:right !important; margin-top: -60px !important;}
  .input-group-required > .required::after, .required-wrapper.required::after {top:12px !important;}
  .modal-body .table {margin-bottom:0px !important;}
  </style>
  <div id='featurebar'>
    <ul class='nav'>
    <?php
    $methodName = strtolower($this->app->getMethodName());
    foreach($lang->trip->featurebar as $key => $menu)
    {
        if(is_string($menu)) $link = $menu;
        if(is_array($menu)) $link = $menu['link'];
        list($name, $currentModule, $currentMethod, $params) = explode('|', $link);
       $class = strtolower($key) == $methodName ? "class='active'" : '';
        if(isset($menu['alias'])) $class = strpos(strtolower($menu['alias']), strtolower($key)) !== false ? "class='active'" : $class;
        if(common::hasPriv($currentModule, $currentMethod)) echo "<li id='$key' $class>" . html::a($this->createLink($currentModule, $currentMethod, $params), $name) . '</li>';
    }
    ?>
    </ul>
  </div>

<?php js::set('type', $type)?>
<div id='menuActions'>
  <?php extCommonModel::printLink($type, 'create', '', "<i class='icon icon-plus'></i> {$lang->$type->create}", "data-toggle='modal' class='btn btn-primary'")?>
</div>
<div class='with-side'>
  <div class='side'>
    <div class='panel panel-sm'>
      <div class='panel-body'>
        <ul class='tree' data-ride='tree' data-collapsed='true'>
          <?php foreach($yearList as $year):?>
          <li class='<?php echo $year == $currentYear ? 'active' : ''?>'>
            <?php extCommonModel::printLink($type, $mode, "date=$year", $year);?>
            <ul>
              <?php foreach($monthList[$year] as $month):?>
              <li class='<?php echo ($year == $currentYear and $month == $currentMonth) ? 'active' : ''?>'>
                <?php extCommonModel::printLink($type, $mode, "date=$year$month", $year . $month);?>
              </li>
              <?php endforeach;?>
            </ul>
          </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </div>
  <div class='main'>
    <div class='panel'>
      <table class='table table-data table-hover text-center table-fixed tablesorter'>
        <thead>
          <tr class='text-center'>
            <?php $vars = "date=$date&orderBy=%s";?>
            <th class='w-50px'> <?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->$type->id, 'trip', $type);?></th>
            <th class='w-100px'><?php commonModel::printOrderLink('createdBy', $orderBy, $vars, $lang->$type->createdBy, 'trip', $type);?></th>
            <th class='w-180px'><?php commonModel::printOrderLink('name', $orderBy, $vars, $lang->$type->name, 'trip', $type);?></th>
            <th class='w-180px'><?php commonModel::printOrderLink('customer', $orderBy, $vars, $lang->$type->customer, 'trip', $type);?></th>
            <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->$type->begin, 'trip', $type);?></th>
            <th class='w-150px'><?php commonModel::printOrderLink('end', $orderBy, $vars, $lang->$type->end, 'trip', $type);?></th>
            <?php if($type == 'trip'):?>
            <th class='w-80px'><?php commonModel::printOrderLink('from', $orderBy, $vars, $lang->$type->from, 'trip', $type);?></th>
            <?php endif;?>
            <th class='w-80px'><?php commonModel::printOrderLink('to', $orderBy, $vars, $lang->$type->to, 'trip', $type);?></th>
            <th><?php echo $lang->$type->desc;?></th>
            <th class='w-100px'><?php echo $lang->actions;?></th>
          </tr>
        </thead>
        <?php foreach($tripList as $trip):?>
        <tr>
          <td><?php echo $trip->id;?></td>
          <td><?php echo zget($users, $trip->createdBy);?></td>
          <td title='<?php echo $trip->name?>'><?php echo $trip->name;?></td>
          <?php $tripCustomer = '';?>
          <?php foreach(explode(',', $trip->customers) as $customer) $tripCustomer .= zget($customers, $customer, '') . '/';?>
          <?php $tripCustomer = trim($tripCustomer, '/');?>
          <td title='<?php echo $tripCustomer;?>'><?php echo $tripCustomer;?></td>
          <td><?php echo formatTime($trip->begin . ' ' . $trip->start, DT_DATETIME2);?></td>
          <td><?php echo formatTime($trip->end . ' ' . $trip->finish, DT_DATETIME2);?></td>
          <?php if($type == 'trip'):?>
          <td title='<?php echo $trip->from?>'><?php echo $trip->from;?></td>
          <?php endif;?>
          <td title='<?php echo $trip->to?>'>  <?php echo $trip->to;?></td>
          <td title='<?php echo $trip->desc?>'><?php echo $trip->desc;?></td>
          <td>
            <?php if($trip->createdBy == $this->app->user->account):?>
            <?php echo baseHTML::a($this->createLink("$type", 'edit', "id=$trip->id"), $lang->edit, "data-toggle='modal'");?>
            <?php echo baseHTML::a($this->createLink("$type", 'delete', "id=$trip->id"), $lang->delete, "class='deleter'");?>
            <?php endif;?>
          </td>
        </tr>
        <?php endforeach;?>
      </table>
      <?php if(!$tripList):?>
      <?php endif;?>
    </div>
  </div>
</div>
<?php include $app->getModuleRoot() . 'common/view/footer.html.php';?>
