<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "portfolioDB";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM proyectos";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Portfolio de Victoria</title>
    <link rel="icon" href="Resources_images/favicon_Arcade.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
        @font-face {
            font-family: Bazinga;
            src: url('Resources/Title_fonts/bazinga/Bazinga-Regular.otf');
        }

        @font-face {
            font-family: Warpen;
            src: url('Resources/Title_fonts/warpen/Warpen.otf');
        }

        @font-face {
            font-family: Outrun_future;
            src: url('Resources/Title_fonts/outrun_future/Outrun_future.otf');
        }

        @font-face {
            font-family: Conthrax;
            src: url('Resources/Title_fonts//conthrax/conthrax-sb.otf');
        }

        @font-face {
            font-family: Mandalorian;
            src: url('Border_text/mandalorian/mandalor.ttf');
        }

        @font-face {
            font-family: OpenMSP;
            src: url('Resources/Text_fonts/OpenMSP/Openmsp.otf');
        }

        @font-face {
            font-family: PP Neue Machina;
            src: url('Resources/Text_fonts/PP_Neue_Machina/PPNeueMachina-Regular.otf');
        }

        @font-face {
            font-family: Typewriter;
            src: url('Resources/Text_fonts/jmh_typewriter_dry/JMH_Typewriter_dry.otf');
        }

        body {
            scroll-behavior: smooth;
        }

        .card {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .card-body {
            button {
                display: block;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body style="background: url('Resources_images/1087509.jpg') 100% fixed;">

    <nav class="navbar navbar-expand-lg bg-dark bg-gradient" style="font-family: Bazinga;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: white">Mi Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#about" style="color: white">Sobre mí</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#projects" style="color: white">Proyectos</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#contact" style="color: white">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <div class="text-center">
            <img src="Border_text/white_pngwing.com.png" style="max-width:30%">
        </div>
        <div class="text-center">
            <img src="Border_text/White_Text_Tennobet.png" style="max-width:70%">
        </div>
        <div class="text-center">
            <img src="Border_text/white_pngwing.com.png" style="max-width:30%">
        </div>
    </div>

    <section id="about" class="container mt-5"
        style="border:0.5em groove cyan;padding-top:0.75em;background-color: rgba(204,229,255,0.8);">
        <h2 style="text-align:center;font-family: Warpen;">Sobre mí</h2>
        <div class="container" style="display:inline-flex;">
            <img src="Resources_images/PXL_20240103_102131013_REC.jpg"
                style="max-width:30%;margin-right:2%;margin-bottom:2%;">
            <p style="font-family:PP Neue Machina;padding:0.5em">¡Hola! Soy Victoria, titulada en el CF Superior en
                Administración de Sistemas Informáticos en Red. Llevo años dando
                clases de refuerzo a estudiantes de la ESO y Bacillerato, además de haber estudiado 2 años en Ingeniería
                de
                Telecomunicaciones y otros 2 en Ingeniería Informática. Me apasionan los videojuegos, la lectura, la
                programación
                y la robótica. Me considero una persona con curiosidad por aprender, de mente creativa e inquisitiva.
            </p>
        </div>
    </section>

    <div class="container mx-auto">
        <div class="text-center">
            <img src="Border_text/white_pngwing.com.png" style="max-width:30%">
        </div>
        <div class="text-center" style="font-family: Mandalorian;font-size: 150%;color: white;">
            <p>Understanding you does not mean that I agree with you</p>
        </div>
        <div class="text-center">
            <img src="Border_text/white_pngwing.com.png" style="max-width:30%">
        </div>
    </div>

    <?php 
        while($rows=$result->fetch_assoc())
        {
    ?>
    <section id="projects" class="container mt-5"
    style="border:0.5em groove cyan;padding-top:0.75em;background-color: rgba(204,229,255,0.8);">
        <h2 style="text-align:center;font-family: Warpen;">Proyectos</h2>
        <div class="row" id="projectCards">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $row['image_url_P']; ?>" class="card-img-top" alt="<?php echo $row['titleP']; ?>">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;font-family: Bazinga;"><?php echo $row['titleP']; ?></h5>
                        <p class="card-text" style="font-family: OpenMSP;"><?php echo $row['descriptionP']; ?></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row['idProyecto']; ?>" style="font-family: Bazinga;margin: 0 auto;">Saber más</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modal<?php echo $row['idProyecto']; ?>" tabindex="-1" aria-labelledby="modal<?php echo $row['idProyecto']; ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal<?php echo $row['idProyecto']; ?>Label" style="text-align:center;font-family: Typewriter;font-size: 150%;"><?php echo $row['titleP']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-family: PP Neue Machina;">
                    <p><?php echo $row['modal_text']; ?></p>

                    <?php
                        if ($row['modal_link']!="NONE") {
                    ?>
                    <?php
                        if ($row['titleP']=="Creación de mods") {
                    ?>
                    <p>Más información (Minecraft): <a href="https://minecraft.fandom.com/wiki/Data_pack"
                            target="_blank">Data Packs de Minecraft</a></p>
                    <p>Más información (BG3): <a href="https://docs.larian.game/Osiris_Overview" target="_blank">El
                            lenguaje Osiris</a></p>
                    <?php
                        }
                        else {
                    ?>
                    <p>Más información: <a href="<?php echo $row['modal_link']; ?>" target="_blank"><?php echo $row['modal_link_title']; ?></a>
                    </p>
                    <?php
                        }
                    }
                    ?>

                    <?php
                        if ($row['titleP']=="Técnico de sonido") {
                    ?>
                    <div id="galeriaTeatro" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#galeriaTeatro" data-slide-to="0" class="active"></li>
                            <li data-target="#galeriaTeatro" data-slide-to="1"></li>
                            <li data-target="#galeriaTeatro" data-slide-to="2"></li>
                            <li data-target="#galeriaTeatro" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Resources_images/teatro_foto1.png"
                                    alt="Cartel de la obra">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Resources_images/Teatro_foto2.png"
                                    alt="Elenco completo" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Resources_images/teatro_foto3.jpg"
                                    alt="Cabina de control de luces y sonido" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Resources_images/teatro_foto4.jpg"
                                    alt="Las cuatro técnicos de la obra" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#galeriaTeatro" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#galeriaTeatro" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <?php
                        }
                        else {
                            if ($row['titleP']=="Historias") {
                    ?>
                    <img src="Resources_images/AO3_page.jpg" class="card-img-top" alt="Mi página de publicación">
                    <img src="Resources_images/Story_Aqueronte.jpg" class="card-img-top" alt="Historia: 'Aqueronte'">
                    <?php
                        }
                        else {
                    ?>
                    <img src="<?php echo $row['image_url_M']; ?>" class="card-img-top" alt="<?php echo $row['image_title_M']; ?>">
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>

<div class="container mx-auto">
        <div class="text-center">
            <img src="Border_text/white_pngwing.com.png" style="max-width:30%">
        </div>
        <div class="text-center">
            <img src="Border_text/White_Wakandan.png" style="max-width:70%">
        </div>
        <div class="text-center">
            <img src="Border_text/white_pngwing.com.png" style="max-width:30%">
        </div>
    </div>

    <section id="contact" class="container mt-5"
        style="border:0.5em groove cyan;padding-top:0.75em;padding-bottom:0.75em;background-color: rgba(204,229,255,0.8);">
        <h2 style="text-align:center;font-family: Warpen;">Contacto</h2>
        <form name="formularioContacto" id="contactForm" method="post" action="mailto:vickygorden@gmail.com"
            enctype="text/plain">
            <div class="form-group">
                <p>Nombre: <input name="usuario" type="text" class="form-control" id="name" required></p>
            </div>
            <div class="form-group">
                <p>Correo electrónico: <input name="correo" type="email" class="form-control" id="email" required></p>
            </div>
            <div class="form-group">
                <p>Mensaje: <textarea name="mensaje" class="form-control" id="mensaje">Introduce tu mensaje</textarea>
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>

    <footer class="bg-dark bg-gradient" style="margin-top: 1em;color: white;">
        <p style="font-family: Conthrax;font-size: 150%;">&copy; Victoria Gómez</p>
        <a href="https://www.instagram.com/captaintraitor" target="_blank"><img
                src="Resources_images/Instagram_icon.png" alt="Instagram" width="30" style="margin-right: 0.75em;"></a>
        <a href="https://steamcommunity.com/id/ItsCaptainTraitor" target="_blank"><img
                src="Resources_images/Steam_icon_logo.png" alt="Steam" width="30"
                style="margin-right: 0.75em;margin-left: 0.75em"></a>
        <a href="https://archiveofourown.org/users/66chaoticMinds" target="_blank"><img
                src="Resources_images/archive-of-our-own-logo.png" alt="AO3" width="30"
                style="margin-left: 0.75em;"></a>
    </footer>

    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();
                const email = $('#email').val();
                const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
                if (emailPattern.test(email)) {
                    $('#contactForm')[0].reset();
                    alert('Gracias!!!!');
                } else {
                    alert('Por favor, introduce un correo válido.');
                }
            });
        });
    </script>

</body>
 
</html>