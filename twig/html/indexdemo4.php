<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    $car1 = [
        'name' => '<h1>Mercedes Benz</h1>',
        'color' => 'Rojo',
        'id' => '5566ABC'
    ];
    
    $car2 = [
        'name' => 'aston martin',
        'color' => 'verde',
        'id' => '7788ABC'
    ];

    $car3 = [
        'name' => 'bmw',
        'color' => 'Azul',
        'id' => '1122ABC'
    ];

    $cars = compact('car1', 'car2', 'car3');

    echo $twig->render('base4.html', compact('car1', 'car2', 'car3', 'cars'));
?>