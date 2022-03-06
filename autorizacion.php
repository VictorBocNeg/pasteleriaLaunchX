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
                    <li id="menu-item"><a href="index.php">Inicio</a></li>
                    <li id="menu-item"><a href="formulario.php">Realizar un pedido</a></li>
                    <li id="menu-item"><a href="autorizacion.php">Identifícate</a></li>
                </ul>
            </section>
        </div>
    </header>

    <form id="formularioPastelero" action="">
        <h2 id="preguntaValidacion">¿Eres un pastelero?</h2>
        <a href="pedidos.php"><input class="si" type="button" value="Si" id="formulariovalidacion"></a>
        <a href="index.php"><input class="no" type="button" value="No" id="formulariovalidacion"></a>
    </form>
</body>
</html>