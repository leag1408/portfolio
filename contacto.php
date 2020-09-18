<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100,200,300,400,500,600,700,800.900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>

<body id="contacto">
    <header>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-md px-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item pr-5">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item pr-5">
                                <a class="nav-link" href="sobre-mi.php">Sobre mí</a>
                            </li>
                            <li class="nav-item pr-5">
                                <a class="nav-link" href="proyectos.php">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                        <div class="form-inline my-2 my-lg-0">
                            <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h1>Contacto</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12 mt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, nam sunt fugit vero delectus a
                            distinctio obcaecati soluta consectetur sequi necessitatibus similique odit enim maxime aperiam
                            dicta illum commodi at? </p>
                    </div>
                    <div class="col-sm-6 col-12 mt-4">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="text" id="txtNombre" name="textNombre" class="form-control shadow" placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow" placeholder="Correo">
                            </div>
                            <div class="mb-3">
                                <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"></textarea>
                            </div>
                        </form>
                        <div class="text-right">
                            <button type="submit" class="btn shadow">ENVIAR</button>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a href="https://github.com/" target="_blank" title="Github"><i class="fab fa-github mr-1"></i></a>
                        <a href="https://www.linkedin.com/in/leagimenez44/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-3">
                        Sponsor <a href="htpps://depcsuite.com" target="_blank" title="DEPCSUITE">DePc Suite </a>
                    </div>
                    <div class="col-3">
                        <a href="mailto:info@depcsuite.com">info@depcsuite.com</a>
                    </div>
                    <div class="col-3 text-right">
                        <a href="https://api.whatsapp.com/send?phone=541168902210" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>

                    </div>

                </div>
            </div>
        </footer>

</body>

</html>