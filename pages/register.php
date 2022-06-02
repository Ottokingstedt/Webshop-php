<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/Shop/assets/style.css">
</head>
<body>

<h1>register user</h1>

<nav>
    <a href="/Shop/index.php">home</a>
</nav>

<form action="/Shop/scripts/post-register-user.php" method="post">
<input type="text" name="username" placeholder="Username"> <br>
<input type="password" name="password" placeholder="Password"> <br>
<input type="password" name="confirm-password" placeholder="Confirm password"> <br>
<input type="submit" value="Register">
</form>

<footer>
        Copyright Otto 2022
    </footer>
    
</body>
</html>