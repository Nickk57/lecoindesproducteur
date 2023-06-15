<?php ob_start() ?>
<div class="container">
    <div class="row">
        <?php foreach($categ_product as $categ) {?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$categ['path']?>" class="card-img-top mt-2" height="100%" alt="<?=$categ['name']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$categ['name']?></h5>
                    <a href="index.php?page=8&id_category=<?=$categ['id']?>" class="btn colorfond_marron">Vos Produits</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>