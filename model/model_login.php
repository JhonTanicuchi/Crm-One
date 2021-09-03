<?php
  include_once ("conex.php");
  
  class UsuarioLogin{
   
    function validar($correo,$clave){
        $resultado = pg_query(Connection::conectar(), "select nombre_usuario from administracion.usuario where correo_usuario='$correo' and clave_usuario='$clave'");
        //return $resultado;
        $datos=pg_num_rows($resultado);
       // $usuario=pg_fetch_all($resultado);
        //print ($usuario[0] ['nombre_persona']);
        if ($datos>0){
          $usuario=pg_fetch_all($resultado);
         // $usuario[0] ['nombre_persona']
         session_start();
          $_SESSION['usuario'] = $usuario[0];
         header("location:../view/dashboard.php?usuario=".$usuario[0] ['nombre_usuario']);
        
        
        }else
        header("location:../view/login.php");
        pg_free_result($resultado); 
     }
 }
 ?>