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

        <div class="contenedor-modules">
            <div class="contenedor-modules">
                <div class="pestañas">
                    <a href="dashboard.php">
                        <div class="pestaña-dashboard p1">
                            <p>Mi Mesa de Trabajo</p>
                        </div>
                    </a>
                </div>
                <div class="contenido-mesa">
                    <div class="contenido-perfil">
                        <div class="img-claro-perfil"></div>
                        <div class="container-img-perfil-mesa">
                            <div class="img-perfil-mesa"></div>
                        </div>
                        <div>

                            <p>ADMINISTRADOR<span></span></p>
                        </div>
                    </div>

                    <div class="title-modulos">
                        <span>Mis Modulos</span>
                    </div>

                    <div class="contenido-modulos">
                        <a href="registro-empleados.php" style="text-decoration: none; color: black;">
                            <div class="card-grid">
                                <div class="cont-grid">
                                    <div>
                                        <i class="las fa-user-cog"></i>
                                    </div>
                                    <span>Administración Personas</span>
                                </div>
                            </div>
                        </a>
                        
                        <a href="lista-empleados.php" style="text-decoration: none; color: black;">
                            <div class="card-grid">
                                <div class="cont-grid">
                                    <div>
                                        <i class="las fa-user-shield"></i>
                                    </div>
                                    <span>Lista de Empleados</span>
                                </div>
                            </div>
                        </a>

                        <a href="registro-personas.php" style="text-decoration: none; color: black;">
                            <div class="card-grid">
                                <div class="cont-grid">
                                    <div>
                                        <i class="las fa-user-cog"></i>
                                    </div>
                                    <span>Administración Personas</span>
                                </div>
                            </div>
                        </a>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                    </div>

                    <div class="contenido-modulos">
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                        <div class="card-grid"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

<script src="/js/validation.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>

</html>