<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/memoria.css">
    <title>Memorama</title>
</head>

<body>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #a599ff;
            /* background: #f99; */
        }

        h1 {
            text-align: center;
            margin: 2rem;
            color: #fff;
            text-shadow: 2px 2px 2px rgb(0, 0, 0, 0.46);
        }
      
        .temporizador{
            position: relative;
            height: 150px;
            padding-inline: 10%;
            margin-bottom: 20px;
        }
        .vida{
            position: absolute;
            background-color: yellow;
            width: 80%;
            height: 50px;
            border-radius: 25px;
        }.timer{
            position: absolute;
            background-color: red;
            width: 80%;
            height: 50px;
            border-radius: 25px;
        }
    </style>
<?php
session_start();
?>
    <h1>¿Listo para jugar? 😎</h1>
    <h2 id="demo"></h2>
    
        
    </div>

    <div class="temporizador">
        <img width="50px" src="<?=$_SESSION['poke']?>" alt="">
        <div class="vida">
            .
        </div>
        <div id="tiempo" class="timer">
            .
        </div>

    </div>

    <main class="board-game">

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/1.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/1.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/1.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/1.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/1.png" alt="Back">
            </div>
        </figure>

        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>
        <figure>
            <img class="back" src="img/back.png" alt="Back">
            <div class="searched-image">
                <img src="img/memoria/2.png" alt="Back">
            </div>
        </figure>


    </main>

    <script src="js/jquery.js"></script>
    <script src="js/memoria.js"></script>
    <script>
    
       

    </script>
  
</body>

</html>