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
            
            <a class="btna btna-default" href="<?php echo constant('URL'); ?>administracion">Volver</a>

            <!-- Listar usuarios -->
            <table class="listtable">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                    
                <tbody>
                        <?php 
                    foreach ($this->users as $row) {
                        $user = new Usuario();
                        $user = $row;
                        ?>
                    <tr>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->admin; ?></td>
                        <td><?php echo $user->firstname; ?></td>
                        <td><?php echo $user->surname; ?></td>
                        <td><a class="btna btna-edit" href="<?php echo constant('URL'); ?>administracion/edit/<?php echo $user->username; ?>">Editar</a></td>
                        <td><a class="btna btna-delete" href="<?php echo constant('URL'); ?>administracion/delete/<?php echo $user->username; ?>">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>