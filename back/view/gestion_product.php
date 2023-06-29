<?php ob_start() ?>
<div class="container">
    <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name="">
            <a href="index.php?page=4" class="text-light">Ajout d'un produit</a>
        </button>
    </div>
    <h1>Gestion des produits :</h1>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom</th>
                <th>description</th>
                <th>Photo</th>
                <th class="text-center">Modifie</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_product as $product) {?>
                    <tr>
                        <td><?= $product['name']?></td>
                        <td><?= $product['description']?></td>
                        <td><img src="../<?= $product['path']?>" alt="<?= $product['name']?>" class="img_2"></td>
                        <td class="text-center">
                            <a href="index.php?page=19&id=<?=$product['id']?>&id_subcategory=<?=$product['id_subcategory']?>&id_producteur=<?=$product['id_producteur']?>&id_picture=<?=$product['id_picture']?>">
                                <i class="fa fa-gear fa-2x" title="Modifier" style="color: orange;">
                                    <img src="image/roue de param.png" class="img_1">
                                </i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="index.php?page=6&id=<?=$product['id']?>&id_picture=<?=$product['id_picture']?>" onclick="return(confirm('Voulez-vous supprimer se produits ?'))">
                                <i class="fa fa-close fa-2x" title="Supprime" style="color: red;">
                                    <img src="image/Red_x.svg.png" class="img_1">
                                </i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </div>
    </table>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php')?>