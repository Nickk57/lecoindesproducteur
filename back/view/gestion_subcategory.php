<?php ob_start() ?>
<div class="container"><br>
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name="">
            <a href="index.php?page=14" class="text-light">Ajout d'une sous-categorie</a>
        </button>
    </div>
    <h2>Gestion des sous-categorie :</h2>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom</th>
                <th>Photo</th>
                <th class="text-center">Modifie</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_subcategory as $subcateg) {?>
                    <tr>
                        <td><?= $subcateg['name']?></td>
                        <td>
                            <img src="../<?=$subcateg['path']?>" alt="<?=$subcateg['name']?>" class="img2">
                        </td>
                        <td class="text-center">
                            <a href="index.php?page=18&id=<?=$subcateg['id']?>&id_category=<?=$subcateg['id_category']?>">
                                <i class="fa fa-gear fa-2x" title="Modifier" style="color: orange;">
                                    <img src="image/roue de param.png" class="img1">
                                </i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="index.php?page=16&id=<?=$subcateg['id']?>&id_picture=<?=$subcateg['id_picture']?>" onclick="return(confirm('Voulez-vous supprimer cette categorie ?'))">
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