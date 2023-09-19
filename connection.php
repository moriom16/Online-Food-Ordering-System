<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$link = mysqli_connect($servername, $username, $password, $database);
$conn = $link;


if (!$link) {
    die("Sorry we failed to connect: ");
}

?>


