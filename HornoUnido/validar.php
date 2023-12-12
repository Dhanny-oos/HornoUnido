<?php
$nombre_usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$contrasena = hash('sha512', $contrasena);
session_start();
$_SESSION["usuario"] = $nombre_usuario;

$server = "localhost";
$usuario = "root";
$pass = "romanceshameless";
$bd = "h_u";

$conexion = mysqli_connect($server, $usuario, $pass, $bd)
    or die ("Error en la conexion");

$consulta = "SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?";
$statement = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($statement, "ss", $nombre_usuario, $contrasena);
mysqli_stmt_execute($statement);

$resultado = mysqli_stmt_get_result($statement);
$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    $_SESSION['nombre'] = $nombre;
    $nombre_usuario = mysqli_fetch_assoc($resultado);

    if ($nombre_usuario['usuario'] == 'admin') {
        header("location: principal_admin.php");
    } else {
        header("location: principal.php");
    }
} else {
    echo '
        <script>
            alert("Usuario y contraseña no existen, intente de nuevo");
            window.location = "inicio_sesion.php"
        </script>
    ';
}

mysqli_stmt_close($statement);
mysqli_close($conexion);
?>
