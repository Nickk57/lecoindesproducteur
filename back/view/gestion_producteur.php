<?php ob_start() ?>
<div class="container"><br>
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name="">
            <a href="index.php?page=23" class="text-light">Ajout d'un producteur</a>
        </button>
    </div>
    <h2>Gestion des producteur :</h2>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom de la ferme</th>
                <th>Nom de la ville / dep</th>
                <th>Nom du producteur</th>
                <th>La description</th>
                <th>La caretisique</th>
                <th class="text-center">La photo</th>
                <th class="text-center">Modifier</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_producteur as $producteur) {?>
                    <tr>
                        <td class="align-middle "><?= $producteur['name']?></td>
                        <td class="align-middle "><?= $producteur['city']?></td>
                        <td class="align-middle "><?= $producteur['first_name']?></td>
                        <td class="align-middle "><?= $producteur['description']?></td>
                        <td class="align-middle "><?= $producteur['characte']?></td>
                        <td class="align-middle "><img src="../<?= $producteur['path']?>" class="image1"></td>
                        <td class="text-center align-middle col-1">
                            <a href="index.php?page=30&id=<?=$producteur['id']?>&id_categ_producteur=<?=$producteur['id_categ_producteur']?>">
                                <i class="fa fa-gear fa-2x" title="Modifier" style="color: orange;">
                                    <img src="image/roue de param.png" class="img_1">
                                </i>
                            </a>
                        </td>
                        <td class="text-center align-middle col-1">
                            <a href="index.php?page=25&id=<?=$producteur['id']?>$id_picture=<?=$producteur['id_picture']?>" onclick="return(confirm('Voulez-vous supprimer cette categorie ?'))">
                                <i class="fa fa-close fa-2x" title="Supprime" style="color: red;">
                                    <img src="image/Red_x.svg.png" class="img_1">
                                </i>
                            </a>
                        </td>
                <?php } ?>
            </tbody>
        </div>
    </table>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>