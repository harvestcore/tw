<?php

    function drawhead() {
        $html = '<meta charset="UTF-8">
                <meta name="author" content="Ángel Gómez Martín">    
                <title id="titulo">El Lector de Libros</title>
                <meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no>
                <link rel="icon" href="./img/open-book.png">
                <link rel="stylesheet" href="css/styles.css">
                <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Nunito:300" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">';

        echo $html;
    }

    function drawtopbar() {
        $html = '
            <nav class="top-menu">
                <a href="./index.html">Inicio</a>
                <a href="./catalogo.html">Catálogo</a>
                <a href="./busqueda.html">Búsqueda</a>
                <a href="./tiendas.html">Tiendas</a>
            </nav>';

        echo $html;
    }

    function drawheader() {
        $html = '<header id="cabecera">
                    <img src="./img/book.png" alt="Libro" id="libro-cabecera">
                    <div id="cabecera-titulo">
                        <h1>El Lector de Libros</h1>
                        <h2>Contando historias desde hace 150 años.</h2>
                    </div>
                </header>';

        echo $html;
    }

    function drawsidebar() {
        $html = '<aside class="side-menu">
                    <section class="mas-vendidos">
                        <h3>Más vendidos</h3>
                        <ul>
                            <li><a href="">El quijote</a></li>
                            <li><a href="">Ulises</a></li>
                            <li><a href="">La cocina de Arguiñano</a></li>
                        </ul>
                    </section>
            
                    <section class="mas-populares">
                        <h3>Más populares</h3>
                        <ul>
                            <li><a href="">Charles Dickens</a></li>
                            <li><a href="">Julio Verne</a></li>
                            <li><a href="">Edgar Allan Poe</a></li>
                        </ul>
                    </section>
                </aside>';

        echo $html;
    }

    function drawevents() {
        $html = '<div class="eventos">
                    <h2>Eventos recientes</h2>
                    <section class="firma-libros">
                        <h3>Firmas de libros</h3>
                        <div class="evt">
                            <h4>Charles Dickens</h4>
                            <img src="./img/charles.jpg" alt="Charles">
                            <div class="evt-data">
                                <span class="fecha">10 de mayo de 1990</span>
                                <span class="hora">17:45 horas</span>
                                <span class="descripcion">El magnífico escritor firmará libros durante toda la tarde.</span>
                                <span class="link-info"><a href="">Más info</a></span>
                            </div>
                        </div>
                    </section>

                    <section class="presentacion-libros">
                        <h3>Presentaciones de libros</h3>
                        <div class="evt">
                            <h4>Julio Verne</h4>
                            <img src="./img/julio.jpg" alt="Julio Verne">
                            <div class="evt-data">
                                <span class="fecha">15 de abril de 2005</span>
                                <span class="hora">20:45 horas</span>
                                <span class="descripcion">El magnífico escritor presenta su nuevo libro <strong>Cocina para todos</strong>.</span>
                                <span class="link-info"><a href="">Más info</a></span>
                            </div>
                        </div>
                    </section>
                    
                    <section class="otros-eventos">
                        <h3>Otros eventos</h3>
                        <div class="evt">
                            <h4>Apertura de tienda física.</h4>
                            <img src="./img/libreria.jpg" alt="Libreria">
                            <div class="evt-data">
                                <span class="fecha">Mañana, 18 de agosto de 2017</span>
                                <span class="hora">10:00</span>
                                <span class="descripcion">¡Abrimos nuestra primera tienda física!</span>
                                <span class="link-info"><a href="">Más info</a></span>
                            </div>
                        </div>
                    </section>
                </div>';

        echo $html;

        function drawfooter() {
            $html = '<section class="localizacion">
                        <section id="local-granada">
                            <h3>Granada</h3>
                            <div class="direccion-tienda">
                                <span>Reyes Católicos, 55 (958000000)</span>
                                <span>Avda. Dilar, 44 (958000000)</span>
                            </div>
                        </section>

                        <section id="local-malaga">
                            <h3>Málaga</h3>
                            <div class="direccion-tienda">
                                <span>Marqués de Larios, 55 (958000000)</span>
                                <span>Churriana, 22 (958000000)</span>
                            </div>
                        </section>
                    </section>

                    <section class="contacto">
                        <div class="email">
                            <img src="./img/email.png" alt="Email logo">
                            <span>info@lectordelibros.com</span>
                        </div>

                        <div class="redes">
                            <a href=""><img src="./img/twitter.png" alt="Twitter logo"></a>
                            <a href=""><img src="./img/linkedin.png" alt="Linkedin logo"></a>
                            <a href=""><img src="./img/facebook.png" alt="Facebook logo"></a>
                        </div>
                    </section>

                    <section class="otros-links">
                        <span><a href="./validar.php" target="_blank">La empresa</a></span>
                        <span><a href="./validar.php" target="_blank">Políticas de envío</a></span>
                        <span><a href="./validar.php" target="_blank">FaQ</a></span>
                        <span><a href="./validar.php" target="_blank">Mapa del sitio</a></span>
                    </section>';

            echo $html;
        }
    }

?>