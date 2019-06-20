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
            
            <div class="search-form">
                <h2>Búsqueda de ejemplares</h2>
                <form action="<?php echo constant('URL'); ?>busqueda/search" method="POST">
                    <p class="f-param">
                        <label for="search-param">Búsqueda</label>
                        <input type="text" name="search-param" id="">
                    </p>
                    <p class="f-param">
                        <label for="search-genre">Género</label>
                        <select name="search-genre" id="">
                            <option value="-">Género</option>
                            <?php foreach($this->genres as $genre) { ?>
                                <option value="<?php echo $genre['genre'] ?>"><?php echo $genre['genre'] ?></option>
                            <?php } ?>
                        </select>
                    </p>
                    <p class="f-param"> <input type="submit" value="Buscar"> </p> 
                </form>
            </div>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>