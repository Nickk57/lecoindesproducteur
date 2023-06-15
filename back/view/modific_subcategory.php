<?php ob_start()?>
<br>
<div class="container">
    <h1>Modification des sous-categorie :</h1>
    <h3><?= $success?></h3>
</div><br>
<div class="container">
    <form method="post">
        <div class="form">
            <label for="exampleFormControlInput1">Nom :</label>
            <input type="text" value="<?=$selSubCategory['name']?>" name="name" 
            id="exampleFormControlInput1" class="form-control" aria-describedby="Nom">
        </div><br>
        <div class="form">
            <div class="col-3">
                <select name="id_category" id="id_category">
                    <option value="<?=$brand[0]['id']?>"><?=$brand[0]['name']?></option>
                    <?php foreach($category as $categ) {?>
                        <option value="<?=$categ['id']?>"><?=$categ['name']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" name="retour" class="btn btn-danger">
                <a href="index.php?page=15">Retour</a>
            </button>
            <button type="submit" name="submit" class="btn btn-success">Enregistre</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout.php') ?>