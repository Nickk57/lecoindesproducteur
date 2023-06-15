<?php
include('view/bar_nav.php');
require_once('model/model.php');

if(isset($_GET['page']) && $_GET['page'] !=null) {
    $page = strval($_GET['page']);

    if($page == 1) {
        include_once('controller/accueil.php');
        gestion_product();
    }
    elseif($page == 2) {
        include_once('controller/vos_category.php');
        vos_category();
    }
    elseif($page == 3) {
        include_once('controller/vos_produit_fete.php');
    }
    elseif($page == 4) {
        include_once('controller/vos_category_prod.php');
        vos_category_pro();
    }
    elseif($page == 5) {
        include_once('controller/contact.php');
        envoie_mail();
    }
    elseif($page == 6) {
        include_once('controller/product.php');
        the_products();
    }
    elseif($page == 7) {
        include_once('controller/recherche.php');
        search_product();
    }
    elseif($page == 8) {
        include_once('controller/vos_subcateg.php');
        vos_subcateg();
    }
    elseif($page == 9) {
        include_once('controller/vos_produit.php');
        vos_product();
    }
    elseif($page == 10) {
        include_once('controller/vos_producteur.php');
        gestion_producteur();
    }
    elseif($page == 11) {
        include_once('controller/vos_product_prod.php');
        vos_produits_pro();
    }
    else {
        include_once('index.php');;
    }
}
else {
    include_once('index.php');
}

include('view/footer.php');