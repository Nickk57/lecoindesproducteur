<?php ob_start() ?>
<div>
    <h3><?= $success ?></h3>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>