<?php
$pg = "contacto";
?>
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
                <?php include_once("menu.php"); ?>
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
                        <div class="text-right pb-2">
                            <button type="submit" class="btn shadow">ENVIAR</button>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                        <a href="https://github.com/" target="_blank" title="Github"><i class="fab fa-github mr-1"></i></a>
                        <a href="https://www.linkedin.com/in/leagimenez44/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                        Sponsor <a href="htpps://depcsuite.com" target="_blank" title="DEPCSUITE">DePc Suite </a>
                    </div>
                    <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                        <a href="mailto:info@depcsuite.com">info@depcsuite.com</a>
                    </div>
                    <div class="col-sm-3 col-12 text-right">
                        <a href="https://api.whatsapp.com/send?phone=541168902210" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>

                    </div>

                </div>
            </div>
        </footer>

</body>

</html>