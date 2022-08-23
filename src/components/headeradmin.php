<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/personalizado.css">
<script src="js/jquery.js"></script>

</head>

<body style="background-image: url('fondoPrincipal.jpg');">
    <div class="container-fluid section indigo">
        <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i class="material-icons">menu</i>
            <span>U.E. Rene Barrientos O.</span>
        </a>

        <?php
        session_start();
 
        ?>
        <ul id="slide-out" class="sidenav indigo text-white">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/laboratorio.png">
                    </div>
                    <a href="#user"><img class="circle" src="<?= $_SESSION['poke'] ?>"></a>
                    <a href="#name"><span class="white-text name"><?= $_SESSION['nombre'] ?></span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="main.php"><i class="material-icons">home</i>Inicio</a></li>
            <li><a href="perfil.php"><i class="material-icons">person</i>Mi Perfil</a></li>
            <li><a href="#!"><i class="material-icons">cloud</i>Descargas</a></li>
            <li><a href="#!"></a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="subheader">Actividades</a></li>
            <li><a class="waves-effect" href="AR/vr.html">Realidad Aumentada</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="tareas.php"><i class="material-icons">task_alt</i>Tareas</a></li>
            <li><a href="crearCuestionario.php"><i class="material-icons">logout</i>Cuestionarios</a></li>
            <li><a href="salir.php"><i class="material-icons">logout</i>Salir</a></li>
        </ul>

    </div>