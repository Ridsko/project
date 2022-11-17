<?php


function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}



?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<!--        <link rel="shortcut icon" type="image/png" href="#">-->
        
        <title>Vragenlijst</title>
        <meta name="description" content="vragenlijst">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="body">
        <form action="login.php" method="post" class="container container--inloggen">
            <div class="item item--text">
                <h1 class="header header--h1">Inloggen bedrijven</h1>
            </div>
            <div class="item item--fields">
                <input type="text" class="text text--name" name="uname" placeholder="username">
                <input type="password" class="text text--password" name="password" placeholder="password">
            </div>
            <div class="item item--buttons">
                <button class="button button--inloggen">Inloggen</button>
                <a href="register.php" class="link link--sign-up">Sign Up</a>
                <a href="#" class="link link--wachtwoord-vergeten">Wachtwoord vergeten</a>
            </div>
        </form>
    </body>
</html>