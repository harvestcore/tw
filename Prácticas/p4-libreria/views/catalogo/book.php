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

        <div class="flexmainct">
            <div class="pedidos">
                <section class="cabecera-libro-ped">
                    <h3>Ejemplar:</h3>
                    <img class="img-libro-ped" src="<?php echo 'data:image/jpg;base64,' . base64_encode($this->book->image) ?>" alt="<?php echo $this->book->title; ?>">
                    <div class=items-ped>
                        <div class="single-item-ped">
                            <span class="tit-libro-ped caract-libro">Título</span>
                            <span class="cont-tit-libro"><?php echo $this->book->title; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="aut-libro-ped caract-libro">Autor</span>
                            <span class="cont-aut-libro"><?php echo $this->book->author; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="edi-libro-ped caract-libro">Editorial</span>
                            <span class="cont-edi-libro"><?php echo $this->book->publisher; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="isbn-libro-ped caract-libro">ISBN</span>
                            <span class="cont-isbn-libro"><?php echo $this->book->isbn; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="anno-libro-ped caract-libro">Año</span>
                            <span class="cont-anno-libro"><?php echo $this->book->pubdate; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="edi-libro-ped caract-libro">Género</span>
                            <span class="cont-edi-libro"><?php echo $this->book->genre; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="prec-libro-ped caract-libro">Precio</span>
                            <span class="cont-prec-libro"><?php echo $this->book->price; ?> $</span>
                        </div>
                    </div>

                    <a href="<?php echo constant('URL'); ?>catalogo/buy/<?php echo $this->book->isbn; ?>" class="btna btna-default">Comprar</a>
                </section>
            </div>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>