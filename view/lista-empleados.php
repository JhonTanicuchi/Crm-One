<?php
    include('../model/model_login.php');
    session_start();
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion = ""){
        header("location:../login.php");
        die();
    }
?>

<?php
	include_once '../model/conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM clientes ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM clientes WHERE nombre LIKE :campo OR apellidos LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM CLARO</title>
    <link rel="stylesheet" href="css/style-template.css">
    <link rel="stylesheet" href="css/style.css">
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
                <div class="row">
                    <div class="row g-3 needs-validation mx-auto p-5">
                        <div class="barra__buscador">
                            <form action="" class="formulario" method="post">
                                <input type="text" name="buscar" placeholder="buscar nombre o apellidos"
                                    value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
                                <input type="submit" class="btn" name="btn_buscar" value="Buscar">
                                <a href="insert.php" class="btn btn__nuevo">Nuevo</a>
                            </form>
                        </div>
                        <table>
                            <tr class="head">
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Apellidos</td>
                                <td>Teléfono</td>
                                <td>Ciudad</td>
                                <td>Correo</td>
                                <td colspan="2">Acción</td>
                            </tr>
                            <?php foreach($resultado as $fila):?>
                            <tr>
                                <td><?php echo $fila['id']; ?></td>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td><?php echo $fila['apellidos']; ?></td>
                                <td><?php echo $fila['telefono']; ?></td>
                                <td><?php echo $fila['ciudad']; ?></td>
                                <td><?php echo $fila['correo']; ?></td>
                                <td><a href="update.php?id=<?php echo $fila['id']; ?>" class="btn__update">Editar</a>
                                </td>
                                <td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
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