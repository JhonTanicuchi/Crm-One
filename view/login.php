<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM CLARO</title>
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="shortcut icon" href="img/20210319164721.png" type="image/x-icon">
</head>

<body>
    <img class="logo-claro" src="img/pngfind.com-logo-claro-png-3822306 (1).png" alt="">
    <form action="../controler/controler_Login.php" class="form-box animated fadeInUp" method="POST">
        <input type="text" placeholder="accion" name="accion" value="1" hidden>
        <h1 class="form-title"> CRM CLARO</h1>
        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="Ingresa email"
            required>
        <input type="password" class="form-control" id="password" name="clave" placeholder="Ingresa clave" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <img class="logo-claro-blanco" src="img/pngjoy.com_claro-claro-2017-hd-png-download_16664425.png" alt="">
</body>

</html>