<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/default.css">
    <title>Create account</title>
</head>
<body>
    <div class="links">
        <a href="../index.php" class="url">Home Page</a>
        <a href="/src/login.php" class="url">Login</a>
    </div>
    <form action="register.php" method="post">
        <p>Username</p>
        <input type="text" name="username" id="">
        <p>Password</p>
        <input type="password" name="password" id="">
        <br>
        <button type="submit">Register</button>
    </form>

    <?php
        require_once("../conf/creds.php");
        $user       = $_POST["username"];
        $password   = $_POST["password"]; 
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

        $req_register_account = "INSERT INTO users (username, password) VALUES ('$user', '$password');";
        
        $conn->query($req_register_account);
        echo "<br>";
        echo "Account created, please go to login page to complete ur inscription.";
    ?>

    <a href="/src/login.php" class="url">Login</a>

</body>
</html>