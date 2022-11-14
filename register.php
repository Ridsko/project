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
        <form action="reg.php" method="post" class="container container--inloggen">
            <div class="item item--text">
                <h1 class="header header--h1">Registreren bedrijven</h1>
            </div>
            <div class="item item--fields">
                <input type="text" name="uname" class="text text--name" placeholder="Gebruikersnaam">
                <input type="password" name="password" class="text text--password" placeholder="Wachtwoord herhalen">
                <input type="password" name="passwordr" class="text text--name" placeholder="Wachtwoord herhalen">
                <input type="text" name="email" class="text text--name" placeholder="Email">
                <input type="text" name="name" class="text text--name" placeholder="Naam">
            </div>
            <div class="item item--buttons">
                <button class="button button--inloggen">Registreren</button>
                <a href="index.php" class="link link--sign-up">Log In</a>
                <a href="vergeten.php" class="link link--wachtwoord-vergeten">Wachtwoord vergeten</a>
            </div>
        </form>
    </body>
</html>