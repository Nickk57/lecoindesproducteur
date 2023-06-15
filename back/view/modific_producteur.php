<?php ob_start() ?>
<br>
<div class="container mt-5">
    <h2>Modification des producteur :</h2>
</div><br>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Nom :</label>
            <input type="text" value="<?=$selProducteur['name']?>" name="name" 
            class="form-control" id="exampleInputNom1" aria-describedby="Nom">
        </div>
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Ville :</label>
            <input type="text" value="<?=$selProducteur['city']?>" name="city"
            class="form-control" id="exampleInputNom1" aria-describedby="City">
        </div>
        <div class="form">
            <label for="exampleFormControlTextarea1" class="form-label">Nom du producteur :</label>
            <input type="text" value="<?=$selProducteur['first_name']?>" name="first_name"
            class="form-control" id="exampleInputNom1" aria-describedby="First_name">
        </div>
        <div class="form">
            <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
            <textarea class="form-control" type="text" name="description" cols="30" rows="10"
            id="exampleFormControlTextarea1" value="<?=$selProducteur['description']?>"><?=$selProducteur['description']?></textarea>
        </div>
        <div class="form">
            <label for="exampleFormControlTextarea1" class="form-label">Caretisique :</label>
            <textarea class="form-control" type="text" name="characte" cols="30" rows="10"
            id="exampleFormControlTextarea1" value="<?=$selProducteur['characte']?>"><?=$selProducteur['characte']?></textarea>
        </div>
        <div class="row">
            <select class="col" name="id_categ_producteur" id="id_categ_producteur">
                <option value="<?=$brand[0]['id']?>"><?=$brand[0]['name']?></option>
                <?php foreach($categProducteur as $categPro) {?>
                    <option value="<?=$categPro['id']?>"><?=$categPro['name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-danger" type="button" name="retour"><a href="index.php?page=24">Retour</a></button>
            <button class="btn btn-success" type="submit" name="submit">Valides</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>