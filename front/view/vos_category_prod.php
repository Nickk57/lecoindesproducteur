<?php ob_start() ?>
<div class="container">
    <div class="row mt-5 mb-5 align-items-center">
        <div class="col">
            <img src="../image/Sans-titre.jpg" class="align-middle arr_1" alt="image">
        </div>
        <div class="col">
            <p class="align-middle">
                Découvrer ci_dessous les produits des producteurs qui oeuvrent au 
                quotidien pour vous offrir des produits de qualité, fait avec passion.
            </p>
        </div>
    </div>
    <div class="row">
        <?php foreach($categ_producteur as $categ) {?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$categ['path']?>" class="card-img-top" alt="<?=$categ['name']?>" height="100%">
                <div class="card-body">
                    <h5 class="card-title"><?=$categ['name']?></h5>
                    <a href="index.php?page=10&id_category=<?=$categ['id']?>" class="btn colorfond_marron">Vos Producteurs</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>