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
        
            <a class="btna btna-default" href="<?php echo constant('URL'); ?>libreria">Volver</a>
            
            <!-- Agregar libro -->
            <form action="<?php echo constant('URL'); ?>libreria/addbook" method="POST" enctype="multipart/form-data">
                <p class="f-param">
                    <label for="book-title">Título</label>
                    <input type="text" name="book-title" id="" required>
                </p>
                <p class="f-param">
                    <label for="book-author">Autor</label>
                    <input type="text" name="book-author" id="" required>
                </p>
                <p class="f-param">
                    <label for="book-isbn">ISBN</label>
                    <input type="number" name="book-isbn" id="" required>
                </p>
                <p class="f-param">
                    <label for="book-price">Precio en $</label>
                    <input type="number" name="book-price" id="" required step="0.01" min="0">
                </p>
                <p class="f-param">
                    <label for="book-format">Formato</label>
                    <input type="text" name="book-format" id="" required>
                </p>
                <p class="f-param">
                    <label for="book-publisher">Editorial</label>
                    <input type="text" name="book-publisher" id="" required>
                </p>
                <p class="f-param">
                    <label for="book-pubdate">Fecha de publicación</label required>
                    <input type="date" name="book-pubdate" id="">
                </p>
                <p class="f-param">
                    <label for="book-genre">Género</label required>
                    <input type="text" name="book-genre" id="">
                </p>
                <p class="f-param">
                    <label for="book-image">Imagen</label>
                    <input type="file" name="book-image" id="">
                </p>
                <p class="f-param"> <input type="submit" value="Agregar libro"> </p> 
            </form>
        </div>
        

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>