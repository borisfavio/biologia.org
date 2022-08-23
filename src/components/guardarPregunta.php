<?php
include('../settings/conexio.php');


$preg =$_POST['pregunta'];
$r1 = $_POST['resp1'];
$r2 =$_POST['resp2'];
$r3 =$_POST['resp3'];
$c1 =$_POST['check1'];
$c2 =$_POST['check2'];
$c3 =$_POST['check3'];

$rc = '';

if(isset($c1)) {
    $rc = $c1;
    }else if (isset($c2)) {
        $rc = $c2;
    }else if (isset($c3)) {
        $rc = $c3;
    }

    echo($rc);

$query = "INSERT INTO cuestionario (`pregunta`, `r1`, `r2`, `r3`, `corecto`) 
        VALUES ('$preg', '$r1', '$r2', '$r3', '$rc');";


$resp = mysqli_query($conn, $query) or die(mysqli_error($conn));


    header('Location: crearCuestionario.php');


?>