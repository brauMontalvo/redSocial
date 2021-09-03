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
   
    <?php
        session_start();
        $_SESSION ['correo'] = $_POST['correo'];
        $_SESSION ['password'] = $_POST['password'];

        if($_SESSION["correo"] == $_SESSION["email"] && $_SESSION["password"] == $_SESSION["contraseña"]){      ?>

            <form action="index.html" method="POST">
                <h1>BIENVENIDO A DISTRICT</h1><br>
                <h1>Estos son tu datos de usuario ^^</h1><br><br>
                <p>Nombre(s): <?php echo $_SESSION ['nombre']?><p>
                <p>Apellidos: <?php echo $_SESSION ['apellidos']?><p>
                <p>Edad: <?php echo $_SESSION ['edad']?><p>
                <p>Genero: <?php echo $_SESSION ['sexo']?><p>
                <p>Ciudad: <?php echo $_SESSION ['ciudad']?><p>
                <p>Correo electrónico: <?php echo $_SESSION ['email']?><p>
                <p>Contraseña: <?php echo $_SESSION ['contraseña']?><p>

                <input type="submit" value="Cerrar sesión">

            </form>
                    
        <?php
        }else{  ?>

        <h1>Correo y/o contraseña incorrectos</h1>

        <form action="index.html" method="POST">
        <input type="submit" value="Comprobar datos nuevamente">
        </form>

        <?php
        }


    ?>

</body>
</html>