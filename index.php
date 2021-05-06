<?php include './php/servidor.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>BRM</title>
</head>
<body">
    <div class="container">
        <div class="container-form">
            <h1> Tienda </h1>
            <a href="#modal" id ="show-modal">Incluir inventario</a>
            <a href="./php/compra.php" id ="show-modal">Compra</a>

            <aside id="modal" class="modal">
                <div class="content-modal">
                    <header>
                        <a href="#" class="close-modal">x</a>
                        <h2>Formulario De Entrega</h2>
                    </header>
                    <article>
                    <form action="./php/guardar.php" method="post">
                    <div class="col-md-12 col-lg-12 col-xs-12 form-group has-feedback" >
                    <div class="col-md-4 col-lg-4 col-xs-4 form-group has-feedback" >
                            <strong class="control-label">Producto</strong><br>
                                <select  required class="form-control custom-select" name="P_PRODUCTO"  data-placeholder="Tema" tabindex="1">
                                    <option value=>Seleccione...</option>
                                    <option value="Arroz">Arroz</option>
                                    <option value="Aceite">Aceite</option>                            
                                    <option value="Azucar">Azucar</option>
                                    <option value="Cafe">Cafe</option>
                                    <option value="Pan">Pan</option>
                                </select>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4 form-group has-feedback" >
                            <strong class="control-label">Cantidad</strong><br>
                                <select  required class="form-control custom-select" name="P_CANTIDAD"  data-placeholder="Tema" tabindex="1">
                                    <option value=>Seleccione...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4 form-group has-feedback" ><br>
                        <strong class="control-label">Lote</strong><br>                                 
                            <input required type="text" placeholder="Lote" name="P_LOTE"  class="form-control">
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4 form-group has-feedback" ><br>
                        <strong class="control-label">Fecha Vencimiento</strong><br>                                
                            <input required type="date" name="P_FECHA"  class="form-control">
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4 form-group has-feedback" ><br>
                        <strong class="control-label">Precio</strong><br>                                 
                            <input required type="text" placeholder="Precio" name="P_PRECIO"  class="form-control">
                    </div>    

            <button type="submit">guardar</button>
            
            </form>
        </div>
                    </article>    
                </div>
                <a href="#" class="btn-close-modal"></a>
            </aside>    
            

            <!-- tabla del invetario   -->

            <div id="main-container">
            <h1> Inventario de los productos  </h1>
                <table id="tabla">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Lote</th>
                            <th>fecha vencimiento</th>
                            <th>precio</th>
                        </tr>
                    </thead>
                        <?php                 
                        $sql = @mysqli_query($mysqli,"SELECT * FROM TBL_PRODUCTO");
                        while ($row = @mysqli_fetch_array($sql))
                        {
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
                    </tr>
                    <?php  } ?>
                </table>        
            </div>
        </div>
    </div>
</body>
</html>