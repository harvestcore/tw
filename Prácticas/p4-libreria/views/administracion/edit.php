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

            <a class="btna btna-default" href="<?php echo constant('URL'); ?>administracion/list">Volver</a>
            
            <!-- Agregar usuario -->
            <form action="<?php echo constant('URL'); ?>administracion/update" method="POST">
                <p class="f-param">
                    <label for="user-username">Usuario</label>
                    <input type="text" name="user-username" id="" required value="<?php echo $this->user->username; ?>" readonly="readonly">
                </p>
                <p class="f-param">
                    <label for="user-email">Email</label>
                    <input type="email" name="user-email" id="" required value="<?php echo $this->user->email; ?>">
                </p>
                <p class="f-param">
                    <label for="user-admin">Admin</label>
                    <input type="text" name="user-admin" id="" required value="<?php echo $this->user->admin; ?>">
                </p>
                <p class="f-param">
                    <label for="user-firstname">Nombre</label>
                    <input type="text" name="user-firstname" id="" required value="<?php echo $this->user->firstname; ?>">
                </p>
                <p class="f-param">
                    <label for="user-surname">Apellido</label>
                    <input type="text" name="user-surname" id="" required value="<?php echo $this->user->surname; ?>">
                </p>
                <p class="f-param"> <input type="submit" value="Actualizar usuario"> </p> 
            </form>
        </div>
                
    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>