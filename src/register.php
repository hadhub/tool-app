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
    <form action="register.php" method="POST">
        <p>Username</p>
        <input type="username" name="username" id="">
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
        if (!isset($user, $password)) {
            // Could not get the data that should have been sent.
            exit('Please complete the registration form!');
        }
        // Make sure the submitted registration values are not empty.
        if (empty($user) || empty($password)) {
            // One or more values are empty.
            exit('Please complete the registration form');
        }
        // TODO : cancel the account creation if username already exist in database
        
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $req_register_account = "INSERT INTO users (username, password) VALUES ('$user', '$hash_password');";
        $conn->query($req_register_account);
        echo "<br>";
        echo "Account created, please go to login page to complete ur inscription.";

        mysqli_close($conn);
    ?>

    <a href="/src/login.php" class="url">Login</a>

</body>
</html>
