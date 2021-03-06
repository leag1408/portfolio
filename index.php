<?php
$pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100,200,300,400,500,600,700,800.900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>

<body id="inicio">
    <header>
        <div class="container">
            <?php include_once("menu.php"); ?>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center inicio">
                <div class="col-12 col-sm-8 texto text-center">
                    <p class="my-3 mx-2"> Hola mi nombre es Rosario, soy desarrolladora full stack. | <i class="fas fa-search"></i></p>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="text-right">
                    <button type="submit" class="btn shadow mt-3">MIRÁ MI TRABAJO</button>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="container mt-5">
            <div class="row ">
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