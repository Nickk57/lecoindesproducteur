<?php ob_start() ?>
<div class="container">
    <h3><?= $success?></h3>
    <form method="post" enctype="multipart/form-data">
        <h2>Ajout un produit</h2>
        <div class="form">
            <label for="exampleFormControlInput1">Nom :</label>
            <input class="form-control" type="text" name="name"
            id="exampleFormControlInput1">
        </div><br>
        <div class="form">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" type="text" name="description"
            id="exampleFormControlTextarea1"></textarea>
        </div><br>
        <div class="form">
            <label for="formFile" class="form-label">Photos :</label>
            <input type="file"  class="form-control" name="picture" id="formFile">
        </div><br>
        <select class="col-3 text1 mb-3 form-select" name="id_subcategory" id="id_subcategory">
            <label for="id_subcategory">Sous-categorie :</label>
                <option value="null"></option>
            <?php foreach($selSubCategory as $subcategory) {?>
                <option value="<?=$subcategory['id']?>"><?=$subcategory['name']?></option>
            <?php }?>
        </select><br>
        <select class="col-3 text1 mb-3 form-select" name="id_producteur" 
        id="producteur">
        <label for="producteur">Producteur :</label>
                <option value="null"></option>
            <?php foreach($selproducteurs as $sd) {?>
                <option value="<?=$sd['id']?>"><?=$sd['name']?></option>
            <?php } ?>
        </select><br>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-succcess">Enregistre le produit</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>
