<?php include './servidor.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"> 
    <title>Document</title>
</head>
<body">
    <div class="container2">
        <div class="container-form">
            <h1> Tienda </h1>
            <a href="../index.php" id ="show-modal">Regresar </a>
            

                <!-- tabla de productos disponibles   -->

            <div id="main-container">
            <h1> Productos Disponibles  </h1>
                <table id="tabla">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Lote</th>
                            <th>fecha vencimiento</th>
                            <th>precio</th>
                            <th>Compra</th>
                        </tr>
                    </thead>
                        <?php                 
                        $sql = @mysqli_query($mysqli,"SELECT * FROM TBL_PRODUCTO WHERE P_VENTA='DISPO'");
                        while ($row = @mysqli_fetch_array($sql))
                        {
                        $ID_PRO= $row['ID_PRODUCTO'];
                        $PRODUCTO= $row['P_PRODUCTO'];
                        $CANTIDAD= $row['P_CANTIDAD'];
                        $LOTE= $row['P_LOTE'];
                        $FECHA= $row['P_FECHA'];
                        $PRECIO= $row['P_PRECIO'];                              
                        ?>
                    <tr>
                        <td ><?php echo $PRODUCTO;?></td>
                        <td ><?php echo $CANTIDAD;?></td>
                        <td ><?php echo $LOTE;?></td>
                        <td ><?php echo $FECHA;?></td>
                        <td ><?php echo $PRECIO;?></td>
                        <td ><a href="guardar_compra.php?variable=<?php ECHO $ID_PRO;?>">comprar</a></td>
                        
                    </tr>
                    <?php  } ?>
                </table>        
            </div>

                <!-- tabla de compras   -->

                <div id="main-container">
            <h1> Productos Comprados </h1>
                <table id="tabla">
                    <thead>
                        <tr>
                            <th>Producto</th>                    
                            <th>fecha vencimiento</th>
                            <th>precio</th>
                            <th>Compra</th>
                        </tr>
                    </thead>
                        <?php
                                        
                        $sql = @mysqli_query($mysqli,"SELECT * FROM TBL_PRODUCTO WHERE P_VENTA='VENDIDO'");
                        while ($row = @mysqli_fetch_array($sql))
                        {
                        
                        $ID_PRO= $row['ID_PRODUCTO'];
                        $PRODUCTO= $row['P_PRODUCTO'];
                        $CANTIDAD= $row['P_CANTIDAD'];
                        $LOTE= $row['P_LOTE'];
                        $FECHA= $row['P_FECHA'];
                        $PRECIO= $row['P_PRECIO'];                              
                        ?>
                    <tr>
                        <td ><?php echo $PRODUCTO;?></td>
                        <td ><?php echo $FECHA;?></td>
                        <td ><?php echo $PRECIO;?></td>
                        <td ><a href="guardar_eliminar.php?variable=<?php ECHO $ID_PRO;?>">Cancelar</a></td>
                        
                    </tr>
                    <?php  } ?>            
                </table>  
                <?php 
                            $sql = @mysqli_query($mysqli,"SELECT SUM(P_PRECIO) AS TOTAL FROM TBL_PRODUCTO WHERE P_VENTA='VENDIDO'");
                            $row = @mysqli_fetch_array($sql);
                            $TOTAL= $row['TOTAL']; 
                            
                        ?> 
                        <h1>EL VALOR DE SU COMPRA: </h1><input type="text" value="<?php ECHO $TOTAL= $row['TOTAL']; ?>"><br>    

            </div>
        </div>
    </div>
</body>
</html>
