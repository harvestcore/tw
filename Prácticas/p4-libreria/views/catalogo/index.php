<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'views/base/head.php' ?>
</head>
<body>
    <?php require 'views/base/header.php';
          require 'views/base/topnav.php' ?>

    <main class="container">

        <?php require 'views/base/sidebar.php'; ?>

        <div class="catalogo">
            <h2>Nuestro catálogo</h2>
            <section class="nuevas-adquisiciones">
                <div class="libros">
                    <?php 
                        foreach ($this->books as $row) {
                            $book = new Libro();
                            $book = $row;
                    ?>
                        <div class="libro">
                            <img src="<?php echo 'data:image/jpg;base64,' . base64_encode($book->image) ?>" alt="<?php echo $book->title; ?>">
                            <span class="nombre"><?php echo $book->title; ?></span>
                            <span class="autor"><?php echo $book->author; ?></span>
                            <span class="precio"><?php echo $book->price; ?> $</span>
                            <a href="<?php echo constant('URL'); ?>catalogo/book/<?php echo $book->isbn; ?>" class="btna btna-edit">Ver libro</a>
                            <a href="<?php echo constant('URL'); ?>catalogo/buy/<?php echo $book->isbn; ?>" class="btna btna-default">Comprar</a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>