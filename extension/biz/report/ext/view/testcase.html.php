<?php include $app->getModuleRoot() . 'common/view/header.html.php';?>
<style>
#mainContent > .side-col.col-lg{width: 235px}
.hide-sidebar #sidebar{width: 0 !important}
</style>
<div id='mainContent' class='main-row'>
  <div class='side-col col-lg' id='sidebar'>
    <?php include $app->getModuleRoot() . 'report/view/blockreportlist.html.php';?>
  </div>
  <div class='main-col'>
    <div class='cell'>
      <div class='with-padding'>
        <div class="table-row" id='conditions'>
          <div class='input-group w-200px'>
            <?php echo html::select('product', $products, $productID, 'onchange="selectProduct(this.value);" class="form-control chosen"')?>
          </div>
        </div>
      </div>
    </div>
    <?php if(empty($modules)):?>
    <div class="cell">
      <div class="table-empty-tip">
        <p><span class="text-muted"><?php echo $lang->error->noData;?></span></p>
      </div>
    </div>
    <?php else:?>
    <div class='cell'>
      <div class='panel'>
        <div class="panel-heading">
          <div class="panel-title"><?php echo $title;?></div>
          <nav class="panel-actions btn-toolbar"></nav>
        </div>
        <div data-ride='table'>
          <table class='table table-condensed table-striped table-bordered tablesorter table-fixed active-disabled' id="testCaseList">
            <thead>
              <tr class='colhead text-center'>
                <th><?php echo $lang->report->module;?></th>
                <th><?php echo $lang->report->case->total;?></th>
                <th><?php echo $lang->testcase->resultList['pass'];?></th>
                <th><?php echo $lang->testcase->resultList['fail'];?></th>
                <th><?php echo $lang->testcase->resultList['blocked'];?></th>
                <th><?php echo $lang->report->case->run;?></th>
                <th><?php echo $lang->report->case->passRate;?></th>
              </tr>
            </thead>
            <?php if($modules):?>
            <tbody>
              <?php $allTotal = $allPass = $allFail = $allBlocked = $allRun = 0;?>
              <?php foreach($modules as $module):?>
              <tr class="text-center">
                <?php
                $allTotal += $module->total;
                $allPass += $module->pass;
                $allFail += $module->fail;
                $allBlocked += $module->blocked;
                $allRun += $module->run;
                ?>
                <td><?php echo $module->name;?></td>
                <td><?php echo $module->total;?></td>
                <td><?php echo $module->pass;?></td>
                <td><?php echo $module->fail;?></td>
                <td><?php echo $module->blocked;?></td>
                <td><?php echo $module->run;?></td>
                <td><?php echo $module->run ? round(($module->pass / $module->run) * 100, 2) . '%' : 'N/A';?></td>
              </tr>
              <?php endforeach;?>
              <tr class="text-center">
                <td><?php echo $lang->report->total;?></td>
                <td><?php echo $allTotal;?></td>
                <td><?php echo $allPass;?></td>
                <td><?php echo $allFail;?></td>
                <td><?php echo $allBlocked;?></td>
                <td><?php echo $allRun;?></td>
                <td><?php echo $allRun ? round(($allPass / $allRun) * 100, 2) . '%' : 'N/A';?></td>
              </tr>
            </tbody>
            <?php endif;?>
          </table>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>
</div>
<script>
function selectProduct(productID)
{
    link = createLink('report', 'testcase', 'productID=' + productID);
    location.href=link;
}
</script>
<?php include $app->getModuleRoot() . 'common/view/footer.html.php';?>
