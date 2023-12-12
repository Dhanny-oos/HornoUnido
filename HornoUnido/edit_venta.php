<?php
session_start();
include_once('include/dbconn.php');

if (isset($_POST['editar'])) {
    $database = new Connection();
    $db = $database->open();

    try {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];

        // Construir la consulta SQL utilizando sentencias preparadas
        $sql_update = "UPDATE ventas 
                       SET estado = ?
                       WHERE id_venta = ?";

        $stmt_update = $db->prepare($sql_update);
        $stmt_update->execute([$estado, $id]);
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al actualizar: ' . $e->getMessage();
    }

    $database->close();
} else {
    $_SESSION['message'] = 'Ingrese los datos del equipo a actualizar';
}

// Redirigir siempre después de procesar la solicitud
header('location: principal_admin.php');
?>
