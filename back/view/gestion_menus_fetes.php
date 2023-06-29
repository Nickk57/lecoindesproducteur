<?php ob_start() ?>
<div class="container">
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success mt5" name="">
            <a href="index.php?page=32" class="text-light">Ajout d'un nouveau menu fêtes</a>
        </button>
    </div>
    <h2 class="my-5">Gestion des Menus fêtes</h2>
    <table class="table table-bordered border-secondary">
        <head>
            <tr>
                <th>Nom</th>
                <th class="text-center">Menus</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_menus as $menus) {?>
                    <tr>
                        <td class="align-middle">
                            <?= $menus['name']?>
                        </td>
                        <td class="text-center align-middle">
                            <img src="../<?=$menus['path']?>" class="image_2">
                        </td>
                        <td class="text-center align-middle">
                            <a href="index.php?page=34&id=<?=$menus['id']?>&id_picture=<?=$menus['id_picture']?>" onclick="return(confirm('Voulez-vous supprimer cette categorie ?'))">
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
<?php include('layout.php') ?>