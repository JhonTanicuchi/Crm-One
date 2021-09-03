<?php
    include('../model/model_login.php');
    session_start();
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion = ""){
        header("location:../login.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM CLARO</title>
    <link rel="stylesheet" href="css/style-template.css">
    <link rel="stylesheet" href="css/style-registro.css">
    <link rel="stylesheet" href="css/style-empleados.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/35db202371.js"></script>
    <link rel="shortcut icon" href="/img/pngjoy.com_claro-claro-2017-hd-png-download_16664425.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>


</head>

<body>
    <div class="contenedor-header">
        <img class="logo-header" src="https://10.57.69.202:12900/oc/bes/sm/login/img/claro_be_ctz.png" alt="">

        <img class="img-perfil" src="" alt="">
    </div>

    <div class="contenedor">
        <div class="contenedor-nav">
            <a href="registro-empleados.php"><i class="fas fa-user-cog"></i></a>
            <a href="lista-usuarios.php"><i class="fas fa-user-shield"></i></a>
        </div>
        <div class="continer-fluid">
            <div class="contenedor-modules">
                <div class="pestañas">
                    <a href="dashboard.php">
                        <div class="pestaña-dashboard p1">
                            <p>Mi Mesa de Trabajo</p>
                        </div>
                    </a>
                    <a href="registro-empleados.php">
                        <div class="pestaña-dashboard p2 active">
                            <p>Registro de Empleados</p>
                        </div>
                    </a>
                    <a href="lista-empleados.php">
                        <div class="pestaña-dashboard p3">
                            <p>Lista Empleados</p>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <form class="row g-3 needs-validation mx-auto p-5" action="../controler/controler_registrar.php"
                        method="POST" novalidate>
                        <h1 class="title-form">Datos Usuario</h1>
                        <input type="text" name="accion" value="3" hidden>
                        <div class="col-md-2">
                            <label for="validationCustom01" class="form-label">Número de identificación</label>
                            <input type="text" class="form-control" name="numeroIdentificacion" autocomplete="off"
                                required />
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label">Rol</label>
                            <select class="form-select" id="validationCustom04" name="rolUsuario" required>
                                <option selected disabled value="">...</option>
                                <option value="1">Admin</option>
                                <option value="2">Venta</option>
                                <option value="3">Compra</option>
                            </select>
                            <div class="invalid-feedback">Selecciona una opción.</div>
                        </div>
                        <div class="col-12 text-center p-3">
                            <button class="btn btn-primary" type="submit">Registrar Usuario</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="js/validation.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>

</html>