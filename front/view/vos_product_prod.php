<?php ob_start() ?>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="" alt="">
            <p class="">
                Découvrez ci-dessous les producteurs qui oeuvrent au quotidien 
                pour vous offrir des produits de qualité, fait avec passion.
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach($the_product_pro as $product) { ?>
            <div class="card mb-3 ms-3 shadow-lg" style="width: 18rem;">
                <img src="../<?=$product['path']?>" class="card-img-top" height="100%" alt="<?=$product['name']?>">
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