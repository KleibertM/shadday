
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de Biblias - SHADDAI. Explora nuestra amplia selección de Biblias y encuentra la que mejor se adapte a tus necesidades espirituales.">
    <meta name="keywords" content="Venta de Biblias, SHADDAI, Biblias de estudio, Biblia devocional, Biblia infantil, Comprar Biblias, Fe y espiritualidad, Palabra de Dios, Guía espiritual, Lectura de la Biblia, Reflexiones espirituales">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <style>
        :root {
            /* Colores */
            --body-color: #E4E9F7;
            --sidebar-color: #FFF;
            --primary-color: #4A80F0;
            --primary-color-dark: #3D6AF6;
            --primary-color-darker: #2F4F9F;
            --primary-color-light: #F6F5FF;
            --toggle-color: #DDD;
            --text-color: #707070;
            --text-color-light: #A4A4A4;
            --text-color-lighter: #D4D4D4;
            --text-color-lightest: #F4F4F4;
            --text-color-dark: #333;
            --text-color-darker: #222;
            --text-color-darkest: #111;
            /* color oscuro transparente */
            --dark-transparent-color: rgba(0, 0, 0, 0.3);


            /* Transiciones */
            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.3s ease;
            --tran-05: all 0.3s ease;
        }

        /* Estilos generales */
    body {
        background-color: var(--body-color);
        color: var(--text-color);
        font-size: 16px;
    }

    h1, h2, h3, h4, h5, h6 {
        color: var(--primary-color-dark);
    }

    a {
        color: var(--primary-color);
        text-decoration: none;
    }

    /* Estilos de la barra de navegación */
    .navbar {
        background-color: var(--sidebar-color);
    }

    .navbar-brand {
        color: var(--primary-color);
        font-weight: bold;
        font-size: 24px;
    }

    .nav-link {
        color: var(--text-color);
    }

    /* Estilos del header */
    .main-header {
        background-color: var(--primary-color-light);
        padding: 40px 0;
        text-align: center;
        color: var(--text-color-lightest);
    }

    .main-header h1 {
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .main-header h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .main-header p {
        font-size: 18px;
        margin-bottom: 40px;
        color: var(--text-color-light);
    }

    .btn-light {
        background-color: var(--primary-color);
        color: var(--text-color-lightest);
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        transition: var(--tran-03);
    }

    .btn-light:hover {
        background-color: var(--primary-color-dark);
        color: var(--text-color-lightest);
    }

    /* Estilos de la sección secundaria */
    .secondary-container {
        background-color: var(--primary-color-light);
        padding: 40px 0;
        text-align: center;
    }

    .secondary-img img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px 0;
    }

    .secondary-text {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px 0;
    }

    .secondary-text h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .secondary-text p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .secondary-link {
        background-color: var(--primary-color);
        color: var(--text-color-lightest);
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        transition: var(--tran-03);
    }

    .secondary-link:hover {
        background-color: var(--primary-color-dark);
        color: var(--text-color-lightest);
    }

    /* Estilos de la sección principal */
    .main-section {
        padding: 40px 0;
        text-align: center;
    }

    .main-section-title {
        font-size: 36px;
        color: var(--primary-color-dark);
        margin-bottom: 40px;
        background-color: var(--primary-color-light);
        padding: 20px 0;
        border-radius: 10px;
    }

    .main-section-content {
        display: flex;
        justify-content: space-between;
    }

    .main-section-content .col-md-4 {
        width: 30%;
        padding: 10px;
        margin-bottom: 30px;
        text-align: center;
    }

    .main-section-content img {
        max-width: 100%;
        max-height: 250px;
        margin-bottom: 10px;
    }

    .main-section-content h3 {
        font-size: 24px;
        margin-bottom: 10px;
        color: var(--primary-color-dark);
    }

    .main-section-content p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    

    .carousel-caption {
  text-align: center;
  color: var(--text-color-lightest);
  background-color: var(--dark-transparent-color);
  padding: 20px;
  border-radius: 10px;
  max-width: 70%;
}

.carousel-caption h3 {
  font-size: 28px;
  margin-bottom: 10px;
  font-weight: bold;
}

.carousel-caption p {
  font-size: 18px;
  margin-bottom: 0;
}

.carousel-inner img {
  object-fit: cover;

  border-radius: 10px;
  box-shadow: 0 2px 5px var(--dark-transparent-color);
}

    /* Estilos del footer */
    footer {
        background-color: var(--primary-color-dark);
        padding: 40px 0;
        color: var(--text-color-lightest);
    }

    footer h4 {
        font-size: 24px;
        margin-bottom: 20px;
        color: var(--text-color-lightest);
    }

    footer p {
        margin-bottom: 10px;
    }

    .footer-address i,
    .footer-email i,
    .footer-phone i {
        margin-right: 10px;
    }

    .footer-links-page a {
        color: var(--text-color-lightest);
        transition: var(--tran-03);
    }

    .footer-social-icons li {
        display: inline-block;
        margin-right: 10px;
    }

    .footer-social-icons a {
        color: var(--text-color-lightest);
        transition: var(--tran-03);
    }

    .footer-social-icons a:hover {
        color: var(--primary-color-light);
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* Estilos adicionales */
    .container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 20px;
    }

    @media (max-width: 767px) {
        .main-header h1 {
            font-size: 36px;
        }

        .main-header h2 {
            font-size: 20px;
        }

        .main-header p {
            font-size: 16px;
        }

        .btn-light {
            font-size: 16px;
            padding: 8px 16px;
        }

        .secondary-text h2 {
            font-size: 30px;
        }

        .secondary-text p {
            font-size: 16px;
        }

        .secondary-link {
            font-size: 16px;
            padding: 8px 16px;
        }

        .main-section-title {
            font-size: 30px;
            margin-bottom: 30px;
        }
        .container-header .row {
            max-width: 300px;
            margin: 0 auto;
        }

         .main-section-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .main-section-content .col-md-4 {
        width: 100%;
        padding: 10px;
        margin-bottom: 30px;
        text-align: center;
    }
    }
    </style>

    <title>Shadday - Venta de Biblias</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SHADDAI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria/all.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../procesos/login2.php">Regístrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../procesos/login2.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="main-section">
    <div class="container">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/Biblia-de-estudio-c.jpg" alt="Biblia 1" class="w-100">
                    <div class="carousel-caption">
                        <h3>Biblia de estudio</h3>
                        <p>Una Biblia diseñada para profundizar en el estudio de las Escrituras y entender su significado en contexto.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/Biblia-devocional-b.webp" alt="Biblia 2" class="w-100">
                    <div class="carousel-caption">
                        <h3>Biblia devocional</h3>
                        <p>Una Biblia que te acompaña en tu camino espiritual diario, ofreciendo reflexiones y oraciones para fortalecer tu fe.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/Biblia-infantil.jpg" alt="Biblia 3" class="w-100">
                    <div class="carousel-caption">
                        <h3>Biblia infantil</h3>
                        <p>Una Biblia adaptada para los más pequeños, con ilustraciones y lenguaje sencillo para introducirlos a la Palabra de Dios.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </section>
   

    <header class="main-header">
        <div class="container">
            <h1>Venta de Biblias</h1>
            <h2>Encuentra la Biblia perfecta para ti</h2>
            <p>Explora nuestra amplia selección de Biblias y encuentra la que mejor se adapte a tus necesidades espirituales.</p>
            
            <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="../img/caballeros/BIBLIA DE ESTUDIO RYRIE.jpg" class="card-img-top" alt="Libro 1">
                    <div class="card-body">
                        <h5 class="card-title">Biblia de Estudio Ryrie</h5>
                        <p class="card-text">Biblias de estudio para profundizar en el estudio de las Escrituras y entender su significado en contexto.</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="../img/damas/BIBLIA DE ESTUDIO DE LA PROFECÍA.jpg" class="card-img-top" alt="Libro 2">
                    <div class="card-body">
                        <h5 class="card-title">Biblia de La Profecia</h5>
                        <p class="card-text">Biblia de la profecía, con referencias y guía de estudio para entender el significado de las profecías bíblicas.</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="../img/damas/BIBLIA DE ESTUDIO PARA LA MUJER.jpg" class="card-img-top" alt="Libro 3">
                    <div class="card-body">
                        <h5 class="card-title">La Mujer en La Biblia</h5>
                        <p class="card-text">Biblia de la mujer, la cual incluye un devocional diario para mujeres y un plan de lectura de un año a través de la Biblia.</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="../img/niños/HISTORIAS BÍBLICAS LA BIBLIA PREESCOLAR.jpg" class="card-img-top" alt="Libro 4">
                    <div class="card-body">
                        <h5 class="card-title">La Biblia en Familia</h5>
                        <p class="card-text">Biblia para la familia, con devocionales diarios para padres e hijos, a fin de fortalecer los lazos familiares.</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <a href="categoria/all.php" class="btn btn-light">Ver productos</a>
    </div>
    </header>



    <section class="secondary-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 secondary-img">
                    <img src="../img/item-a.jpeg" alt="Biblia">
                </div>
                <div class="col-md-6 secondary-text">
                    <h2>Descubre la Palabra de Dios</h2>
                    <p>Sumérgete en las enseñanzas sagradas y encuentra la guía espiritual que necesitas en tu vida.</p>
                    <a href="categoria/all.php" class="secondary-link">Explorar Biblias</a>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section">
    <div class="container">
        <h2 class="main-section-title">Nuestras Biblias destacadas</h2>
        <div class="main-section-content">
            <div class="col-md-4 main-section-item">
                <img src="../img/item-f-a.jpg" alt="Biblia 1">
                <h3>Biblia de estudio</h3>
                <p>Una Biblia diseñada para profundizar en el estudio de las Escrituras y entender su significado en contexto.</p>
            </div>
            <div class="col-md-4 main-section-item">
                <img src="../img/item-f-b.jpg" alt="Biblia 2">
                <h3>Biblia devocional</h3>
                <p>Una Biblia que te acompaña en tu camino espiritual diario, ofreciendo reflexiones y oraciones para fortalecer tu fe.</p>
            </div>
            <div class="col-md-4 main-section-item">
                <img src="../img/item-f-c.jpg" alt="Biblia 3">
                <h3>Biblia infantil</h3>
                <p>Una Biblia adaptada para los más pequeños, con ilustraciones y lenguaje sencillo para introducirlos a la Palabra de Dios.</p>
            </div>
        </div>
    </div>
</section>


    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Shaddai</h4>
                <p>Tienda de Biblias online</p>
                <ul class="footer-social-icons">
                    <li><a href="#"><i class='bx bxl-facebook'></i>Facebook</a></li>
                    <li><a href="#"><i class='bx bxl-twitter'></i>Twitter</a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i>Instagram</a></li>
                    <li><a href="#"><i class='bx bxl-pinterest'></i>Pinterest</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Enlaces útiles</h4>
                <ul class="footer-links-page">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Regístrate</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Contacto</h4>
                <p class="footer-address"><i class='bx bx-map'></i> Dirección de la tienda, Ciudad, País</p>
                <p class="footer-email"><i class='bx bx-envelope'></i> info@shaddai.com</p>
                <p class="footer-phone"><i class='bx bx-phone'></i> +1234567890</p>
            </div>
        </div>
    </div>
</footer>
    <!-- JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>