<?php
function conn(){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "base_usuario";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
return $conn;
}
?>