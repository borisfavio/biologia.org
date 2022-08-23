<?php
include('../settings/conexio.php');

session_start();

$iduser = $_SESSION['id'];
$pok = $_GET['idpok'];


var_dump($pok);
var_dump($iduser);



$query = "UPDATE usuarios SET id_pokemon = $pok WHERE id = $iduser;";
$resp = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (isset($resp)) {

    header("Location: main.php");
    $q = "SELECT p.ruto FROM pokemon p;";
    $r = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if (mysqli_num_rows($res) != 0) {
        $_SESSION['poke']=$res['ruta'];
    }
}
else{
    header("Location: pokemon.p1hp");
}



?>