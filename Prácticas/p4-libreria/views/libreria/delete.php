<?php
    if (session_status() == PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['isadmin'])) header('Location: ' . constant('URL') . 'login');
?>

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
            
            <div class="infomsj">
                <?php echo $this->message; ?>
            </div>
            
            <a class="btna btna-default" href="<?php echo constant('URL'); ?>libreria/list">Volver</a>
            
            <form action="<?php echo constant('URL'); ?>libreria/remove" method="POST">
                <p class="f-param">
                    <label for="book-title">Título</label>
                    <input type="text" name="book-title" id="" required value="<?php echo $this->book->title; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="book-author">Autor</label>
                    <input type="text" name="book-author" id="" required value="<?php echo $this->book->author; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="book-isbn">ISBN</label>
                    <input type="number" name="book-isbn" id="" required value="<?php echo $this->book->isbn; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="book-price">Precio en $</label>
                    <input type="number" name="book-price" id="" required value="<?php echo $this->book->price; ?>" readonly="readonly" step="0.01">
                </p>
                <p class="f-param">
                    <label for="book-format">Formato</label>
                    <input type="text" name="book-format" id="" required value="<?php echo $this->book->format; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="book-publisher">Editorial</label>
                    <input type="text" name="book-publisher" id="" required value="<?php echo $this->book->publisher; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="book-pubdate">Fecha de publicación</label>
                    <input type="date" name="book-pubdate" id="" required value="<?php echo $this->book->pubdate; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="book-genre">Género</label>
                    <input type="text" name="book-genre" id="" required value="<?php echo $this->book->genre; ?>" readonly="readonly">
                </p>
                <p class="f-param"> <input type="submit" value="Eliminar libro"> </p> 
            </form>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>