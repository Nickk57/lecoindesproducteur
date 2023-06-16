<?php ob_start() ?>
<div class="container">
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success mt-5" name="">
            <a href="index.php?page=7" class="text-light">Ajout d'une nouvelle photo</a>
        </button>
    </div>
    <h2 class="my-5">Gestion des photos :</h2>
    <table class="table table-bordered border-secondary">
        <head>
            <tr>
                <th>Nom</th>
                <th class="text-center">Images</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_picture as $picture) { ?>
                    <tr>
                        <td class="align-middle">
                            <?= $picture['name'] ?>
                        </td>
                        <td class="text-center align-middle">
                            <img src="../<?= $picture['path']?>" class="image1">
                        </td>
                        <td class="text-center align-middle">
                            <a href="index.php?page=9&id=<?=$picture['id']?>" onclick="return(confirm('Voulez-vous supprimer cette categorie ?'))">
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