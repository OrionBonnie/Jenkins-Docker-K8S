<?php $effortHtml = $this->loadModel('effort')->createAppendLink('productplan', $plan->id); ?>
<script>
$('#mainMenu .pull-right').prepend(<?php if(!isonlybody()) echo json_encode($effortHtml);?>);
$(function()
{
    $(".effort").addClass('btn-link').modalTrigger({width:1024, height:600, iframe:true, transition:'elastic'});
});
</script>
