<?php

    class Controller {

        function __construct() {
            $this->view = new View();
        }

        function loadModel($model) {
            $path = 'models/' . $model . '.php';

            if (file_exists($path)) {
                require $path;

                $this->model = new $model();
            }
        }
    }

?>