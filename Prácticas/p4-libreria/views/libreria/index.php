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
            <h3>Estadísticas</h3>
            <table class="listtable">
                <thead>
                    <tr>
                        <th>Nº Libros</th>
                        <th>Nº Autores</th>
                        <th>Nº Formatos</th>
                        <th>Nº Géneros</th>
                        <th>Nº Editoriales</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <tr>
                        <td><?php echo $this->stats['noofbooks']; ?></td>
                        <td><?php echo $this->stats['noofauthors']; ?></td>
                        <td><?php echo $this->stats['noofformats']; ?></td>
                        <td><?php echo $this->stats['noofgenres']; ?></td>
                        <td><?php echo $this->stats['noofpublishers']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>