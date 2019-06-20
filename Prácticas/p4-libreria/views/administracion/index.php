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
                        <th>Nº Users</th>
                        <th>Nº Admins</th>
                        <th>Admin usernames</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <tr>
                        <td><?php echo $this->stats['noofusers']; ?></td>
                        <td><?php echo $this->stats['noofadmins']; ?></td>
                        <td>
                            <?php foreach($this->stats['admins'] as $name) { echo $name[0] . " "; } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>