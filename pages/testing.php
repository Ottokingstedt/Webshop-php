
    <?php 

    require_once __DIR__ . "/../classes/Fruit.php";
    require_once __DIR__ . "/../classes/Template.php";

Template::header("Test page");

Fruit::info_about_products(5);


// $my_product = new Product("laptop", "white");

  $my_fruit->name = "Orange";
    // $my_product->color = "white";

    $my_fruit->price = 250;

    $my_fruit->intro();

    $my_strawberry = new Strawberry("Strawberry", "Red", 250);

    $my_strawberry->price = 10;

    $my_strawberry->message();

    $my_strawberry->intro();

   // $my_product->message();

   Template::footer();

    ?>
