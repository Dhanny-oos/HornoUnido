<?php
include('include/dbconn.php');

if(isset($_POST['eliminar'])){
    $id_venta = $_GET['id'];

    // Realiza la eliminación en la base de datos
    $database = new Connection();
    $db = $database->open();
    
    try {
        $sql = "DELETE FROM ventas WHERE id_venta = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id_venta, PDO::PARAM_INT);
        $stmt->execute();

        echo '<script>
                alert("Venta terminada correctamente");
                window.location = "principal_admin.php";
            </script>';
    } catch (PDOException $e) {
        echo "Error al eliminar la venta: " . $e->getMessage();
    }

    $database->close();
}
?>
