<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $namedb = "form";

    $conn = mysqli_connect($servername, $username, $password, $namedb);

    if (!$conn) {
        die("Connection failed: " . mysql_connect_error());
    }
?>