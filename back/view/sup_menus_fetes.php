<?php ob_start() ?>
<div>
    <h2><?=$success?></h2>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>