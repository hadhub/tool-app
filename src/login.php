<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/default.css">
    <title>Login !</title>
</head>
<body>
    <div class="links">
        <a href="../index.php" class="url">Home Page</a>
        <a href="/src/register.php" class="url">Register</a>
    </div>
    <form action="login.php" method="post">
        <p>Username</p>
        <input type="username" name="text" id="">
        <p>Password</p>
        <input type="password" name="password" id="">
        <br>
        <button type="submit">Login !</button>
    </form>

    <?php
        require_once("../conf/creds.php");
        
        // Now we check if the data was submitted, isset() function will check if the data exists.
        if (!isset($_POST['username'], $_POST['password'])) {
            // Could not get the data that should have been sent.
            exit('Please complete the registration form!');
        }
        // Make sure the submitted registration values are not empty.
        if (empty($_POST['username']) || empty($_POST['password'])) {
            // One or more values are empty.
            exit('Please complete the registration form');
        }

        $user       = $_POST["username"];
        $password   = $_POST["password"];

        // req pour vérifier si l'user + password => présent en BDD
            // Si oui -> redirection vers panel.php
            // Si non -> reste sur la page et affichage d'un lien vers la page register.php

    ?>


</body>
</html>