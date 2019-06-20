<?php 
    require('views/utilities.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        drawhead();
    ?>
</head>
<body>
    <?php
        drawheader();
        drawtopbar();
    ?>

    <main class="container">
        <?php
            drawsidebar();
            drawevents();
        ?>       
    </main>

    <footer>
        <?php
            drawfooter();
        ?> 
    </footer>
</body>
</html>