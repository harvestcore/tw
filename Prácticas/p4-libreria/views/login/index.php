<?php session_start(); ?>

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

            <form action="<?php echo constant('URL'); ?>login/validate" method="post">
                <p class="f-param">
                    <label for="login-username">Usuario</label>
                    <input type="text" name="login-username" id="" required>
                </p>
                <p class="f-param">
                    <label for="login-password">Contraseña</label>
                    <input type="password" name="login-password" id="" required>
                </p>
                <p class="f-param"> <input type="submit" value="Login"> </p> 
            </form>
        </div>

    </main>
    

    <?php require 'views/base/footer.php' ?>
</body>
</html>