<?php

    require_once('model/modific_product.php');

    function modific_product() {

        $subCategory = selectSubCategory();
        $producteur = selectProducteur();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $id_subcategory = $_GET['id_subcategory'];
            $id_producteur = $_GET['id_producteur'];
            $id_picture = $_GET['id_picture'];
            $selProduct = selectProduct($id);
            $brand = selectBrand($id_subcategory);
            $brandPro = selectBrandPro($id_producteur);
            // $brandPic = selectBrandPic($id_picture);


            if(isset($_POST['submit'])) {
                modificProduct($id);
                $selProduct = selectProduct($id);
            }
        }

        require('view/modific_product.php');
    }