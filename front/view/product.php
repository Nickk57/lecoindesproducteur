<?php ob_start() ?>
<?php foreach($products as $product) {?>
    <div class="container text-center">
        <h2 class=""><?=$product['name']?></h2>
    </div>
    <div class="container">
        <div class="col text-center">
            <!-- <div class="col-2"></div> -->
            <div class="col mt-5">
                <img src="../<?=$product['path']?>" alt="<?=$product['name']?>" class="image-product">
            </div>
            <div class="col mt-5">
                <p><?=$product['description']?></p>
            </div>
            <!-- <div class="col-2"></div> -->
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col">
                <div class="row">
                    
                        <div class="card shadow-lg mb-5 mt-5" style="width: 18rem;">
                            <img src="../<?=$product['propic']?>" alt="<?=$product['prod_name']?>" class="card-img-top" height="100%">
                            <div class="card-body">
                                <h5 class="card-title"><?=$product['prod_name']?></h5>
                                <p>
                                    <span style="color: #85AE52;"><?=$product['prod_city']?></span>
                                    <?=$product['pord_descrip']?>
                                </p>
                                <a href="index.php?page=" class="btn colorfond_marron">Les produits du producteur</a>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>