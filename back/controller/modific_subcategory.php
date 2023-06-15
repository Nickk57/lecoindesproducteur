<?php

    require_once('model/modific_subcategory.php');

    function select_subcategory() {
        $success = '';
        $category = selectCategory();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $id_category = $_GET['id_category'];
            $brand = selectBrand($id_category);
            $selSubCategory = selectSubCategory($id);

            if(isset($_POST['submit'])) {
                modificSubCategory($id);
                $selSubCategory = selectSubCategory($id);
            }
        }
        require('view/modific_subcategory.php');
    }