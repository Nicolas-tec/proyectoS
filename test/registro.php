<?php
include_once('conexion.php');
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$direccion=$_POST['direccion'];
$telefono_fijo=$_POST['telefono_fijo'];
$celular=$_POST['celular'];
header("location:login.html");
$conn=conn();
$sql = "INSERT INTO usarios (ID, nombre, cedula, correo, clave, direccion, telefono_fijo, celular) 
VALUES ('','$nombre','$cedula', '$correo', '$clave', '$direccion', '$telefono_fijo', '$celular')";
$resul = mysqli_query($conn , $sql)or trigger_error("Query Failed! SQL- Error:". mysqli_error($conn), E_USER_ERROR);
echo "$sql";
?>