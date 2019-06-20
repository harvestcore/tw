<?php
    if (session_status() == PHP_SESSION_NONE) session_start();
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
                <?php echo "Término de búsqueda: " . $this->message; ?>
            </div>

            <a class="btna btna-default" href="<?php echo constant('URL'); ?>busqueda">Volver</a>    

            <!-- Listar libros -->
            <table class="listtable">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Precio</th>
                        <th>Formato</th>
                        <th>Editorial</th>
                        <th>Fecha</th>
                        <th>Género</th>
                        <th>Imagen</th>
                        <th></th>
                        <?php if (isset($_SESSION['isadmin'])) { ?>
                            <th></th>
                            <th></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($this->books as $row) {
                        $book = new Libro();
                        $book = $row;
                    ?>
                        <tr>
                            <td><?php echo $book->title; ?></td>
                            <td><?php echo $book->author; ?></td>
                            <td><?php echo $book->isbn; ?></td>
                            <td><?php echo $book->price; ?></td>
                            <td><?php echo $book->format; ?></td>
                            <td><?php echo $book->publisher; ?></td>
                            <td><?php echo $book->pubdate; ?></td>
                            <td><?php echo $book->genre; ?></td>
                            <td><img src="<?php echo 'data:image/jpg;base64,' . base64_encode($book->image) ?>"></td>
                            <td><a class="btna btna-default" href="<?php echo constant('URL'); ?>catalogo/book/<?php echo $book->isbn; ?>">Ver</a></td>
                            <?php if (isset($_SESSION['isadmin'])) { ?>
                                <td><a class="btna btna-edit" href="<?php echo constant('URL'); ?>libreria/edit/<?php echo $book->isbn; ?>">Editar</a></td>
                                <td><a class="btna btna-delete" href="<?php echo constant('URL'); ?>libreria/delete/<?php echo $book->isbn; ?>">Eliminar</a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>