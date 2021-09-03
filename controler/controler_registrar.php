<?php
require_once '../model/conex.php';
require_once '../model/model_registrar.php';
//require_once '../Vista/validarcredvista.php';

switch ($_POST['accion']){
    case 1:{
        require_once '../view/registro-persona.php';
        // persona datos
        $tipoIdentificacion = $_POST['tipoIdentificacion'];
        $numeroIdentificacion = $_POST['numeroIdentificacion'];
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $apellido1 = $_POST['nombre2'];
        $apellido2 = $_POST['apellido2'];
        $nombreCompleato = strtoupper($nombre1).''.strtoupper($nombre2).''.strtoupper($apellido1).''.strtoupper($apellido2);
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $obj= new Registrar();
        $obj->insertarPersona($tipoIdentificacion,$numeroIdentificacion,$nombreCompleato,$email,$direccion,$telefono);
    } break;

    case 2:{
        require_once '../view/registro-empleados.php';
         // empleado datos
         $numeroIdentificacion = $_POST['numeroIdentificacion'];
         $banco = $_POST['banco'];
         $sueldo = $_POST['sueldo'];
         $cuentaBanco = $_POST['cuentaBanco'];
         $tipoCuenta = $_POST['tipoCuenta'];
         $obj= new Registrar();
         $obj->insertarEmpleado($numeroIdentificacion, $banco, $sueldo, $cuentaBanco, $tipoCuenta);

    }break;

    case 3:{
        require_once '../view/registro-Usuario.php';
        $numeroIdentificacion = $_POST['numeroIdentificacion'];
        //  usuario datos
        $clave = $numeroIdentificacion;
        $rolUsuario = $_POST['rolUsuario'];     
        $obj= new Registrar();
        $obj->insertarUsuario($numeroIdentificacion, $rolUsuario, $email, $clave);

    }break;
}
?>