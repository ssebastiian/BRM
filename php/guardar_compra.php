<?php
 include 'servidor.php'; 

 if ($mysqli->connect_errno){
     echo "no se conecto";
     exit;
 }
 else{
       $id_pro =$_GET['variable'];

     $sql="UPDATE tbl_producto SET P_VENTA='VENDIDO' WHERE ID_PRODUCTO='$id_pro'";

     $mysqli->query($sql);
     echo '<script> alert("Compra Exitosa.");</script>';
     echo '<script> window.location="compra.php"; </script>';

 }
 $mysqli->close();

?>