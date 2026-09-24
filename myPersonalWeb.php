<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Inicia sesión.");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Web</title>
    <link rel="stylesheet" href="./CSS/stylesMyWeb.css">
</head> 
<body>
    <header>
        <h2 class="title">My Personal Web</h2>
        <nav class="navigation">
            <a href="#inicio">Home</a>
            <a href="#sobre-mi">Sobre mí</a>
            <a href="#educacion">Educación</a>
            <a href="#contacto">Contact</a>
            <form action="PHP/cerrar_session.php" method="POST">
                <button class="btn-Exit">Exit</button>
            </form>
        </nav>
    </header>

    <section class="content" id="inicio">
        <h2>Luis Felipe Galindo Rengifo</h2>
        <p>Estudiante de Tecnología en Desarrollo de Software</p>
        <p class="documento">CC : 1105371870</p>
    </section>

    <main class="main-content"> 
        <section class="about-me" id="sobre-mi">

            <div class="about-title">
                <h2>Sobre mí</h2>
            </div>

            <div class="about-content">

                <div class="text">
                    <p>
                        Me llamo Luis Felipe Galindo Rengifo, tengo 18 años y soy estudiante de 
                        Tecnología en Desarrollo de Software, actualmente curso tercer semestre.
                    </p>
                    <p>
                        Me llama mucho la atención la programación, me gusta aprender cosas nuevas
                        y mi objetivo es terminar la tecnologia y posteriormente seguir estudiando para obtener un titulo 
                        universitario en Ingeniería.
                    </p>
                    <p>
                        Posteriormente, quiero enfocarme principalmente en la ciberseguridad.
                        Me interesa mucho la seguridad informática y me gustaría aprender más
                        sobre este tema.
                    </p>
                </div>
                <div class="img">
                    <img src="CSS/Imagenes/yo.png" alt="yo" class="yo">
                </div>

            </div>   
        </section>

        <section class="study" id="educacion">

            <div class="study-title">
                <h2>Educación</h2>
            </div>

            <div class="study-content">

                <div class="education">
                    <p>
                        Curse el bachillerato en la Institución Educativa Alfredo Bonilla Montaño, Sede Terranova Jamundí,
                        me gradué en el año 2024 y actualmente estudio en la Universidad del Valle, Sede Norte del cauca. 
                    </p> 
                    <p>   
                        Ingresé a la Universidad en el periodo Agosto-Diciembre del 2025 en el 
                        programa de Tecnología en Desarrollo de Software con el <b>Codigo de estudiante: 202564956</b> || <b>Codigo de programa: 2724-DIU</b>,
                        actualmente curso el tercer semestre de mi programa.
                    </p>
                    <p>
                        Anteriormente cuando estaba en el colegio había empezado un curso 
                        de programación básica en platzi, en el cual me enseñaron HTML, CSS y javascript, 
                        no lo pude terminar, y con el pasar del tiempo y la falta de práctica
                        se me olvidaron muchas cosas, pero ese fue mi punto de partida en el desarrollo de software.
                    </p>
                </div>
                <div class="skills">
                    <h2>Habilidades en desarrollo:</h2>

                    <h3>Lenguajes que estoy aprendiendo</h3>
                    <ul>
                        <li>Python</li>
                        <li>Java</li>
                    </ul>

                    <h3>Tecnologías web con las que he tenido contacto</h3>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="contact-me" id="contacto">
            <h2>Contacto</h2>
            <p>luis.felipe.galindo@correounivalle.edu.co</p>
        </section>
    </main>
</body>
</html>