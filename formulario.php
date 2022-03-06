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

    <section id="formulario">
        <h1>Por favor, dinos quién eres y qué tan deliciosa será tu experiencia que deseas hoy</h1>
        <form action="conexion.php" method="post">
            <h3>Aquí van tus datos</h3>
            <p>Nombre</p>
            <input type="text" name="nombre">
            <p>Teléfono de contacto</p>
            <input type="text" name="telefono">
            <p>correo electrónico</p>
            <input type="email" name="email">
            <h3>Ahora dinos el sabor y tipo de decoración de tu pastel</h3>
            <p>Sabor(es)</p>
            <div id="sabores">
                <input type="checkbox" id="cheesecake" value="cheesecake" name="Cheesecake">
                <label for="cheesecake">Cheesecake</label>
            </div>
            <div id="sabores">
                <input type="checkbox" id="guayaba" value="guayaba" name="Guayaba">
                <label for="guayaba">Guayaba</label>
            </div>
            <div id="sabores">
                <input type="checkbox" id="pinia" value="pinia" name="Pinia">
                <label for="pinia">Piña</label>
            </div>
            <div id="sabores">
                <input type="checkbox" id="fresa" value="fresa" name="Fresa">
                <label for="fresa">Fresa</label>
            </div>
            <div id="sabores">
                <input type="checkbox" id="chocolate" value="chocolate" name="Chocolate">
                <label for="chocolate">Chocolate</label>
            </div>
            <p>Decoraciones</p>
            <div id="decoraciones">
                <input type="radio" id="flores" value="flores" name="Decoracion">
                <label for="flores">Diseño de flores</label>
            </div>
            <div id="decoraciones">
                <input type="radio" id="cumpelanios" value="cumpelanios" name="Decoracion">
                <label for="cumpelanios">Decoración genérica para cumpleaños</label>
            </div>
            <div id="decoraciones">
                <input type="radio" id="aniversario" value="aniversario" name="Decoracion">
                <label for="aniversario">Decoración genérica para aniversarios</label>
            </div>
            <br>
            <button id="pedir" type="submit" name="enviar">Realizar pedido</button>
        </form>
    </section>
    
</body>
</html>