<?php

    #Creamos la conexión a la base de datos
    $conexion = mysqli_connect('localhost','root','','pasteleria')

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>

</head>
<body>
    <header>
        <div class="cabecera">
            <section class="logo" >
                <a href="index.php">
                    <img id="encabezado" src="img/LogoPastelitos.png">
                </a>
                <div id="nombre">
                    <h1>Pastelería LaunchX</h1>
                    <h2>¡Nuestors pasteles te llevarán al espacio y más allá!</h2>
                </div>
            </section>
            <section>
                <ul id="menu">
                    <li id="menu-item"><a href="pedidos.php">Pedidos</a></li>
                    <li id="menu-item"><a href="almacen.php">Almacén</a></li>
                    <li id="menu-item"><a href="index.php">Cerrar sesión</a></li>
                </ul>
            </section>
        </div>
    </header>
    <h1 class="textoAlmacen">Aquí podrás visualizar cuántos insumos de sabores y decoraciones quedan en el almacén.</h1>
    <!--Comenzamos con la primera de las dos tablas que aparecerán en esta vista que será la de sabores-->
    <div id = "main-container" class="tablitas">
        <table>
            <thead>
                <tr>
                    <th>ID del sabor</th>
                    <th>Nombre del sabor</th>
                    <th>Costo del sabor</th>
                    <th>Existencias del sabor</th>
                </tr>
            </thead>
            <?php 
            
            #traemos los registros de la tabla mediante una consulta usando la función mysqli_query
            $sql = "SELECT * FROM sabores";
            $result = mysqli_query($conexion,$sql);
            #Llenamos la tabla mediante un bucle while
            while($mostrar = mysqli_fetch_array($result)){
            ?>
            <tr>
                <!--aquí uso al mismo tiempo php y html para poder generar la tabla de manera dinámica-->
                <td><?php echo $mostrar['idSabor']?></td>
                <td><?php echo $mostrar['nombreSabor']?></td>
                <td><?php echo $mostrar['costoSabor']?></td>
                <td><?php echo $mostrar['existSabor']?></td>
            </tr>
            <?php
            
            }

            ?>
        </table>
    </div>
    <div id = "main-container" class ="tablitas">
        <table>
            <thead>
                <tr>
                    <th>ID del adorno</th>
                    <th>Nombre del adorno</th>
                    <th>Costo del adorno</th>
                    <th>Existencia del adorno</th>
                </tr>
            </thead>
            
            <?php 
            
            $sql="SELECT * FROM adornos";
            $result = mysqli_query($conexion,$sql);
            while($mostrar = mysqli_fetch_array($result)){
            
            ?>

            <tr>
                <td><?php echo $mostrar['idAdorno']?></td>
                <td><?php echo $mostrar['nombreAdorno']?></td>
                <td><?php echo $mostrar['costoAdorno']?></td>
                <td><?php echo $mostrar['existenciaAdorno']?></td>
            </tr>

            <?php 
            
        }
            
            ?>
        </table>
    </div>
</body>
</html>