<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "blog";

$servername = "localhost";
$username = "igoalplu_sabai-999";
$password = "6b)cUsfs;=jP";
$database = "igoalplu_sabai-999";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}
