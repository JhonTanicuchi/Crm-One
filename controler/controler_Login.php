<?php
require_once '../model/conex.php';
require_once '../model/model_login.php';
//require_once '../Vista/validarcredvista.php';
 
switch ($_POST['accion']){
    case 1:{
        require_once '../view/login.php';
        $correo=$_POST['email']; 
        $clave=$_POST['clave'];

        $obj= new UsuarioLogin();
        $obj->validar($correo,$clave);
       }
}
 ?>