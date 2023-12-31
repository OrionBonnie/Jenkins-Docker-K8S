<?php
public function getTestcases($productID)
{
    return $this->loadExtension('report')->getTestcases($productID);
}

public function getBuildBugs($productID)
{
    return $this->loadExtension('report')->getBuildBugs($productID);
}

public function getWorkSummary($begin, $end, $dept, $type, $pager = null)
{
    return $this->loadExtension('report')->getWorkSummary($begin, $end, $dept, $type, $pager);
}

public function getRoadmaps($conditions = '')
{
    return $this->loadExtension('report')->getRoadmaps($conditions);
}

public function getBugSummary($dept, $begin, $end, $type)
{
    return $this->loadExtension('report')->getBugSummary($dept, $begin, $end, $type);
}

public function getCasesRun($productID)
{
    return $this->loadExtension('report')->getCasesRun($productID);
}

public function getStoryBugs($productID, $moduleID)
{
    return $this->loadExtension('report')->getStoryBugs($productID, $moduleID);
}

public function getProductInvest($conditions = '')
{
    return $this->loadExtension('report')->getProductInvest($conditions);
}
