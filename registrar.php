<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED SOCIAL DISTRICT</title>
    <link rel="stylesheet" href="css/login.css?1.0" media="all">
    <link rel="stylesheet" href="css/cabecera.css?1.0" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <h1 class="animate__animated animate__backInLeft" id="titulo">DISCTRICT</h1><br><br>

    <center><form action="procesarRegistro.php" method="POST">
        <h1> REGISTRARSE </h1>
        <p>Nombre(s)</p>
        <input type="text" name="nombre" placeholder=""><br>
        <p>Apellidos</p>
        <input type="text" name="apellidos" placeholder=""><br>
        <p>Edad</p>
        <input type="text" name="edad" placeholder=""><br>
        <p>Genero</p>
        <select name="sexo">
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <p>Ciudad</p>
        <input type="text" name="ciudad" placeholder=""><br>
        <p>Correo electronico</p>
        <input type="text" name="email" placeholder=""><br>
        <p>Contraseña.</p>
        <input type="password" name="contraseña" placeholder="" id="1">
        <p>Confirmar contraseña.</p>
        <input type="password" name="contraseña2" placeholder="" id="2"><br><br>

        <input type="submit" value="Registrar">
    </form></center>

    <form action="index.html" method="POST">
        <input type="submit" value="Volver a inicio">
    </form>


</body>
</html>