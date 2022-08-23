<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="css/materialize.min.css">

<link rel="stylesheet" href="css/personalizado.css">
<script src="js/jquery.js"></script>

</head>

<body style="background-image: url('fondoPrincipal.jpg');">
    <div class="container-fluid section indigo">
        <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i><img src="img/icons/menu_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>
            <span  class="center">U.E. Rene Barrientos O.</span>
        </a>

        <?php
        session_start();
 
        ?>
        <ul id="slide-out" class="sidenav indigo text-white">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/bosque.webp">
                    </div>
                    <a href="#user"><img class="circle" src="<?= $_SESSION['poke'] ?>"></a>
                    <a href="#name"><span class="white-text name"><?= $_SESSION['nombre'] ?></span></a>
                    <a href="#email"><span class="white-text email">Nivel: 1</span></a>
                </div>
            </li>
            <li><a href="main.php"><i><img src="img/icons/home_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Inicio</a></li>
            <li><a href="perfil.php"><i><img src="img/icons/face_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Mi Perfil</a></li>
            <li><a href="#!"><i><img src="img/icons/file_download_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Descargas</a></li>
            <li><a href="#!"></a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="subheader">Actividades</a></li>
            
            <li><a class="waves-effect" href="tareas.php"><i><img src="img/icons/book_online_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Tareas</a></li>
            <li><a href="ARU/index.html"><i><img src="img/icons/view_in_ar_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>RA</a></li>
            <li><a href="salir.php"><i><img src="img/icons/logout_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Salir</a></li>
        </ul>

    </div>