<?php ob_start() ?>
<br>
<div class="container">
    <h2>Modification des categorie des producteurs :</h2>
</div><br>
<div class="container">
    <form method="post">
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Nom :</label>
            <input type="text" value="<?=$selCategProd['name']?>" name="name" class="form-control" id="exampleInputNom1" aria-describedby="Nom">
        </div>
        <div class="form">
            <label for="formFile" class="form-label">Photos :</label>
            <input type="file"  class="form-control" name="picture" id="formFile">
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-danger" type="button" name="retour"><a href="index.php?page=21">Retour</a></button>
            <button class="btn btn-success" type="submit" name="submit">Valides</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>