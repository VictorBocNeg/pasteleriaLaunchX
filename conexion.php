<?php 

$conexion = mysqli_connect('localhost', 'root','','pasteleria')or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    ////Definimos las variables para generar la consulta que se mandará a la base de datos.
        //El nombre del cliente
    $nombre = $_POST['nombre'];
        //El teléfono del cliente
    $telefono = $_POST['telefono'];
        //El correo electrónico del cliente
    $correo = $_POST['email'];
        //Generamos la descripción del pastel a partir de una serie de validaciones hecha a los datos que trajo consigo el formulario
    $descripcionPastel = "Pastel de sabor(es): ";

    if(isset($_POST['Cheesecake']) == true and $_POST['Cheesecake'] == 'cheesecake'){
        $descripcionPastel = $descripcionPastel."Cheesecake, ";
    }
    if(isset($_POST['Guayaba']) == true and $_POST['Guayaba'] == 'guayaba'){
        $descripcionPastel = $descripcionPastel."Guayaba, ";
    }
    if(isset($_POST['Pinia']) == true and $_POST['Pinia'] == 'pinia'){
        $descripcionPastel = $descripcionPastel."Piña, ";
    }
    if(isset($_POST['Fresa']) == true and $_POST['Fresa'] == 'fresa'){
        $descripcionPastel = $descripcionPastel."Fresa, ";
    }
    if(isset($_POST['Chocolate']) == true and $_POST['Chocolate'] == 'chocolate'){
        $descripcionPastel = $descripcionPastel."Chocolate, ";
    }

    switch($_POST['Decoracion']){
        case 'flores':
            $descripcionPastel = $descripcionPastel."con decoración temática de flores.";
        break;
        
        case 'cumpleanios':
            $descripcionPastel = $descripcionPastel."con decoración temática de fiesta de cumpleaños";
        break;

        case 'aniversario':
            $descripcionPastel = $descripcionPastel."con decoración temática para fiesta de aniversario con esa persona especial";
    }

    //Ahora si, generaremos la consulta para mandarla a la DB

    $consulta = "INSERT INTO pedidos(nombreCliente,telefonoCliente,correoCliente,descripcionPedido) VALUES ('$nombre','$telefono','$correo','$descripcionPastel')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);

}

//mandamos al usuario de vuelta al sitio

require('gracias.php');

?>