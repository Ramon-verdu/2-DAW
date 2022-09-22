<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'dominio';

try {
  $conexion=mysqli_connect($server,$username,$password,$database);
  
  
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}


$fecha_alta = date('Y-m-d');

//Insertamos datos.
$query = "INSERT INTO usuarios(Usuario_nombre, Usuario_apellido1, Usuario_apellido2, Usuario_clave, Usuario_fecha_alta, Usuario_email) values 
                        ('$_REQUEST[nombre]',
                         '$_REQUEST[apellido1]',
                         '$_REQUEST[apellido2]',
                         '$_REQUEST[clave]',
                         '$fecha_alta',
                         '$_REQUEST[email]')";

$registro = mysqli_query($conexion, $query) or die("Problemas al registrar usuario: " . mysqli_error($conexion));
 

?>