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
            header("location:../view/registro-persona.php"); 
          }
               
      }


     function insertarEmpleado($numeroIdentificacion, $banco, $sueldo, $cuentaBanco, $tipoCuenta){
      $sql = pg_query(Connection::conectar(),"SELECT id FROM informacion_general.persona WHERE numero_identificacion ='$numeroIdentificacion'");
      $datos=pg_num_rows($sql);
      if($datos>0){
        while($persona=pg_fetch_all($sql)){
          $idPersonaA = $persona[0] ['id'];
          $idPersona = intval($idPersonaA); 
          header("location:../view/registro-usuario.php"); 
          return pg_query(Connection::conectar(), "INSERT INTO informacion_general.empleado(
            persona_id, banco, sueldo_base, numero_cuenta_bancaria, tipo_cuenta, estado)
            VALUES ( '$idPersona','$banco', '$sueldo', '$cuentaBanco', '$tipoCuenta', false)");
        }  
     }else{
      header("location:../view/registro-empleados.php");
     }
    }
     
     function insertarUsuario($numeroIdentificacion, $rolUsuario){
      $sqlEmpleado = pg_query(Connection::conectar(),"SELECT 
      em.id,
      pe.correo_electronico,
      pe.numero_identificacion from informacion_general.empleado em
      Join informacion_general.persona pe on pe.id = em.persona_id where pe.numero_identificacion = '$numeroIdentificacion'");
      $datos=pg_num_rows($sqlEmpleado);
      if($datos>0){
        $countUsuarioId = pg_query(Connection::conectar(),"Select count(id_usuario) from administracion.usuario");
        $idUsuarioD=pg_fetch_array($countUsuarioId);
        while($empleado=pg_fetch_array($sqlEmpleado)){
          $idEmpleadoA = $empleado[0];
          $idEmpleado = intval($idEmpleadoA); 
          $email = $empleado[1];
          $clave = $empleado[2];
          $idUsuarioA = intval($idUsuarioD[0])+1;
          header("location:../view/dashboard.php");
          return pg_query(Connection::conectar(),"INSERT INTO administracion.usuario(
            id_usuario, rol_usuario, id_empleado, correo_usuario, clave_usuario, estado)
            VALUES ('$idUsuarioA', '$rolUsuario', '$idEmpleado','$email', '$clave', false)");   
        }
     }else{
      echo ('no funciona la wea');
  }
  

 } 
}