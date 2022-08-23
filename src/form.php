<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <div class="container section">
        <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>


        <ul id="slide-out" class="sidenav indigo text-white">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div>
                    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">home</i>Inicio</a></li>
            <li><a href="#!"><i class="material-icons">person</i>Mi Perfil</a></li>
            <li><a href="#!"><i class="material-icons">cloud</i>Descargas</a></li>
            <li><a href="#!"></a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="subheader">Actividades</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!"><i class="material-icons">task_alt</i>Tareas</a></li>
            <li><a href=""><i class="material-icons">logout</i>Salir</a></li>
        </ul>

    </div>




    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>

</body>

</html>