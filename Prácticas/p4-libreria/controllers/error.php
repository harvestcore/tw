<?php

    class Errors extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->msj = "Error al cargar el recurso.";
            $this->view->render('error/index');
        }
    }
    
?>