<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    echo '<script>
        alert("Por favor debes iniciar sesión");
        window.location = "inicio_sesion.php";
    </script>';

    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="public/css/styles/principal.css">
    <link rel="stylesheet" href="public/css/styles/btn_iracomprar.css">
    <title>Principal</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#Inicio" id="logo"><img src="public/img/HornoUnido.png" alt=""
                        style="width: 70px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <a class="btn btn-outline-danger d-flex" href="cerrar_sesion.php"
                            style="margin-right: 20px;">Cerrar sesión</a>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container"><br><br><br>
            <h1 class="my-5">Ventas</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Venta</th>
                        <th scope="col">Total</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('include/dbconn.php');

                    $database = new Connection();
                    $db = $database->open();
                    try {
                        $sql = 'SELECT * FROM ventas';
                        foreach ($db->query($sql) as $row) { ?>
                            <tr>
                                <td>
                                    <?php echo $row['id_venta'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombre'] ?>
                                </td>
                                <td>
                                    <?php echo $row['domicilio'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cantidad'] ?>
                                </td>
                                <td>
                                    <?php echo $row['venta'] ?>
                                </td>
                                <td>
                                    <?php echo '$'.$row['total'] ?>
                                </td>
                                <td>
                                    <?php echo $row['fecha'] ?>
                                </td>
                                <td>
                                    <?php echo $row['estado'] ?>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editarModal_<?php echo $row['id_venta'] ?>">
                                        Editar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editarModal_<?php echo $row['id_venta'] ?>"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="edit_venta.php?id=<?php echo $row['id_venta']; ?>"">
                                                        <div class="row form-group">
                                                        <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Id Venta
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="nombre"
                                                                    value="<?php echo $row['id_venta']; ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Nombre
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="nombre"
                                                                    value="<?php echo $row['nombre']; ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Domicilio
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="domicilio"
                                                                    rows="4" value="<?php echo $row['domicilio']; ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Cantidad
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="cantidad"
                                                                    value="<?php echo $row['cantidad']; ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Venta
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="venta"
                                                                    value="<?php echo $row['venta']; ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Total
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="total"
                                                                    value="<?php echo '$'. $row['total']; ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">
                                                                    Estado
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="estado"
                                                                    value="<?php echo $row['estado']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                name="editar">Editar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#eliminarModal_<?php echo $row['id_venta'] ?>">
                                        Terminar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="eliminarModal_<?php echo $row['id_venta'] ?>"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Terminar venta</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action="delete_venta.php?id=<?php echo $row['id_venta']; ?>">
                                                        <div class="row form-group">
                                                            <h2 class="text-center">Terminar venta de
                                                                <?php echo $row['nombre']; ?>
                                                            </h2>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-danger"
                                                                name="eliminar">Terminar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                            <?php
                        }
                    } catch (PDOException $e) {
                        echo "Error en la conexión".$e->getMessage();
                    }
                    $database->close();
                    ?>
                </tbody>
            </table>
        </div>
    </header>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</html>