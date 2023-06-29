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
        <?php foreach($the_product as $product) { ?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$product['path']?>" class="card-img-top" style="border-radius: 7px;" alt="<?=$product['name']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$product['name']?></h5>
                    <a href="index.php?page=6&product=<?=$product['id']?>" class="btn colorfond_marron">Vos produits</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>
