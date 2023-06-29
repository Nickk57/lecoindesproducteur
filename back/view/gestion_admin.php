<?php ob_start() ?>
<div class="container">
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success"  name="">
            <a href="index.php?page=1" class="text-center">Ajout d'un admin</a>
        </button>
    </div>
    <h2>Gestion des admin : </h2>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_admin as $admin) { ?>
                    <tr>
                        <td>
                            <?= $admin['name'] ?>
                        </td>
                        <td>
                            <?= $admin['first_name'] ?>
                        </td>
                        <td>
                            <?= $admin['email'] ?>
                        </td>
                        <td class="text-center col-2">
                            <a href="index.php?page=3&id=<?=$admin['id']?>" onclick="return(confirm('Voulez-vous supprimer l\'admin'))">
                                <i class="fa fa-close fa-2x" title="Supprimer" style="color: red;">
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