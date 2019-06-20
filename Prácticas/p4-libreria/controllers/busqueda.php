<?php

    class Busqueda extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->message = "";
            $this->view->randbook = null;
            $this->view->topauthors = null;
        }

        function render($whattorender) {
            $this->view->render('busqueda/' . $whattorender);
        }
    
        function index() {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            $this->view->genres = $this->model->getgenres();
            $this->render('index');
        }

        function search() {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            
            if (isset($_POST['search-param']) && $_POST['search-param'] != '') {
                $this->view->books = $this->model->getbooksregex($_POST['search-param']);
                $this->view->message = $_POST['search-param'];
                $this->render('list');
            } else if (isset($_POST['search-genre']) && $_POST['search-genre'] != '-') {
                $this->view->books = $this->model->getbygenre($_POST['search-genre']);
                $this->view->message = $_POST['search-genre'];
                $this->render('list');
            } else {
                $this->view->message = "Introduce un patrón de búsqueda.";
                $this->index();
            }
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