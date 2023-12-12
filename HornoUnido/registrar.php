<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles/btn_registrar.css">
    <link rel="stylesheet" href="public/css/styles/cajas_txt.css">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #b46839a1;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
    <title>Registrar</title>
</head>

<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="image-container">
            <img src="public/img/HornoUnido.png" alt="Imagen de inicio de sesión" style="height: 100px;">
        </div><br>
        <div class="card p-4 text-light mb-5">
            <div class="card-header">
                <h3>Registrate</h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="registro.php" method="POST">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="wave-group">
                                <input required="" type="text" class="input" name="nombre">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">Nombre</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="wave-group">
                                <input required="" type="text" class="input" name="usuario">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">Usuario</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="wave-group">
                                <input required="" type="email" class="input" name="correo">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">Correo</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="wave-group">
                                <input required="" type="text" class="input" name="direccion">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">Dirección</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="wave-group">
                                <input required="" type="password" class="input" name="contrasena">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">Contraseña</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="wave-group">
                                <input required="" type="password" class="input" name="confirmar_contrasena">
                                <span class="bar"></span>
                                <label class="label">
                                    <span class="label-char" style="--index: 0">Confirmar Contraseña</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="text-center">
                            <button type="submit" class="button">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <div class="bs-light">¿Ya eres usuario?, <a href="inicio_sesion.php">Inicia sesión</a></div>
                </div><br>
                <div class="d-flex justify-content-center">
                    <div class="text-primary"><a href="principal.php" style="text-decoration: none; color: white;">Atrás</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
