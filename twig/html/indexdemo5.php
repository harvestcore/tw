<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    $json = file_get_contents("./repos.json");
    $data = json_decode($json, true);

    echo $twig->render('listados.html', compact('data'));
?>