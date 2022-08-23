<?php

include('../settings/conexio.php');

session_start();
$iduser = $_SESSION['id'];
var_dump($iduser);
if (isset($_GET['med'])) {
    
    $medalla = $_GET['med'];
    $juego = $_GET['idjuego'];
    $puntos = $_GET['puntos'];




    $query = "INSERT INTO usuario_medallas (`id_usuario`, `id_medalla`) VALUES ($iduser, $medalla);";

    $resp = mysqli_query($conn, $query) or die(mysqli_error($conn));



    $queryP = "INSERT INTO `puntajes` (`id_usuario`, `id_actividad`, `puntaje`, `estado`) 
            VALUES ($iduser, $juego, $puntos, 1);";
    $res = mysqli_query($conn, $queryP) or die(mysqli_error($conn));


}
    header('Location: perfil.php');
?>