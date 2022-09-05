<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <?php
    include('../settings/conexio.php');
    include('header.php');

    $idusuario = $_SESSION['id'];
    ?>
    <style>
        .contenedor-poke {

            background-color: rgba(33, 38, 33, 0.6);

        }

        .casilla {
            background-color: rgba(33, 38, 33, 0.6) !important;
            border-radius: 20px;
            border-color: greenyellow;
            border-style: solid;
            height: 20vh;

        }

        .tit {
            color: greenyellow;
            font-size: 20px;
        }

        .tablero {
            margin-top: 5%;
        }

        .contMed {
            height: 120px;
            overflow-y: scroll;
        }
    </style>

    <div class="cuerpo container-fluid">
        <div class="tablero container">
            <div class="row">
                <div class="col s12 l6">
                    <div class="card center transparent">
                        <div class="contenedor-poke">
                            <?php
                            $queryp = "SELECT p.id, p.ruta, p.descripcion from pokemon p
                            INNER JOIN  usuarios u
                            ON p.id = u.id_pokemon
                            WHERE u.id = $idusuario";
                            $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));

                            while ($row = mysqli_fetch_array($resp)) {

                            ?>

                                <img class="pokem" width="400hw" src="<?= $row['ruta'] ?>" alt="">

                        </div>

                    </div>
                </div>
                <div class="col s12 l6">
                    <div class="casilla">
                        <div style="margin: 15px;" class="tit"><?= $row['descripcion'] ?></div>
                    </div>
                </div>
            <?php
                            }
            ?>
            </div>
            <div class="row">
                <div class="col s12 l6">
                    <div class="row">
                        <div class="col s6 center  ">
                            <div class="casilla">
                                <div class="tit">MEDALLAS</div>
                                <div class="row">
                                    <div class="contMed">
                                        <?php
                                        $extras = 0;
                                        $queryp = "SELECT m.ruta, m.puntos from medallas m
                            INNER JOIN  usuario_medallas um
                            ON m.id = um.id_medalla
                            WHERE um.id_usuario = $idusuario";
                                        $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));

                                        while ($row = mysqli_fetch_array($resp)) {
                                            $extras += $row['puntos'];
                                        ?>

                                            <div class="col s4">
                                                <div class="item">
                                                    <img width="80%" src="<?= $row['ruta'] ?>" alt="">
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col s6 center">
                            <div class="casilla">
                                <div class="tit">NIVEL</div>
                                <h1>1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 center">
                            <?php
                            $queryp = "SELECT sum(p.puntaje) as puntaje from puntajes p
                            WHERE id_usuario = $idusuario";
                            $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));

                            while ($row = mysqli_fetch_array($resp)) {
                            ?>
                                <div class="casilla">
                                    <div class="tit">XP</div>
                                    <h1><?= $row['puntaje'] ?></h1>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col s6 center">
                            <div class="casilla">
                                <div class="tit">EXTRAS</div>
                                <h1><?= $extras ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    include('footer.php');
    ?>