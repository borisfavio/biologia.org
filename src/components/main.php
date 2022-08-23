<?php
include('../settings/conexio.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <?php
    include('header.php');
    ?>
    <style>
        .contenedor-poke {
            border-radius: 50%;
            background-color: red;

        }

        .casilla {
            background-color: rgba(33, 38, 33, 0.6) !important;
            border-radius: 20px;
            border-color: greenyellow;
            border-style: solid;
            height: 500px;

        }

        .tit {
            color: red;
            font-size: 25px;
            width: auto;
            
        }
        .tit2 {
            color: wheat;
            font-size: 25px;
            width: auto;
        }

        .tablero {
            height: 150px !important;
            margin-top: 5%;
            
        }
        .tabla-puntaje{
            height: 300px;
            overflow-x:hidden;
            
        }
    </style>

    <div class="container">
        <h1 class="center">Bienvenido</h1>
        <div class="row">
            <div class="col s12 l6">
                <div class="casilla">
                    <div class="tit center ">
                        Los mejores 4
                    </div>
                    <ul class="collection ">
                    <?php
                    session_start();
                    

                            $queryp = "SELECT u.nombre, u.nivel, u.id_pokemon, po.ruta, p.puntaje  
                                        from usuarios u
                                        INNER JOIN pokemon po
                                        ON u.id_pokemon = po.id
                                        INNER JOIN puntajes p 
                                        ON u.id = p.id_usuario
                                        GROUP BY u.nombre
                                        ORDER BY p.puntaje DESC LIMIT 4";
                            $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));

                            while ($row = mysqli_fetch_array($resp)) {


                            ?>
                        <li class="collection-item avatar pd-1">
                            <img src="<?= $row['ruta']?>" alt="" class="circle">
                            <span class="title">Nombre: <?= $row['nombre'] ?></span>
                            <p>Puntaje: <?= $row['puntaje'] ?><br>
                                Medallas: <?=$m=2 ?>
                            </p>
                            <a href="#!" class="secondary-content">Nivel: 1 </a>
                        </li>
                        <?php
                            }
                            ?>
                        
                    </ul>
                </div>
            </div>
            <!--RAncink de actividades-->
            <div class="col s12 l6">
                <div class="card transparent">
                    <div class="casilla ">
                    <div class="row center">
                        <h4>Memorama</h4>
                        <div class="col s1"></div>
                            <div class="col s1"><div class="tit">#</div></div>
                            <div class="col s6"><div class="tit">Nombre</div></div>
                            <div class="col s3"><div class="tit">Puntaje</div></div>
                            <div class="col s1"></div>

                        </div>
                        <!--Puntajes tabla-->
                        <div class="tabla-puntaje">
                        <?php
                        $cont =0;
                            $queryp = "SELECT u.nombre, sum(p.puntaje) as puntaje  
                            from puntajes p
                            inner join usuarios u 
                            on p.id_usuario = u.id
                            WHERE p.id_actividad = 1
                            GROUP BY u.nombre
                            ORDER BY p.puntaje DESC LIMIT 10
                            ";
                            $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));

                            while ($row = mysqli_fetch_array($resp)) {
                                $cont ++;


                            ?>
                        <div class="row center">
                            <div class="col s1"></div>
                            <div class="col s1"><div class="tit2"><?=$cont?></div></div>
                            <div class="col s6"><div class="tit2"><?= $row['nombre'] ?></div></div>
                            <div class="col s3"><div class="tit2"><?= $row['puntaje'] ?></div></div>
                            <div class="col s1"></div>
                        </div>
                        <?php
                            }
                            ?>
                        </div>

                        <!--tabla 2-->




                    </div>
                  
                            


                </div>
            </div>
            <div class="col s12 l6">
                <div class="card transparent">
                    <div class="casilla ">
                    <div class="row center">
                        <h4>Cuestionario</h4>
                        <div class="col s1"></div>
                            <div class="col s1"><div class="tit">#</div></div>
                            <div class="col s6"><div class="tit">Nombre</div></div>
                            <div class="col s3"><div class="tit">Puntaje</div></div>
                            <div class="col s1"></div>

                        </div>
                        <!--Puntajes tabla-->
                        <div class="tabla-puntaje">
                        <?php
                        $cont =0;
                            $queryp = "SELECT u.nombre, sum(p.puntaje) as puntaje   
                            from puntajes p
                            inner join usuarios u 
                            on p.id_usuario = u.id
                            WHERE p.id_actividad = 2
                            GROUP BY u.nombre
                            ORDER BY p.puntaje DESC LIMIT 10
                            ";
                            $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));

                            while ($row = mysqli_fetch_array($resp)) {
                                $cont ++;


                            ?>
                        <div class="row center">
                            <div class="col s1"></div>
                            <div class="col s1"><div class="tit2"><?=$cont?></div></div>
                            <div class="col s6"><div class="tit2"><?= $row['nombre'] ?></div></div>
                            <div class="col s3"><div class="tit2"><?= $row['puntaje'] ?></div></div>
                            <div class="col s1"></div>
                        </div>
                        <?php
                            }
                            ?>
                        </div>

                        <!--tabla 2-->




                    </div>
                  
                            


                </div>
            </div>
<!--FIN RAncink de actividades-->
        </div>

    </div>

    <?php
    include('footer.php');
    ?>