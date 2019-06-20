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

            <div class="tiendas">
                <h2>Nuestras tiendas</h2>
                <table>
                    <tr>
                        <td><img src="public/img/libreria1.jpg" alt="La librería"></td>
                        <td>La librería</td>
                        <td rowspan="2">Madrid</td>
                        <td>Calle Pelayo, 52, 28004</td>
                        <td>915556660</td>
                    </tr>
                    <tr>
                        <td><img src="public/img/libreria2.jpg" alt="Barco de papel"></td>
                        <td>Barco de papel</td>
                        <td>Calle San Lorenzo, 11, 28004</td>
                        <td>916665550</td>
                    </tr>
                    <tr>
                        <td><img src="public/img/libreria3.jpg" alt="Librería Picasso"></td>
                        <td>Librería Picasso</td>
                        <td>Granada</td>
                        <td>Calle San Isidro, 5, 18005</td>
                        <td>958444777</td>
                    </tr>
                </table>
            </div>
        </div>

    </main>
    

    <?php require 'views/base/footer.php' ?>
</body>
</html>