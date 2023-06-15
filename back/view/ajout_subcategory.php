<?php ob_start() ?>
<br>
<div class="contrainer">
    <h2 class="text-center">Ajoute une sous-categorie</h2>
    <h3><?= $success ?></h3>
</div><br>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form">
            <label for="exampleFormControlInput1">Nom :</label><br>
            <input type="text" name="name" id="exampleFormControlInput1" class="form-control">
        </div><br>
        <div class="form">
            <label for="formFile" class="form-label">Photos :</label><br>
            <input type="file" name="picture" id="formFile" class="form-control">
        </div><br>
        <div class="form">
            <select class="col-3 text1 mb-3 form-select" name="id_category">
                <?php foreach($selectCategory as $categ) {?>
                    <option value="<?=$categ['id']?>"><?=$categ['name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-success">Enregistre la sous-categorie</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>