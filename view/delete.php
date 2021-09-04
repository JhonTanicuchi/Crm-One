<?php 

include_once '../model/conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM clientes WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location:lista-empleados.php');
	}else{
		header('Location: login.php');
	}
 ?>