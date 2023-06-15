<?php ob_start() ?>
<div class="error">
    <h1>Une erreur s'est produite</h1>
    <div class="error-message">Message : <?= $exeception->getMessage() ?></div>
    <div class="error-stack">Pile d'execution : <?= $exeception->getTraceAsString() ?></div>
    <?php if(method_exists($exeception,"getMoreDetail")) {?>
        <div class="error-detail"><?= $exeception->getMoreDetail() ?></div>
    <?php } ?>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>