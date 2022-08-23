<?php
include('../settings/conexio.php');



$id = $_GET['q'];
$pts = $_GET['pts'];

session_start();
$_SESSION['puntos'] = $pts;

?>

<style>
        .respuestas {
            border-radius: 25px;
            height: 15vh;
            text-align: center;

        }

        .numbers {
            font-size: 3rem;
            color: #ffff;
            vertical-align: 100px;
            animation: mymove 5s infinite;
        }

        @keyframes mymove {
            50% {
                vertical-align: 100px;
            }
        }
    </style>

    <?php
    $queryp = "SELECT * from cuestionario where id =$id";
    $resp = mysqli_query($conn, $queryp) or die(mysqli_error($conn));
    
    $filas = mysqli_num_rows(mysqli_query($conn,"SELECT * from cuestionario"));
    

    if ($id <= $filas) {
    while ($row = mysqli_fetch_array($resp)) {
    ?>
        <div style="text-decoration: none;" href="ARJS/index.html" class="tareas">
            <div>
                <div class="center">
                    <h1><span id="newid"><?= $row['id'] ?></span>.- <?= $row['pregunta'] ?></h1>
                </div>

            </div>

        </div>
        <!--Respuestas-->
        <div class="container">
            <div class="col s12 l6">
                <div href="#" onclick="<?php
                if($row['corecto'] == "r1"){
                    echo("verificar()");
                 }else{
                    echo("verificar1()");
                 }?>" class="card respuestas cyan accent-2 hoverable">
                    <div>
                        <div class="numbers"><?= $row['r1'] ?></div>

                    </div>
                    <div class="iconBx">
                        <ion-icon name="brain"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="col s12 l6">
                <div href="#" onclick="<?php
                if($row['corecto'] == "r2"){
                    echo("verificar()");
                 }else{
                    echo("verificar1()");
                 }?>" class="card respuestas  light-blue hoverable">
                    <div>
                        <div class="numbers"><?= $row['r2'] ?></div>

                    </div>
                    <div class="iconBx">
                        <ion-icon name="brain"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="col s12 l6">
                <div onclick="<?php
                if($row['corecto'] == "r3"){
                    echo("verificar()");
                 }else{
                    echo("verificar1()");
                 }?>" class="card pink darken-1 respuestas hoverable">
                    <div>
                        <div class="numbers"><?= $row['r3'] ?></div>

                    </div>
                    <div class="iconBx">
                        <ion-icon name="brain"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <?php
    include('modal.php');
    ?>



    </div>


    </div>


<?php
    
    include("footer.php");

}else{
header("Location: felicidades.php?puntos=$pts&idjuego=2&med=1");
}