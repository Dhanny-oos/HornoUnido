<link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">

<?php

$server = "localhost";
$usuario = "root";
$pass = "romanceshameless";
$bd = "h_u";

$conexion = mysqli_connect($server, $usuario, $pass, $bd)
    or die("Error en la conexion");

$nombre = $_POST["nombre"];
$nombre_usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$contrasena = $_POST["contrasena"];
$confirm_contrasena = $_POST["confirmar_contrasena"];


if($contrasena == $confirm_contrasena) {
    $contrasena = hash('sha512', $contrasena);

    $insertar = "INSERT INTO usuarios (nombre, usuario, correo, direccion, contraseña)
        values ('$nombre', '$nombre_usuario', '$correo', '$direccion', '$contrasena')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo)) {
        echo '
            <script>
                alert("Este correo ya ha sido registrado");
                window.location = "registrar.php"
            </script>
        ';
        exit();
    }

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya ha sido registrado");
                window.location = "registrar.php"
            </script>
        ';
        exit();
    }

    $resultado = mysqli_query($conexion, $insertar);
        
    echo '
        <script>
            alert("Datos insertados correctamente");
            window.location = "index.php"
        </script>
        ';
} else {
    // Manejar el caso en que las contraseñas no coincidan
    echo '
    <script>
        alert("Datos no insertados correctamente");
        window.location = "registrar.php"
    </script>
    ';
}
mysqli_close($conexion);

?>

<link rel="stylesheet" href="public/js/bootstrap.min.js">