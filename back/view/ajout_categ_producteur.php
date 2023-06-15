<?php ob_start() ?>
<div class="container mt-5">
    <h2>Ajouter une categorie de producteur</h2>
    <h3><?= $success ?></h3>
</div>
<div class="container">
    <form method="post">
        <div class="form">
            <label for="exampleFormControlInput1">Nom de la categorie :</label>
            <input class="form-control" type="text" name="name"
            id="exampleFormControlInput1">
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-success">Enregistre la categorie</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php')?>