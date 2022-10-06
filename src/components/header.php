<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="css/materialize.min.css">

<link rel="stylesheet" href="css/personalizado.css">
<script src="js/jquery.js"></script>

</head>

<body style="background-image: url('paisaje_fondo1.jpg'); 
            background-repeat: no-repeat; 
            background-attachment: fixed;
            background-size: cover;">
    <div class="container-fluid section indigo darken-4">
        <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i><img src="img/icons/menu_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>
            
        </a>

        <?php
        session_start();
 
        ?>
        <ul id="slide-out" class="sidenav indigo darken-4">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/back.png">
                    </div>
                    <a href="#user"><img class="circle" src="<?= $_SESSION['poke'] ?>"></a>
                    <a href="#name"><span class="white-text name"><?= $_SESSION['nombre'] ?></span></a>
                    <a href="#email"><span class="white-text email">U.E. Rene Barrientos O.</span></a>
                </div>
            </li>
            <li><a class="white-text" href="main.php"><i><img  src="img/icons/home_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Inicio</a></li>
            <li><a class="white-text" href="perfil.php"><i><img src="img/icons/face_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Mi Perfil</a></li>
            <li><a class="white-text" href="descargas.php"><i><img src="img/icons/file_download_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Descargas</a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="white-text subheader">Actividades</a></li>
            
            <li><a class="white-text waves-effect" href="tareas.php"><i><img src="img/icons/book_online_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Tareas</a></li>
            <li><a class="white-text" href="ARU/index.html"><i><img src="img/icons/ar.svg" alt=""></i>RA</a></li>
            <li><a class="white-text" href="rv_videos.php"><i><img src="img/icons/view_in_ar_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>VR-Video</a></li>
            <li><a class="white-text" href="salir.php"><i><img src="img/icons/logout_FILL0_wght400_GRAD0_opsz48.svg" alt=""></i>Salir</a></li>
        </ul>

    </div>