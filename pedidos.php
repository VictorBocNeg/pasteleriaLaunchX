<?php 
    #CREAMOS LA CONEXIÓN A LA BASE DE DATOS
    $conexion = mysqli_connect('localhost','root','','pasteleria');

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
                    <img id="encabezado" src="img/LogoPastelitos.png">
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
    <h1 class="tituloPedidos">Aquí podrás visualizar los pedidos que se han realizado</h1>
    
    <!--Aquí obtendremos mediante php los valores de la tabla de pedidos para mostrarlos al pastelero-->

    <div id= "main-container">
    <table>
        <thead>
            <tr>
                <th>ID del pedido</th>
                <th>Nombre del cliente</th>
                <th>Telefono del cliente</th>
                <th>Correo del cliente</th>
                <th>Descripcion del pedido</th>
            </tr>
        </thead>

        <?php 
        #traemos los registros de la tabla mediante una consulta usando la función mysqli_query
        $sql = "SELECT * FROM pedidos";
        $result = mysqli_query($conexion,$sql);
        #Llenamos la tabla mediante un bucle while
        while($mostrar = mysqli_fetch_array($result)){        
        ?>

        <tr>
            <!-- aquí uso al mismo tiempo php y html para poder ir generando dinámicamente la tabla a medida que se traen registros de la base de datos -->
            <td><?php echo $mostrar['idPedido'] ?></td>
            <td><?php echo $mostrar['nombreCliente'] ?></td>
            <td><?php echo $mostrar['telefonoCliente'] ?></td>
            <td><?php echo $mostrar['correoCliente'] ?></td>
            <td><?php echo $mostrar['descripcionPedido'] ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
    </div>

</body>
</html>