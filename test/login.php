<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "base_usuario";
$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("no hay conexion: ".mysqli_connect_error());
}
$nombre = $_POST["txusuario"];
$clave = $_POST["txclave"];
$query = mysqli_query($conn, "SELECT * FROM usarios WHERE nombre = '".$nombre."' and clave = '".$clave."'");
$nr = mysqli_num_rows($query);
if($nr == 1)
{
    header("location:menu.html");
}
else if ($nr == 0)
{
    echo "acceso denegado";
}
?>