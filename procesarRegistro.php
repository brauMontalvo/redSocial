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
        $_SESSION ['nombre'] = $_POST['nombre'];
        $_SESSION ['apellidos'] = $_POST['apellidos'];
        $_SESSION ['edad'] = $_POST['edad'];
        $_SESSION ['sexo'] = $_POST['sexo'];
        $_SESSION ['ciudad'] = $_POST['ciudad'];
        $_SESSION ['email'] = $_POST['email'];
        $_SESSION ['contraseña'] = $_POST['contraseña'];
        $_SESSION ['contraseña2'] = $_POST['contraseña2'];


        if($_POST["contraseña"] == $_POST["contraseña2"]){      ?>

            <h1>REGISTRO COMPLETADO</h1>

            <form action="index.html" method="POST">
            <input type="submit" value="Volver a inicio">
            </form>
        
        <?php
        }else{  ?>

        <h1>VERIFICAR NUEVAMENTE LA CONTRASEÑA</h1>

        <form action="registrar.php" method="POST">
        <input type="submit" value="Comprobar datos nuevamente">
        </form>

        <?php
        }


    ?>

</body>
</html>