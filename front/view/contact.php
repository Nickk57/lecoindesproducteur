<?php ob_start() ?>
<div class="container">
    <form method="post">
        <h2></h2>
        <div class="mb-3 form">
            <div class="">
                <label for="exampleInputNom1" class="form-label">Votre Nom : *</label>
                <input type="text" name="name" class="form-control" id="exampleInputNom1" required>
            </div>
            <div class="">
                <label for="exampleInputPrenom1" class="form-label">Votre Prénom :</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputPrenom1">
            </div>
        </div>
        <div class="mb-3 form">
            <div class="">
                <label for="exampleInputEmail1" class="form-label">Votre Email : *</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="">
                <label for="exampleInputTel1" class="form-label">Votre Téléphone *</label>
                <input type="tel" name="tel" class="form-control" id="exampleInputTel1" 
                pattern="[0-9]{10}" placeholder="0606060606" required>
            </div>
            <div class="">
                <label for="exampleInputNom1" class="form-label">Votre Sujet *</label>
                <input type="text" name="sujet" class="form-control" id="exampleInputNom1" required>
            </div>
        </div>
        <div class="mb-3 form">
            <label for="exampleFormControlTextarea1">Votre Message</label>
            <textarea class="form-control" type="text" name="message" rows="5" 
            id="exampleFormControlTextarea1"></textarea>
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-outline-success">Envoi message</button>
        </div>
        <div class="form">
            <h4><?= $success ?></h4>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>