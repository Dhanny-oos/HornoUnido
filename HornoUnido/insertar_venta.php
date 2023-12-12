<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $domicilio = $_POST['domicilio'];
    $cantidad = $_POST['cantidad'];
    $venta = $_POST['opcionSeleccionada']; // Obtener la opción seleccionada
    $total = str_replace("$", "", $_POST['total']);

    // Establecer la conexión a la base de datos
    $server = "localhost";
    $usuario_bd = "root";
    $contrasena_bd = "romanceshameless";
    $bd = "h_u";

    $conexion = mysqli_connect($server, $usuario_bd, $contrasena_bd, $bd);

    // Verificar la conexión
    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Crear la sentencia SQL para la inserción
    $consulta_insertar = "INSERT INTO ventas (nombre, usuario, domicilio, cantidad, venta, total, fecha) 
                         VALUES ('$nombre', '$usuario', '$domicilio', $cantidad, '$venta', $total, NOW())";

    // Ejecutar la sentencia SQL
    $resultado_insertar = mysqli_query($conexion, $consulta_insertar);

    if ($resultado_insertar) {
        echo '
        <script>
            alert("Compra realizada correctamente, en breve nos pondremos en contacto con usted");
            window.location = "comprar.php"
        </script>
        ';
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}

?>
