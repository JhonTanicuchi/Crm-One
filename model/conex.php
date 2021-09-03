<?php

 class Connection{
  public static function  conectar()
  {

      try{
          $con = pg_connect("host=localhost port=5432 dbname=Integrador user=postgres password=159854") or die('No se ha podido conectar: '.pg_last_error());
          return $con;
         
      } catch(Exception $e){
          echo $e->getMessage();
         }
  }

}
?>
