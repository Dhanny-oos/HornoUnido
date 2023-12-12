<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles/btn_acceder.css">
    <link rel="stylesheet" href="public/css/styles/cajas_txt.css">
    <link rel="stylesheet" href="public/css//bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #b46839a1; /* Fondo representativo de ventas de ladrillo */
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semitransparente para la tarjeta */
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="image-container">
            <img src="public/img/HornoUnido.png" alt="Imagen de inicio de sesión" style="height: 100px;">
        </div><br>
        <div class="card p-4 text-light mb-5">
            <div class="card-header">
                <h3>Iniciar sesión</h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="validar.php" method="POST">
                    <div class="input-group form-group mt-3">
                        <div class="bg rounded-start">
                            <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                        </div>
                        <div class="wave-group">
                            <input required="" type="text" class="input" name="usuario">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">U</span>
                                <span class="label-char" style="--index: 1">s</span>
                                <span class="label-char" style="--index: 2">u</span>
                                <span class="label-char" style="--index: 3">a</span>
                                <span class="label-char" style="--index: 3">r</span>
                                <span class="label-char" style="--index: 3">i</span>
                                <span class="label-char" style="--index: 3">o</span>
                            </label>
                        </div>
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg rounded-start">
                            <span class="m-3"><i class="fas fa-lock mt-2"></i></span>
                        </div>
                        <div class="wave-group">
                            <input required="" type="password" class="input" name="contrasena" id="contrasena">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">C</span>
                                <span class="label-char" style="--index: 1">o</span>
                                <span class="label-char" style="--index: 2">n</span>
                                <span class="label-char" style="--index: 3">t</span>
                                <span class="label-char" style="--index: 3">r</span>
                                <span class="label-char" style="--index: 3">a</span>
                                <span class="label-char" style="--index: 3">s</span>
                                <span class="label-char" style="--index: 3">e</span>
                                <span class="label-char" style="--index: 3">ñ</span>
                                <span class="label-char" style="--index: 3">a</span>
                            </label>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn" onclick="togglePasswordVisibility()" style="background-color: rgb(225, 181, 119);">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mt-3 text-center">
                        <button class="Btn mx-auto" type="submit">
                            <div class="sign" name="login-btn">
                                <svg viewBox="0 0 512 512">
                                    <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                                </svg>
                            </div>
                            <div class="text">Entrar</div>
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <div class="bs-light">¿Aún no eres usuario?, <a href="registrar.php">regístrate aquí</a></div>
                </div><br>
                <div class="d-flex justify-content-center">
                    <div class="text-primary"><a href="index.php" style="text-decoration: none; color: white;">Atrás</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para alternar la visibilidad de la contraseña -->
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('contrasena');
            var buttonIcon = document.querySelector('.bi-eye');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                buttonIcon.classList.remove('bi-eye');
                buttonIcon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                buttonIcon.classList.remove('bi-eye-slash');
                buttonIcon.classList.add('bi-eye');
            }
        }
    </script>
</body>

</html>
