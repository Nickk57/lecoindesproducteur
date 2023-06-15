<?php ob_start() ?>
<div class="container mt-5">
    <h1>Ajoute un producteur</h1>
    <h3><?= $success ?></h3>
</div>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form">
            <select class="col-3 text1 mb-3 form-select" name="id_categ_producteur" id="id_categ_producteur">
                <?php foreach($selCategproducteur as $categProducteur) {?>
                    <option value="<?=$categProducteur['id']?>"><?= $categProducteur['name']?></option>
                <?php }?>
            </select>
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Nom de la ferme :</label>
            <input class="form-control" type="text" name="name"
            id="exampleFormControlInput1">
        </div><br>
        <div class="form">
            <label for="exampleFormControlInput1">Nom de la ville :</label>
            <input class="form-control" type="text" name="city"
            id="exampleFormControlInput1">
        </div><br>
        <div class="form">
            <label for="exampleFormControlInput1">Nom du producteur :</label>
            <input type="text" class="form-control" name="first_name"
            id="exampleFormControlInput1">
        </div><br>
        <div class="form">
            <label for="exampleFormControlTextarea1" class="form_label">La desciption :</label>
            <textarea name="description" id="exampleFormControlTextarea1" class="form-control" cols="30" rows="10"></textarea>
        </div><br>
        <div class="form">
            <label for="exampleFormControlTextarea1" class="form_label">La caretisique :</label>
            <textarea name="characte" id="exampleFormControlTextarea1" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form">
            <label for="formFile" class="form-label">Photos :</label>
            <input type="file" name="picture" id="formFile" class="form-control">
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-success">Enregistre la categorie</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>