<?php
session_start();

$id = $_SESSION['id'];

var_dump($id);

include('../settings/conexio.php');
$q = "select sesiones(0,$id)";
$re = mysqli_query($conn, $q) or die(mysqli_error($conn));

session_destroy();

header("location:login.php");
?>