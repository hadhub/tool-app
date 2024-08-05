<?php
    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'hadlecat');
    define('DB_PASSWORD', 'hadlecat123!');
    define('DB_NAME', 'todo');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die('Could not connect');
    }
?>