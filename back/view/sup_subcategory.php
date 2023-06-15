<?php ob_start()?>
<div>
    <h2><?= $success?>
</div>
<?php $content = ob_get_clean()?>
<?php include('layout.php')?>