<?php ob_start() ?>
<br>
<div class="container mt-5">
    <h2>Modification des produits :</h2>
</div><br>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Nom :</label>
            <input type="text" value="<?=$selProduct['name']?>" name="name" 
            class="form-control" id="exampleInputNom1" aria-describedby="Nom">
        </div>
        <div class="form">
            <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
            <textarea class="form-control" type="text" name="description" cols="30" rows="10"
            id="exampleFormControlTextarea1" value="<?=$selProduct['description']?>"></textarea>
        </div>
        <div class="row">
            <div class="col-3">
                <select class="col" name="id_subcategory" id="id_subcategory">
                    <option value="<?=$brand[0]['id']?>"><?=$brand[0]['name']?></option>
                    <?php foreach($subCategory as $subcate) {?>
                        <option value="<?=$subcate['id']?>"><?=$subcate['name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-3">
                <select class="col" name="id_producteur" id="id_producteur">
                    <option value="<?=$brandPro[0]['id']?>"><?=$brandPro[0]['name']?></option>
                    <?php foreach($producteur as $pro) {?>
                        <option value="<?=$pro['id']?>"><?=$pro['name']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-danger" type="button" name="retour"><a href="index.php?page=5">Retour</a></button>
            <button class="btn btn-success" type="submit" name="submit">Valides</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>