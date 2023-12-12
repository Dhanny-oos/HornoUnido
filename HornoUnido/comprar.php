<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Por favor debes iniciar sesión");
        window.location = "inicio_sesion.php"
    </script>
    ';

    session_destroy();
    die();
}

$server = "localhost";
$usuario = "root";
$pass = "romanceshameless";
$bd = "h_u";

$conexion = mysqli_connect($server, $usuario, $pass, $bd)
    or die("Error en la conexión");

$usuario_actual = $_SESSION['usuario'];

$consulta_usuario = "SELECT nombre, usuario, direccion FROM usuarios WHERE usuario = '$usuario_actual'";
$resultado_usuario = mysqli_query($conexion, $consulta_usuario);

if($resultado_usuario && mysqli_num_rows($resultado_usuario) > 0) {
    $datos_usuario = mysqli_fetch_assoc($resultado_usuario);
    $nombre_usuario = $datos_usuario['nombre'];
    $usuario_usuario = $datos_usuario['usuario'];
    $direccion_usuario = $datos_usuario['direccion'];
} else {
    // Manejar el caso en que no se encuentren los datos del usuario
    echo "Error al obtener los datos del usuario";
    die();
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles/principal.css">
    <link rel="stylesheet" href="public/css/styles/btn_iracomprar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            padding-top: 56px;
            /* Altura de la barra de navegación */
        }

        header {
            background-color: #f8f9fa;
            /* Fondo del encabezado */
        }

        footer {
            padding: 40px 0;
        }
    </style>
    <title>Document</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="#Funcionamiento">¿Cómo funciona?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comprar.php">Comprar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <a class="btn btn-outline-danger d-flex" href="cerrar_sesion.php"
                            style="margin-right: 20px;">Cerrar
                            sesión</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5"><br><br>
        <h1>Realizar pedido</h1><br>
        <form class="row g-3" action="insertar_venta.php" method="POST">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre_usuario; ?>"
                    readonly>
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario"
                    value="<?php echo $usuario_usuario; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="inputAddress" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio"
                    value="<?php echo $direccion_usuario; ?>" readonly>
            </div>
            <div class="col-4">
                <label for="inputAddress2" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad">
            </div>
            <div class="col-4">
                <label for="inputAddress2" class="form-label total">Precio pie de horno</label>
                <input type="text" class="form-control" id="precio" value="$2.50" readonly>
            </div>
            <div class="col-4">
                <label for="inputAddress2" class="form-label total">Precio domicilio</label>
                <input type="text" class="form-control" id="precio" value="$3.75" readonly>
            </div>
            <div class="col-4">
                <label for="inputAddress2" class="form-label total">Total</label>
                <input type="text" class="form-control" id="total" name="total" value="" readonly>
            </div>
            <div class="form-check col-12">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                    value="Pie de horno">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pie de horno
                </label>
            </div>
            <div class="form-check col-12">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                    value="Domicilio">
                <label class="form-check-label" for="flexRadioDefault2">
                    Domicilio
                </label>
            </div>
            <input type="hidden" id="opcionSeleccionada" name="opcionSeleccionada">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#confirmarModal">Comprar</button>
            </div>
            <div class="modal fade" id="confirmarModal" tabindex="-1" aria-labelledby="confirmarCompraModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmarModalLabel">Confirmar Compra</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas realizar la compra?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" name="confirmar" class="btn btn-primary" id="btnConfirmarCompra">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <br><br><br>
    <footer id="acerca_de" class="bg-dark text-light p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><br>
                    <h3>Contáctanos</h3>
                    <p>¡Estamos aquí para ayudarte! Puedes contactarnos a través de WhatsApp o en nuestras redes
                        sociales.</p>
                    <p><strong>Dirección:</strong> Tacubaya 133, Centro, 36970 Abasolo, Gto</p>
                    <p><strong>Horario de Atención:</strong></p>
                    <p>Lunes a Sábado: 9:40 AM - 8:30 PM</p>
                    <p>Domingos: 10:00 AM - 5:00 PM</p>
                </div>
                <div class="col-md-6"><br>
                    <h4>Redes Sociales</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/hornounido" target="_blank"><i
                                    class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="https://www.twitter.com/hornounido" target="_blank"><i class="fab fa-twitter"></i>
                                Twitter</a></li>
                        <li><a href="https://www.instagram.com/hornounido" target="_blank"><i
                                    class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                    <h4>WhatsApp</h4>
                    <p>Puedes contactarnos a través de WhatsApp en el siguiente número:</p>
                    <p><a href="https://wa.me/4291514221" target="_blank"><i class="fab fa-whatsapp"></i> Enviar mensaje
                            por WhatsApp</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Evento que se dispara cuando se cambia la opción de envío
            $("input[name='flexRadioDefault']").change(function () {
                // Obtener el valor de la opción seleccionada y asignarlo al campo oculto
                var opcionSeleccionada = $("input[name='flexRadioDefault']:checked").val();
                $("#opcionSeleccionada").val(opcionSeleccionada);
                actualizarTotal();
            });

            // Evento que se dispara al hacer clic en el botón "Comprar"
            $("#btnComprar").click(function () {
                // Mostrar el modal de confirmación
                $("#confirmarModal").modal("show");
            });

            // Evento que se dispara cuando se hace clic en el botón "Confirmar Compra" en el modal
            $("#btnConfirmarCompra").click(function () {
                // Aquí puedes realizar cualquier acción adicional antes de enviar el formulario
                // Por ejemplo, podrías enviar el formulario mediante JavaScript o realizar otras operaciones.

                // Luego, cierra el modal
                $("#confirmarModal").modal("hide");

                // Ahora, puedes enviar el formulario, si es necesario
                $("#formCompra").submit();
            });

            // Evento que se dispara cuando se cierra el modal sin confirmar la compra
            $("#confirmarModal").on("hidden.bs.modal", function () {
                // Puedes agregar lógica adicional si es necesario al cerrar el modal sin confirmar
            });

            function actualizarTotal() {
                // Obtener el valor de la cantidad y el precio por pieza
                var cantidad = $("#cantidad").val();
                var precioPorPieza = 2.50; // Precio por pieza por defecto (puede ajustarse según necesidades)
                var costoDomicilio = 3.75; // Costo adicional por domicilio (puede ajustarse según necesidades)

                // Verificar la opción seleccionada y actualizar el precio
                if ($("#flexRadioDefault2").is(":checked")) {
                    precioPorPieza = costoDomicilio;
                }

                // Calcular el total
                var total = cantidad * precioPorPieza;

                // Mostrar el total en el campo correspondiente
                $("#total").val("$" + total.toFixed(2));
            }
        });
    </script>


</body>

</html>