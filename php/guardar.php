<?php
 include 'servidor.php'; 

 if ($mysqli->connect_errno){
     echo "no se conecto";
     exit;
 }
 else{

      $producto=$_POST['P_PRODUCTO'];
      $cantidad=$_POST['P_CANTIDAD'];
      $lote=$_POST['P_LOTE'];
      $fecha=$_POST['P_FECHA'];
      $precio=$_POST['P_PRECIO'];

     $sql="INSERT INTO tbl_producto VALUES(NULL,'".$producto."','".$cantidad."','".$lote."','".$fecha."','".$precio."','DISPO')";

     $mysqli->query($sql);
     echo '<script> alert("Registrado Correctamente.");</script>';
     echo '<script> window.location="../index.php"; </script>';

 }
 $mysqli->close();

?>