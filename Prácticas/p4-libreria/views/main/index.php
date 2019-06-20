<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'views/base/head.php' ?>
</head>
<body>
    <?php require 'views/base/header.php';
          require 'views/base/topnav.php' ?>


    <!-- gestion eventos -->
    <main class="container">

        <?php require 'views/base/sidebar.php'; ?>

        <div class="eventos">
            <h2>Eventos recientes</h2>
            <section class="firma-libros">
                <h3>Firmas de libros</h3>
                <div class="evt">
                    <h4>Charles Dickens</h4>
                    <img src="public/img/charles.jpg" alt="Charles">
                    <div class="evt-data">
                        <span class="fecha">User: tw</span>
                        <span class="hora">Password: tw</span>
                        <span class="descripcion">Usuario habitual</span>
                        <span class="link-info"><a href="">Más info</a></span>
                    </div>
                </div>
            </section>

            <section class="presentacion-libros">
                <h3>Presentaciones de libros</h3>
                <div class="evt">
                    <h4>Julio Verne</h4>
                    <img src="public/img/julio.jpg" alt="Julio Verne">
                    <div class="evt-data">
                        <span class="fecha">User: admin</span>
                        <span class="hora">Password: admin</span>
                        <span class="descripcion">Usuario administrador</span>
                        <span class="link-info"><a href="">Más info</a></span>
                    </div>
                </div>
            </section>
            
            <section class="otros-eventos">
                <h3>Otros eventos</h3>
                <div class="evt">
                    <h4>Apertura de tienda física.</h4>
                    <img src="public/img/libreria.jpg" alt="Libreria">
                    <div class="evt-data">
                        <span class="fecha">5500 0000 0000 0004</span>
                        <span class="hora">↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑</span>
                        <span class="descripcion">Nº tarjeta de crédito de prueba</span>
                        <span class="link-info"><a href="">Más info</a></span>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>