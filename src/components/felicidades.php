<?php
$juego=$_GET['idjuego'];
$medalla=$_GET['med'];
?>

<script src="js/jquery.js"></script>
<style>
    .coin {
        text-decoration: none;
        
    }
    .coin div h4{
        color: yellow;
    }
</style>

<div class="container">
<div class="center">
    <h1>Felicidades!!!</h1>
    <h2>Puntos XP: <?=$_GET['puntos'];?></h2>
</div>
    <div class="row center">
        <div class="col s4 offset-s4">
            <div class="card transparent">
                <h1>Reclamar Recompensa</h1>


                   <!--solicitud-->
                <?php
                include('../settings/conexio.php');
                
                  $que = "SELECT *  from medallas";
                  $respMed = mysqli_query($conn, $que) or die(mysqli_error($conn));
                  while ($row = mysqli_fetch_array($respMed)) {
                ?>    
                <a href="recompensa.php?idjuego=<?=$juego?>&med=<?=$medalla?>&puntos=<?=$_GET['puntos'];?>" class="coin">
                <img width="100hw" src="<?=$row['ruta']?>" alt="">
                </a>
                <div class="div">
                    <h4><?=$row['nombre']?></h4>
                    <h1>Puntos extra: <?=$row['puntos']?></h1>
                    <?php
     }
                    ?>
                    <!--solicitud-->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

    });
</script>