<?php ob_start()?>
<div class="conttainer">
    <div class="col">
        <div class="row">
            <div class="container-fluide">
                <img src="../image/entre.jpg" alt="entre du magasin" class="entre z-index-1 mv-100">
                <div class="col-3"></div>
                <div class="col-2 z-index-3 text_1 text-light d-none d-lg-block">
                    <h2 class="text-uppercase">Votre Magasin De Produits Locaux à Lexy</h2>
                    <p class="">
                        Venez découvrir un large choix de légumes, fruits, viandes, fromages et autres dans 
                        votre magasin de produits régionaux à Lexy
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text_2">
                <h2 class="text-center ">Nos Nouveautés</h2>
                <div class="row g-2">
                    <div class="col-2"></div>
                    <?php foreach($nouveau_product as $nouvelle) {?>
                        <div class="col mb-2 ms-3 text-center shadow-lg">
                            <a href="index.php?page=6&id=<?=$nouvelle['id']?>" class="link-dark">
                                <img src="../<?=$nouvelle['path']?>" alt="<?=$nouvelle['name']?>" class="img_1 object-fit-cover">
                                <h5 class=""><?=$nouvelle['name']?></h5>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <div class="container-fluide serre row">
            <img src="image/serre-accueil.jpg" alt="Nos serre" class="mv-100">
            <div class="row text_3 text-light">
                <div class="col-2"></div>
                <div class="col">
                    <h2>Des Légumes Comme Dans Votre Jardin</h2>
                    <p class="">
                        Au coin des producteurs, la majorité des 
                        légumes poussent dans nos serres se
                        trouvant derrière le magasin.
                    </p>
                </div>
            </div>
        </div>
        <!-- <div class="row text_4">
            <div class="col">
               <h2 class="text-center ">Produits Phare</h2>
                <div class="row">
                <div class="col-2"></div>
                    <?php foreach($product_phar as $phar) {?>
                        <div class="col  mb-2 ms-3 text-center shadow-lg">
                            <a href="index.php?page=6&id=<?=$phar['id']?>" class="link-dark">
                                <img src="../<?=$phar['path']?>" alt="<?=$phar['name']?>" class="img_1">
                                <h5 class=""><?=$phar['name']?></h5>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="col-2"></div>
                </div> 
            </div>
        </div> -->
        <div class="row">
            <div class="col-2"></div>
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-3">
                    <h2 class="text-uppercase">Rendez-nous visite !</h2>
                    <h3 class="text-uppercase">Horaires d'ouverture</h3>
                    <p>Lundi & Mardi : Nous cultivons vos légumes</p>
                    <p>Mardi : 14h/18h Pendant la période estivale</p>
                    <p>Mercredi & Jeudi : 9h/12h - 14h/18h</p>
                    <p>Vendredi : 9h/18h30</p>
                    <p>Samedi : 9h/13h00</p>
                    <p>Dimanche : Fermé - On se repose</p>
                    <p>Tel : <span class="text-decoration-underline"><a href="tel:+33382899927" style="color: black;">03.82.89.99.27</a></span></p>
                </div>
                <div class="col-1"></div>
                <div class="col mb-5">
                    <div class="facebook">
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
            <div class="row mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1317.6483142038664!2d5.735762774235373!3d49.50732589130239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eac74d3f674181%3A0x9457eb2510cfeb78!2sLe%20Coin%20des%20Producteurs!5e1!3m2!1sfr!2sfr!4v1687940658448!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>