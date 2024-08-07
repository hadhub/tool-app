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
        
        if (!isset($user, $password)) {
            exit('Please complete the registration form');
        }
        if (empty($user) || empty($password)) {
            exit('Please complete the registration form');
        }
        
        $req_check_user_already_exist = "SELECT username FROM users WHERE users.username='$user';";

        if($result = $conn->query($req_check_user_already_exist)) {
            
            if(mysqli_num_rows($result) > 0){
                echo "Username already exist";
                mysqli_close($conn);

            } else {
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $req_register_account = "INSERT INTO users (username, password) VALUES ('$user', '$hash_password');";
                $conn->query($req_register_account);
                
                echo "<br>";
                echo "Account created, please go to login page to complete ur inscription.";
                
                mysqli_close($conn);
            }
        }
    ?>

    <a href="/src/login.php" class="url">Login</a>

</body>
</html>
