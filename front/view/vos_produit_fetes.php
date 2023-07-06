<?php ob_start() ?>
<div class="container mt-5 mb-5">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Menus Noël :
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col">
                            <h3>Pour vos fêtes de Noël, mangez local avec notre sélection de produits régionaux !</h3>
                            <p>
                                Retrouver tout nos produits spécialement sélectionnés pour vous offrir des fêtes gourmandes et locales. Volailles festives, viandes, pain, fromages, buches glacées,… nos producteurs locaux travaillent au quotidien pour vous proposer le meilleur.
                                <br><br>
                                Les commandes sont à déposer au plus tard le 15 décembre 2022 par e-mail ou directement en magasin.
                                N’hesitez pas à utiliser notre bon de commande et à télécharger notre flyer de Noel
                            </p>
                        </div>
                        <div class="col">
                            <img src="../image/noel-300x300.jpg" alt="noël">
                        </div>
                    </div>
                        <div class="">
                            <h2 class="">Le Menus :</h2>
                            <div class="col">
                                <?php foreach($menusnoel as $noel) {?>
                                    <div class="col">
                                        <img src="../<?=$noel['path']?>" alt="<?=$noel['name']?>" class="img_3 mt-2">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Menus Pâquet :
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col">
                            <h3>Pour vos fêtes de pâquets, mangez local avec notre sélection de produits régionaux !</h3>
                            <p></p>
                        </div>
                        <div class="col">
                            <img src="../image/" alt="pâquet">
                        </div>
                    </div>
                    <div class="">
                        <h2 class="">Le Menus :</h2>
                        <div class="col">
                            <?php foreach($menuspaquet as $paquet) {?>
                                <div class="col">
                                    <img src="../<?=$paquet['path']?>" alt="<?=$paquet['name']?>" class="img_3 mt-2">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Menus Halloween :
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col">
                            <h3>Pour vos fêtes de halloween, mangez local avec notre sélection de produits régionaux !</h3>
                            <p></p>
                        </div>
                        <div class="col">
                            <img src="../image/" alt="halloween">
                        </div>
                    </div>
                    <div class="">
                        <h2 class="accordion-header">Le Menus :</h2>
                        <div class="col">
                            <?php foreach($menushalloween as $halloween) {?>
                                <div class="col">
                                    <img src="../<?=$halloween['path']?>" alt="<?=$halloween['name']?>" class="img_3 mt-2">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>