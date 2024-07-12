<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/Logo_HidroNova_White.png" size="20x20" type="imagen/png">
</head>

<body>
    <header class="site-header">
        <div class="contenedor contenido-header">  
            <div class="barra">
                <a href="CodigoPrueva.html">
                    <img src="img/Logo_HidroNova_White_Whole1.png" alt="Logotipo de HidroNova">
                </a>
                <nav class="navegacion">
                    <a href="index.html">Inicio</a>
                    <a href="#">Consumo</a>
                    <a href="#">Trámites</a>
                    <a href="#">Pagos</a>
                    <a href="#">Contacto</a>
                    <a href="login.php">Login</a>
                </nav>
            </div><!--Barra-->
        </div><!--Contenedor-->
    </header> 

    <form method="post">

        <h2>Bienvenido</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="email.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Dirección">
            <img class="input-icon" src="direction.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon" src="phone.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Password">
            <img class="input-icon" src="password.svg" alt="">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">

    </form>

    <?php 
    include("register.php");
    ?>

</body>
</html>