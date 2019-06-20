<?php

    class Main extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->randbook = null;
            $this->view->topauthors = null;
        }

        function render() {
            $this->view->render('main/index');
        }

        function index() {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            $this->render('index');
        }

        private function loadtopauthors() {
            if ($this->view->topauthors == null) {
                require_once('models/libro.php');
                $aux = new Libro();
                $this->view->topauthors = $aux->gettopauthors();
            }
        }
    }

?>