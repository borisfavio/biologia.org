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
        <img src="img/3.png" id="llama" alt="">
        <form class="formulario" action="control.php" method="post">
            <label>Usuario</label>
            <input type="text" id="input-usuario" name="usuario" placeholder="nombre de usuario" autocomplete="off">
            <label>Contrasea</label>
            <input type="password" id="input-usuario" name="clave" placeholder="contrase;a de usuario" autocomplete="off">
           
            <button type="submit">Login</button>
        </form>
        
    </div>
    
</body>
</html>