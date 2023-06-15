<?php ob_start() ?>
<div class="container mt-5">
    <h1>Ajoute une categorie</h1>
    <h3><?= $success ?></h3>
</div>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form">
            <label for="exampleFormControlInput1">Nom de la categorie :</label>
            <input class="form-control" type="text" name="name"
            id="exampleFormControlInput1">
        </div><br>
        <div class="form">
            <label for="formFile" class="form-label">Photos :</label>
            <input type="file" name="picture" id="formFile" class="form-control">
        </div><br>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-success">Enregistre la categorie</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>