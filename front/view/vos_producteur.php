<?php ob_start() ?>
<div class="container">
    <div class="col">
        <div class="row">
            <div class="">
                <img src="" alt="">
                <p>Découvrez ci-dessous les producteurs qui oeuvrent au quotidien 
                    pour vous offrir des produits de qualité, fait avec passion.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach($theProducteur as $producteur){?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$producteur['path']?>" class="card-img-top" height="50%" alt="<?=$producteur['name']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$producteur['name']?></h5>
                    <p class="card-text">
                        <span style="color: #E5E23E;"><?=$producteur['city']?></span>
                    </p>
                    <a href="index.php?page=11&id_producteur=<?=$producteur['id']?>" class="btn colorfond_marron">Les produits du producteur</a>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>