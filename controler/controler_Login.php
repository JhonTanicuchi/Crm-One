<?php
require_once '../model/conex.php';
require_once '../model/model_login.php';
//require_once '../Vista/validarcredvista.php';
 
switch ($_POST['accion']){
    case 1:{
        $correo=$_POST['email']; 
        $clave=$_POST['clave'];

        $obj= new UsuarioLogin();
        $obj->validar($correo,$clave);
       }
}
 ?>