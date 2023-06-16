<?php ob_start() ?>
<div class="container"><br>
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name="">
            <a href="index.php?page=10" class="text-light">Ajout d'une categorie</a>
        </button>
    </div>
    <h2>Gestion des categories :</h2>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom</th>
                <th>photo</th>
                <th class="text-center">Modifie</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_category as $categ) {?>
                    <tr>
                        <td>
                            <?= $categ['name']?>
                        </td>
                        <td>
                            <img src="../<?=$categ['path']?>" alt="<?=$categ['name']?>" class="img2">
                        </td>
                        <td class="text-center">
                            <a href="indeex.php?page=17&id=<?=$categ['id']?>&id_picture=<?=$categ['id_picture']?>">
                                <i class="fa fa-gear fa-2x" title="Modifier" style="color: orange;">
                                    <img src="image/roue de param.png" class="img1">
                                </i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="index.php?page=12&id=<?=$categ['id']?>&id_picture=<?=$categ['id_picture']?>" onclick="return(confirm('Voulez-vous supprimer cette categorie ?'))">
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