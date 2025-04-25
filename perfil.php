<?php
session_start();
$Pnombre =$_SESSION['primer_nombre'];
$Snombre = $_SESSION['segundo_nombre'];
$Papellido = $_SESSION['primer_apellido'];
$Sapellido =  $_SESSION['segundo_apellido'];
$telefono = $_SESSION['telefono'];
$email =$_SESSION['email'];
$nacionalidad = $_SESSION['nacionalidad'];
$identidad = $_SESSION['identidad'];
$ciudad =  $_SESSION['ciudad'];
$municipio = $_SESSION['municipio'];
$direccion = $_SESSION['direccion'];
$clave = $_SESSION['clave'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Cream+Soda&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header  class="header">
        <img class="logoHeader" src="./Imagenes/logo.png" alt="logo">
        <h1 class="significadoicono">Perfil</h1>
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="servicios.php"><i class="fa-solid fa-store" style="color: #ffffff;"></i></a></li>
                <li><a href="solicitud.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
                <li><a href="facturacion.php"><i class="fa-solid fa-money-check-dollar" style="color: #ffffff;"></i></a></li>
                <li><a href="mensajeria.php"><i class="fa-solid fa-comment" style="color: #ffffff;"></i></a></li>
                <li><a href="notificaciones.php"><i class="fa-solid fa-bell" style= "color: #ffffff;"></i></a></li>
                <li><a href="perfil.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
   
    
    <div class="perfil-datos-container">
        <div class="input">
            <label for="nombre">Primer nombre: </label>
            <p><?php echo $Pnombre ?></p>
           </div>
           <div class="input">
            <label for="nombre">Segundo nombre: </label>
          <p><?php echo $Snombre ?></p>
        </div>
        <div class="input">
            <label for="apellido">Primer apellido: </label>
        <p><?php echo $Papellido ?></p>
        </div>
        <div class="input">
            <label for="apellido">Segundo apellido: </label>
           <p><?php echo $Sapellido ?></p>
        </div>
        <div class="input">
            <label for="telefono">Teléfono: </label>
           <p><?php echo $telefono ?></p>
        </div>
        <div class="input">
            <label for="email">Correo electrónico: </label>
            <p><?php echo $email ?></p>
        </div>

        <div class="input">
            <label for="Nacionalidad">Nacionalidad: </label>
            <p><?php echo $nacionalidad ?></p>
        </div>
        <div class="input">
            <label for="identidad">Identidad: </label>
            <p><?php echo $identidad ?></p>
        </div>
        <div class="input">
            <label for="ciudad">Ciudad: </label>
            <p><?php echo $ciudad ?></p>
        </div>
        <div class="input">
            <label for="municipio">Municipio: </label>
      <p><?php echo $municipio ?></p>
        </div>
        <div class="input">
            <label for="direccion">Dirección: </label>
       <p><?php echo $direccion ?></p>
        </div>
        <div class="input">
            <label for="clave">Contraseña: </label>
        <p><?php echo $clave ?></p>
        </div>
        </div>
        </div>

        <footer>
    <div class="footer"><h3>Dirección</h3><p>Av. Páez entre calle Mérida y Apure, Casa Nro. 13-47, Centro Barinas, Zonal Postal 5201 - Venezuela</p></div>
    <div class="footer"><h3>Contacto</h3><p>(+58) 424-5104676</p></div>
    <div class="footer"><h3>Instagram</h3><p><a href="https://www.instagram.com/adcesapublicidad?igsh=cGh3b3dqZ3RlZWZq">adcesapublicidad<i class="fa-brands fa-instagram" style="color:rgb(10, 3, 110);"></i></a></p></div>
    </footer>

    </main>
    <body>