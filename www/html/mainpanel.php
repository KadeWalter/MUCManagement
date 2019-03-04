<?php
    $page_temp = (!empty($_REQUEST['template'])) ? $_REQUEST['template'] : 'home';
?>

<div class="containter-fluid">
    <?php include_once('mainpanels/mainpanel-'.$page_temp.'.php'); ?>
</div>