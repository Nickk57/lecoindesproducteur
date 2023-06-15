<?php ob_start()?>
<div class="conttainer">
    <div class="col">
        <div class="container-fluide">
            <img src="../image/entre.jpg" alt="entre du magasin" class="entre z-index-1 mv-100">
            <div class="col-3"></div>
            <div class="col-2 z-index-3 text1 text-light">
                <h2 class="text-uppercase">Votre Magasin De Produits Locaux à Lexy</h2>
                <p class="">
                    Venez découvrir un large choix de légumes, fruit, viandes, formages et autres dans 
                    votre magasin de produits régionaux à lexy
                </p>
            </div>
        </div>
        <div class="col text2">
            <h2 class="text-center ">Nos Nouveautés</h2>
            <div class="row g-2">
                <div class="col-2"></div>
                <?php foreach($nouveau_product as $nouvelle) {?>
                    <div class="col mb-2 ms-3 text-center shadow-lg">
                        <a href="index.php?page=6&id=<?=$nouvelle['id']?>" class="link-dark">
                            <img src="../<?=$nouvelle['path']?>" alt="<?=$nouvelle['name']?>" class="img1 object-fit-cover">
                            <h5 class=""><?=$nouvelle['name']?></h5>
                        </a>
                    </div>
                <?php } ?>
                <div class="col-2"></div>
            </div>
        </div>
        <div class="container-fluide serre row">
            <img src="image/serre-accueil.jpg" alt="Nos serre" class="mv-100">
            <div class="row text3 text-light">
                <div class="col-2"></div>
                <div class="col">
                    <h2>Des Légumes Comme Dans Votre Jardin</h2>
                    <p class="">
                        Au coin des producteurs, la majorité des 
                        légumes poussent tout près dans nos serres se
                        trouvant derrière le magasin.
                    </p>
                </div>
            </div>
        </div>
        <div class="row text4">
            <div class="col">
               <h2 class="text-center ">Produits Phares</h2>
                <div class="row">
                <div class="col-2"></div>
                    <?php foreach($product_phar as $phar) {?>
                        <div class="col  mb-2 ms-3 text-center shadow-lg">
                            <a href="index.php?page=6&id=<?=$phar['id']?>" class="link-dark">
                                <img src="../<?=$phar['path']?>" alt="<?=$phar['name']?>" class="img1">
                                <h4 class=""><?=$phar['name']?></h4>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="col-2"></div>
                </div> 
            </div>
            
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <h2 class="text-uppercase">Rendez-nous visite !</h2>  
            </div>
            <div class="row ">
                <div class="col-2"></div>
                <div class="col-3">
                    <h3 class="text-uppercase">Horaire ouverture</h3>
                    <p>Lundi & Mardi : Nous cultivons vos légumes</p>
                    <p>Mercredi & Jeudi : 9h/12h - 14h/18h</p>
                    <p>Vendredi : 9h/18h30</p>
                    <p>Samedi : 9h/13h00</p>
                    <p>Dimanche : Fermé - On se repose</p>
                    <p>Tel : <span class="text-decoration-underline">03.82.89.99.27</span></p>
                    <p class="mt-2">
                        Nous sommes un magasin de producteurs, nos
                        plages d’ouverture sont plus restreintes qu’un
                        supermarché traditionnel. Et c’est tout à fait
                        normal car nous sommes au champ la moitié du 
                        temps
                    </p>
                </div>
                <div class="col-1"></div>
                <div class="col">
                    <div class="facebook mb-5">
                        <div class="elementor-element elementor-element-666bea4 elementor-widget elementor-widget-wp-widget-ocean_facebook" data-id="666bea4" data-element_type="widget" data-widget_type="wp-widget-ocean_facebook.default">
				            <div class="elementor-widget-container">
                                <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Flecoindesproducteurs%2F&#038;width=500&#038;height=400&#038;colorscheme=light&#038;show_faces=true&#038;stream=true&#038;show_border=true&#038;header=false&#038;force_wall=true" scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 500px;  height: 400px; background: #fff"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>