<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);
    
    echo $twig->render('base2.html', ['nombre' => 'Ángel']);
?>