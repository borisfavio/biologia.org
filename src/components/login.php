<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components//css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <img src="img/idle/1.png" id="monster" alt="">
        <form class="formulario" action="control.php" method="post">
            <label>Usuario</label>
            <input type="text" id="input-usuario" name="usuario" placeholder="nombre de usuario" autocomplete="off">
           
            <button type="submit">Login</button>
        </form>
        
    </div>
    <script src="../components/js/login.js"></script>
</body>
</html>