<?php

    class Tiendas extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->message = "";
            $this->view->randbook = null;
        }

        function render($whattorender) {
            $this->view->render('tiendas/' . $whattorender);
        }
    
        function index() {
            $this->view->randbook = $this->model->getrandombook();
            $this->render('index');
        }
    }

?>