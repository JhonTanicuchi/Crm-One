<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM CLARO</title>
    <link rel="stylesheet" href="../view/css/style-login.css">
    <link rel="shortcut icon" href="img/20210319164721.png" type="image/x-icon">


    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/35db202371.js"></script>
    <link rel="shortcut icon" href="/img/pngjoy.com_claro-claro-2017-hd-png-download_16664425.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>

<body>
    <img class="logo-claro" src="img/pngfind.com-logo-claro-png-3822306 (1).png" alt="">
    <form action="../controler/controler_Login.php" class="form-box animated fadeInUp needs-validation" method="POST" novalidate>

        <input type="text" placeholder="accion" name="accion" value="1" hidden>
        <h1 class="form-title"> CRM CLARO</h1>

        <div>
            <input type="email" class="form-control" id="validationCustom02" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" placeholder="Ingresa email" required/>
            <div style="color: black !important; font-size: 16px;" class="invalid-feedback">
                Ingresa un formato correcto de correo: ejemplo@ejemplo.com
            </div>
        </div>

        <div>
            <input type="password" class="form-control" id="password" name="clave" autocomplete="off" required placeholder="Ingresa clave"/>
            <div style="color: black !important; font-size: 16px;" class="invalid-feedback">
            La contraseña debe contener 8 o más caracteres de al menos un número y una letra mayúscula y minúscula
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
    </form>
    <img class="logo-claro-blanco" src="img/pngjoy.com_claro-claro-2017-hd-png-download_16664425.png" alt="">


</body>


<script src="../view/js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>