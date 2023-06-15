<?php ob_start() ?>
<div class="container">
    <div class="row">
        <?php foreach($subCategProduct as $subCateg) { ?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$subCateg['path']?>" class="card-img-top" height="100%" alt="<?=$subCateg['name']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$subCateg['name']?></h5>
                    <a href="index.php?page=9&id_subcategory=<?=$subCateg['id']?>" class="btn colorfond_marron">Vos Produit</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>