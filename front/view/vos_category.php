<?php ob_start() ?>
<div class="container">
    <div class="row mt-5 mb-5 align-items-center">
        <div class="col">
            <img src="../image/serre-768x576.jpg" class="align-middle arr_1" alt="image">
        </div>
        <div class="col">
            <p class="align-middle">
                Venez découvrir un large choix de produits fermiers et locaux.
                Légumes, fruits, viandes, formages, yaourts, pâtes, farine,
                jus de fruits, confiture, sucreries, bière, thé et même savons.
                <br><br>
                Tous nos produits sont fait par des producteurs de la region.
            </p>
        </div>
    </div>
    <div class="row">
        <?php foreach($categ_product as $categ) {?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$categ['path']?>" class="card-img-top mt-2" style="border-radius: 7px;" height="100%" alt="<?=$categ['name']?>">
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