<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/default.css">
    <title>Home | Web App Test</title>
</head>
<body>
    <div class="links">
        <a href="/src/login.php" class="url">Login</a>
        <a href="/src/register.php" class="url">Register</a>
    </div>

    <h3>Liste des utilisateurs de l'application : </h3>

    <?php
        require_once("./conf/creds.php");
        
        $req_display_users = "SELECT username FROM users;";
        if ($result = $conn->query($req_display_users)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $username = $row["username"];
                echo "<br>";
                echo $username;
            }
        
            /* free result set */
            $result->free();
        }
        mysqli_close($conn);
    ?>
</body>
</html>