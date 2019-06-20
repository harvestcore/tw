<nav class="top-menu">
    <a href="<?php echo constant('URL'); ?>main">Inicio</a>   
    
    <a href="<?php echo constant('URL'); ?>catalogo">Catálogo</a>
    <a href="<?php echo constant('URL'); ?>busqueda">Búsqueda</a>
    <a href="<?php echo constant('URL'); ?>tiendas">Tiendas</a>
    
    <?php if(isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == true) { ?>
        <div class="dropdown">
            <a href="<?php echo constant('URL'); ?>libreria">Librería</a>
            <div class="dropdown-content">
                <a href="<?php echo constant('URL'); ?>libreria/add">Agregar libro</a>
                <a href="<?php echo constant('URL'); ?>libreria/list">Listar libros</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="<?php echo constant('URL'); ?>administracion">Administración</a>
            <div class="dropdown-content">
                <a href="<?php echo constant('URL'); ?>administracion/add">Agregar usuario</a>
                <a href="<?php echo constant('URL'); ?>administracion/list">Listar usuarios</a>
            </div>
        </div>
    <?php } ?>

    <?php if(!isset($_SESSION['username'])) { ?>
        <a href="<?php echo constant('URL'); ?>login">Login</a>
    <?php } else { ?>
        <a href="<?php echo constant('URL'); ?>login/logout">Logout</a>
    <?php } ?>

    <?php if (isset($_SESSION['username'])) echo 'Hola ' . $_SESSION['username']; else echo "Hola, anónimo."; ?>
</nav>