<?php ob_start() ?>
<div class="container">
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name="">
            <a href="index.php?page=20" class="text-light">Ajout d'une categorie producteur</a>
        </button>
    </div>
    <h2>Gestion des categories producteurs :</h2>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom</th>
                <th class="text-center">Photos</th>
                <th class="text-center">Modifier</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_categ_prod as $producteur) {?>
                    <tr>
                        <td>
                            <?= $producteur['name']?>
                        </td>
                        <td>
                            <img src="../<?=$producteur['path']?>" alt="<?=$producteur['name']?>" class="img2">
                        </td>
                        <td class="text-center">
                            <a href="index.php?page=31&id_producteur=<?=$producteur['id']?>">
                                <i class="fa fa-gear fa-2x" title="Modifier" style="color: orange;">
                                    <img src="image/roue de param.png" class="img1">
                                </i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="index.php?page=22&id_producteur=<?=$producteur['id']?>&id_picture=<?=$producteur['id_picture']?>" onclick="return(confirm('Voulez-vous supprimer cette categorie ?'))">
                                <i class="fa fa-close fa-2x" title="Supprime" style="color: red;">
                                    <img src="image/Red_x.svg.png" class="img1">
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
<?php include('layout.php') ?>