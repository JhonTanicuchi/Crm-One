<?php
  include_once ("conex.php");
  
  class Registrar{

      function insertarPersona($tipoIdentificacion,$numeroIdentificacion,$nombreCompleato,$email,$direccion,$telefono){
        // $connexion= Connection::conectar();//llamar un metodo estatico      
        $empleadoSql=pg_query(Connection::conectar(), "INSERT INTO informacion_general.persona(
          tipo_identificacion, numero_identificacion, nombre, correo_electronico, direccion, telefono, estado)         
          VALUES ( '$tipoIdentificacion', '$numeroIdentificacion', '$nombreCompleato', '$email', '$direccion', '$telefono', false)"); 
          if($empleado = true){
            header("location:../view/registro-empleados.php"); 
            return $empleadoSql;
          }else{
            header("location:../view/dashboard.php"); 
          }
               
      }


     function insertarEmpleado($numeroIdentificacion, $banco, $sueldo, $cuentaBanco, $tipoCuenta){
      $sql = pg_query(Connection::conectar(),"SELECT id FROM informacion_general.persona WHERE numero_identificacion ='$numeroIdentificacion'");
      $datos=pg_num_rows($sql);
      if($datos>0){
        while($persona=pg_fetch_all($sql)){
          $idPersonaA = $persona[0] ['id'];
          $idPersona = intval($idPersonaA); 
          return pg_query(Connection::conectar(), "INSERT INTO informacion_general.empleado(
            persona_id, banco, sueldo_base, numero_cuenta_bancaria, tipo_cuenta, estado)
            VALUES ( '$idPersona','$banco', '$sueldo', '$cuentaBanco', '$tipoCuenta', false)");
        }  
     }else{
      header("location:../view/login.php");
     }
     
     function insertarUsuario($numeroIdentificacion, $rolUsuario, $email, $clave){
      $sql = pg_query(Connection::conectar(),"SELECT * FROM informacion_general.persona WHERE numero_identificacion ='$numeroIdentificacion'");
      $datos=pg_num_rows($sql);
      if($datos>0){
        while($persona=pg_fetch_all($sql)){
          $nombreCompleto = $persona[3];
          $nombreUsuario=substr("$nombreCompleto", -1,2).substr("$nombreCompleto", -5,6).substr("$nombreCompleto", 6,-5);
          $idPersonaA = $persona[0] ['id'];
          $idPersona = intval($idPersonaA); 
          $sqlEmpleado = pg_query(Connection::conectar(),"SELECT id FROM informacion_general.empleado WHERE persona_id ='$idPersona'");
          while($empleado=pg_fetch_all($sqlEmpleado)){
            $idEmpleado = $empleado[0];
            $idEmpleado = intval($idEmpleado);
            return pg_query(Connection::conectar(), "INSERT INTO administracion.usuario(
              rol_usuario, id_empleado, correo_usuario, clave_usuario, estado, nombre_usuario)
              VALUES ( '$rolUsuario', '$idEmpleado', '$email, '$clave', false, '$nombreUsuario')");
          }
        }
     }else{
      header("location:../view/login.php");
     }
  }
  }
}