<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\ArrayLoader([
        'index' => '<h1>Hola {{ arg1 }} {{ arg2 }}!</h1>',
    ]);
    
    $twig = new \Twig\Environment($loader);
    
    echo $twig->render('index', ['arg1' => 'Tecnologías', 'arg2' => 'Web']);
?>