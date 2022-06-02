<?php

class Template{
    public static function header($title)
    { ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - My shop</title>

    <link rel="stylesheet" href="/Shop/assets/style.css">
</head>
<body>
    <h1><?= $title ?></h1>
    
    <nav class="navbar">
        <a href="a" class="logo">LOGO</a>
            <input type="checkbox" id="toggler">
                <label for="toggler"><i class="ri-menu-line">show</i></label>
                     <div class="dropdown-menu">
                         <ul class="dropdown">
        <li><a href="/Shop/pages/products.php">Products</a></li>
        <li><a href="/Shop/pages/login.php">Login</a></li>
        <li><a href="/Shop/pages/register.php">Register</a></li>
        <li><a href="/Shop/pages/testing.php">Contact</a></li>
            </ul>
        </div>
    </nav>

<hr>

   <?php }

public static function footer(){ ?>

<footer>
        Copyright Otto 2022
    </footer>
    </body>
</html>

<?php }
}