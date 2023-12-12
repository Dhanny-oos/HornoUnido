<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#Funcionamiento">¿Cómo funciona?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php">Registrarse</a>
                        </li>
                        <li class="nav-item" style="margin-right: 20px;">
                            <a class="nav-link" href="inicio_sesion.php">Iniciar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container"><br><br><br><br><br><br><br>
            <div class="container">
                <section class="contenido" id="Inicio">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="public/img/HornoUnido2.png" alt="Imagen" class="img-fluid rounded-4">
                        </div>
                        <div class="col-md-6"><br><br><br>
                            <h1>¿Quiénes somos?</h1><br>
                            <p>En HornoUnido, nuestra misión es proporcionar productos duraderos y resistentes.
                                Contamos con un equipo altamente capacitado y apasionado que se esfuerza por mantener los más
                                altos estándares de calidad en cada ladrillo que producimos.</p>
                            <p>Con años de experiencia en la industria, nos enorgullece ser una empresa arraigada en la tradición
                                de la alfarería y la producción de ladrillos. Hemos evolucionado con el tiempo, adoptando nuevas
                                estrategías mientras mantenemos el compromiso con la artesanía que nos distingue.</p>
                        </div>
                    </div>
                </section>
                <br><br>
                <hr class="border-3">
                <br><br>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/img/Fondo HT.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/img/Camión.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br><br>    
                <hr class="border-3" id="Funcionamiento">
            </div>
            <br><br><br><br>
            <section>
                <h1 class="mb-4 text-center">¿Cómo funciona?</h1>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <!-- Primer elemento -->
                        <div class="col-md-4">
                            <div class="card" style="border-style: none;">
                                <img src="public/img/HornoUnido4.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;">Ingresa y realiza tu pedido</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Segundo elemento -->
                        <div class="col-md-4">
                            <div class="card" style="border-style: none;">
                                <img src="public/img/HornoUnido5.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;">Verifica tus datos y confirma tu compra</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Tercer elemento -->
                        <div class="col-md-4">
                            <div class="card" style="border-style: none;">
                                <img src="public/img/HornoUnido6.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;">Elige compra a pie de horno o a domicilio</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <hr class="border-3">
                </div>
            </section>
            <br><br>
            <section class="mt-5">
                <h1 class="mb-4 text-center">Nosotros</h1><br><br>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-6 text-center">
                        <h2>Nuestro compromiso</h2>
                        <p style="font-size: 18px;">Calidad: Buscamos la excelencia en cada detalle, desde la selección de la materia prima hasta el producto final.</p>
                        <p style="font-size: 18px;">Compromiso: Nos comprometemos a superar las expectativas de nuestros clientes y a construir relaciones duraderas.</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <h2>Misión</h2>
                        <p style="font-size: 18px;">En HornoUnido, nuestra misión es proporcionar soluciones de construcción confiables y duraderas. Nos esforzamos por ser el socio preferido en proyectos de construcción, ofreciendo productos de la más alta calidad respaldados por un servicio excepcional.</p>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-10 text-center">
                        <h2>Visión</h2>
                        <p style="font-size: 18px;">En HornoUnido, nuestra visión es ser reconocidos como líderes indiscutibles en la industria de la producción de ladrillos, impulsados por la excelencia, la innovación y el compromiso con la sostenibilidad.</p>
                        <p style="font-size: 18px;">Nos esforzamos por construir un futuro donde cada estructura, cada proyecto, esté fundamentado en la solidez y la calidad de nuestros productos.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <br><br><br>
    <footer id="acerca_de" class="bg-dark text-light p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><br>
                    <h3>Contáctanos</h3>
                    <p>¡Estamos aquí para ayudarte! Puedes contactarnos a través de WhatsApp o en nuestras redes sociales.</p>
                    <p><strong>Dirección:</strong> Tacubaya 133, Centro, 36970 Abasolo, Gto</p>
                    <p><strong>Horario de Atención:</strong></p>
                    <p>Lunes a Sábado: 9:40 AM - 8:30 PM</p>
                    <p>Domingos: 10:00 AM - 5:00 PM</p>
                </div>
                <div class="col-md-6"><br>
                    <h4>Redes Sociales</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/hornounido" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="https://www.twitter.com/hornounido" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="https://www.instagram.com/hornounido" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                    <h4>WhatsApp</h4>
                    <p>Puedes contactarnos a través de WhatsApp en el siguiente número:</p>
                    <p><a href="https://wa.me/4291514221" target="_blank"><i class="fab fa-whatsapp"></i> Enviar mensaje por WhatsApp</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>