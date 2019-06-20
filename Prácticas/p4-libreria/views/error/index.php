<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'views/base/head.php' ?>
</head>
<body>
    <?php require 'views/base/header.php';
          require 'views/base/topnav.php' ?>

    <main class="container">
        <h1 class="error"><?php echo $this->msj; ?></h1>
        <?php require 'views/base/sidebar.php'; ?>
    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>