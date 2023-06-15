<?php
session_start();

require_once('view/bar_nav.php');
require_once('model/model.php');

if(!isset($_SESSION["email"])) {
    require_once('controller/connect_admin.php');
    connect_admin();
    
} else {
        if(isset($_GET['page']) && $_GET['page'] !=NULL) {
            $page = strval($_GET['page']);

            if($page == 1){
                include_once('controller/ajout_admin.php');
                ajout_admin();
            }
            elseif($page == 2){
                include_once("controller/gestion_admin.php");
                gestion_admin();
            }
            elseif($page == 3){
                include_once("controller/sup_admin.php");
                sup_admin();
            }
            elseif($page == 4){
                include_once("controller/ajout_product.php");
                ajout_product();
            }
            elseif($page == 5){
                include_once("controller/gestion_product.php");
                gestion_product();
            }
            elseif($page == 6){
                include_once("controller/sup_product.php");
                sup_product();
            }
            elseif($page == 7){
                include_once("controller/ajout_picture.php");
                ajout_picture();
            }
            elseif($page == 8){
                include_once("controller/gestion_picture.php");
                gestion_picture();
            }
            elseif($page == 9){
                include_once("controller/sup_picture.php");
                sup_picture();
            }
            elseif($page == 10){
                include_once("controller/ajout_category.php");
                ajout_category();
            }
            elseif($page == 11){
                include_once("controller/gestion_category.php");
                gestion_category();
            }
            elseif($page == 12){
                include_once("controller/sup_category.php");
                sup_category();
            }
            elseif($page == 13){
                include_once("controller/disconnect.php");
                disconnect();
            }
            elseif($page == 14){
                include_once("controller/ajout_subcategory.php");
                ajout_subcategory();
            }
            elseif($page == 15){
                include_once("controller/gestion_subcategory.php");
                gestion_subcategory();
            }
            elseif($page == 16){
                include_once("controller/sup_subcategory.php");
                sup_subcategory();
            }
            elseif($page == 17){
                include_once("controller/modific_category.php");
                select_category();
            }
            elseif($page == 18){
                include_once("controller/modific_subcategory.php");
                select_subcategory();
            }
            elseif($page == 19){
                include_once("controller/modific_product.php");
                modific_product();
            }
            elseif($page == 20){
                include_once("controller/ajout_categ_producteur.php");
                ajout_categ_producteur();
            }
            elseif($page == 21){
                include_once('controller/gestion_categ_producteur.php');
                gestion_categ_producteur();
            }
            elseif($page == 22){
                include_once('controller/sup_categ_producteur.php');
                sup_categ_producteur();
            }
            elseif($page == 23){
                include_once('controller/ajout_producteur.php');
                ajout_producteur();
            }
            elseif($page == 24){
                include_once('controller/gestion_producteur.php');
                gestion_producteur();
            }
            elseif($page == 25){
                include_once('controller/sup_producteur.php');
                sup_producteur();
            }
            elseif($page == 26){
                include_once('controller/select_product_phar.php');
                select_product_phar();
            }
            elseif($page == 27){
                include_once('controller/gestion_product_phar.php');
                gestion_product_phar();
            }
            elseif($page == 28){
                include_once('controller/select_product_new.php');
                select_product_new();
            }
            elseif($page == 29){
                include_once('controller/gestion_product_new.php');
                gestion_product_new();
            }
            elseif($page == 30){
                include_once('controller/modific_producteur.php');
                modific_producteur();
            }
            elseif($page == 31) {
                include_once('controller/modific_categ_prod.php');
                select_categ_prod();
            }
            else {
                include_once("index.php");
            }
        }
        else {
            include_once("index.php");
        }
    }