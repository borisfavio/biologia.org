<?php
session_start();
include('../settings/conexio.php');

$user = $_POST['usuario'];
$psw = $_POST['clave'];

//guardausuario
$q = "call inicio_sesion('$user','$psw');";
$re = mysqli_query($conn, $q) or die(mysqli_error($conn));

if ($row = mysqli_num_rows($re) != 0) {
    while ($row = mysqli_fetch_row($re)) {
        if ($row[0]=='denegado') {
        } else {
            
            $_SESSION['id'] = $row[0];
            
            
            if ($row['id_avatar'] == 0) {
                
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['nivel'] = $row['nivel'];
                header("Location: pokemon.php");
            } else {
                echo ("no verifica pok");
       
                //busca usuario y pokemon
                $query = "SELECT u.id, u.nombre, u.nivel, p.ruta FROM usuarios u
                INNER JOIN pokemon p
                ON u.id_pokemon = p.id
                WHERE u.nombre LIKE '$user' AND u.pass = '$psw'";
    
                $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
                if (mysqli_num_rows($res) != 0) {
                    session_start();
                    if ($r = mysqli_fetch_array($res)) {
                        
                        $_SESSION['nombre'] = $r['nombre'];
                        $_SESSION['nivel'] = $r['nivel'];
                        $_SESSION['poke'] = $r['ruta'];
                    }
                    if ($r['nivel'] == 1) {
                        header("Location: admin.php");
                    } else {
                        header("Location: main.php");
                    }
                }
            }
    
        }
        
    }
} else {
    echo ("chacra");
   // header("Location: login.php?error=1");
}

?>

