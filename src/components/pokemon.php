<?php
include('../settings/conexio.php');
?>

<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pokemon</title>
            <?php
            include('header.php');
            ?>
            <style>
                .cajas{
                    border-style: solid;
                    border-color: black;
                    min-height: 180px;
                    min-width: 180px;
                    border-radius: 20px;
                    margin-top: 15px;
                    background-color: rgba(92, 166, 145, 0.71);

                }
                .desc{
                    color: white;
                    background-color: rgba(133, 159, 166, 0.8);
                    min-height: 35px;
                    border-radius: 10px;
                    margin: 5px;
                }
            </style>

            <div class="container center">
                <h4>Selecciona un Pokemon</h4>
                <div class="row center">
                    <?php
                    $query = "SELECT * FROM pokemon;";
                    $resp = mysqli_query($conn, $query) or die(mysqli_error($conn));

                        while ($row = mysqli_fetch_array($resp)) {
                    ?>
                    <div class="col s12 l4">
                    <div class="cajas">
                        <a href="seleccionar.php?idpok=<?=$row['id']?>" style="text-decoration: none;">
                            <img width="150px" src="<?=$row['ruta']?>" alt="">
                        </a>
                        <div class="desc">
                            DEscr
                        </div>
                    </div>
                    </div>

                    <?php
                    }
                    ?>
                    
                </div>
            </div>

            <?php
            include('footer.php');
            ?>

    <?php

