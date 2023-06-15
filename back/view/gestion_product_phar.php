<?php ob_start() ?>
<div class="container">
    <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name="">
            <a href="index.php?page=28" class="text-light">Select d'un produit</a>
        </button>
    </div>
    <h1>Gestion des produits :</h1>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom</th>
                <th>description</th>
                <th>Photo</th>
                <th class="text-center">choix</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_product_phar as $product) {?>
                    <tr>
                        <td><?= $product['name']?></td>
                        <td><?= $product['description']?></td>
                        <td><img src="<?= $product['path']?>" alt="<?= $product['name']?>" class="img2"></td>
                        <td><input type="checkbox" name="choix[]" value="<?=$product['id']?>"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </div>
    </table>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php')?>