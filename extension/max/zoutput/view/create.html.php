<?php
/**
 * The create view of zoutput module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Congzhi Chen <congzhi@cnezsoft.com>
 * @package     zoutput
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include $app->getModuleRoot() . 'common/view/header.html.php';?>
<?php include $app->getModuleRoot() . 'common/view/kindeditor.html.php';?>
<div class="main-content" id="mainCentent">
  <div class="center-block">
    <div class="main-header">
      <h2><?php echo $lang->zoutput->create;?></h2>
    </div>
    <form method="post" class="main-form form-ajax" enctype="multipart/form-data" id="zoutputForm">
      <table class="table table-form">
        <tbody>
          <tr>
            <th><?php echo $lang->zoutput->activity;?></th>
            <td class="required"><?php echo html::select('activity', $activity, '', 'class="form-control chosen"');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zoutput->name;?></th>
            <td class="required"><?php echo html::input('name', '', 'class="form-control"');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zoutput->optional;?></th>
            <td><?php echo html::radio('optional', $lang->zoutput->optionalList, 'yes');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zoutput->tailorNorm;?></th>
            <td><?php echo html::input('tailorNorm', '', "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zoutput->content;?></th>
            <td colspan="2"><?php echo html::textarea('content', '', 'row="6"');?></td>
          </tr>
          <tr>
            <th><?php echo $lang->files;?></th>
            <td><?php echo $this->fetch('file', 'buildform');?></td>
          </tr>
          <tr>
            <td colspan='3' class='text-center form-actions'><?php echo html::submitButton() . html::backButton();?></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<?php include $app->getModuleRoot() . 'common/view/footer.html.php';?>
