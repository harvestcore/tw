<?php

    require_once 'controllers/error.php';

    class App {

        function __construct() {
            
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if (empty($url[0])) {
                $controllerPath = 'controllers/main.php';
                require_once $controllerPath;
                $controller = new Main();
                $controller->loadModel('libro');
                $controller->index();
                
                return false;
            }
        
            $controllerPath = 'controllers/' . $url[0] . '.php';

            if (file_exists($controllerPath)){
                require_once $controllerPath;
                $controller = new $url[0];

                switch($url[0]) {
                    case 'main': $controller->loadModel('libro'); break;
                    case 'libreria': $controller->loadModel('libro'); break;
                    case 'catalogo': $controller->loadModel('libro'); break;
                    case 'busqueda': $controller->loadModel('libro'); break;
                    case 'tiendas': $controller->loadModel('libro'); break;
                    case 'administracion': $controller->loadModel('usuario'); break;
                    case 'login': $controller->loadModel('usuario'); break;
                    default: $controller->loadModel('$url[0]'); break;
                }

                $nargs = sizeof($url);

                if ($nargs > 2) {
                    $args = [];
                    for ($i = 2; $i < $nargs; $i++) {
                        array_push($args, $url[$i]);
                    }

                    $controller->{$url[1]}($args);
                } else {
                    if (isset($url[1])) {
                        $controller->{$url[1]}();
                    } else {
                        $controller->index();
                    }
                }

            } else {
                $controller = new Errors();
            }


        
        }
    }
?>