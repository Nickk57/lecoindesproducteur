<?php ob_start() ?>
<body>
    <div class="container-md text-center">
        <h3><?= $success?></h3>
        <form method="post" enctype="multipart/form-data">
            <h2>Ajout d'admin</h2>
            <div class="mb-3 form">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp";>
                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNom1" class="form-label">Votre Nom</label>
                <input type="text" name="name" class="form-control" id="exampleInputNom1"
                aria-describedby="Nom">
                <div id="Nom" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPrenom1" class="form-label">Votre Prenom</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputPrenom1"
                aria-describedby="Prenom">
                <div id="Prenom" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                aria-describedby="password">
                <div id="password" class="control-text">Ne paratagé pas vos mot de passe</div>
            </div>
            <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" name="submit" class="btn btn-success">Inscription</button>
            </div>
        </form> 
    </div>
</body>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>