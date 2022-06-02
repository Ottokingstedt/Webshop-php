<?php 

require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Template.php";
require_once __DIR__ . "/../classes/ProductsDatabase.php";

$product_db = new ProductsDatabase();

$products = $product_db->get_all();


Template::header("Products");

Template::footer();