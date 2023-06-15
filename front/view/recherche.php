<?php ob_start() ?>
<div class="container">
    <h2>les resultas recherches :</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="<?=$recherche['path']?>" alt="<?=$recherche['name']?>">
        </div>
        <div class="col">
            <h3><?=$recherche['name']?></h3>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>