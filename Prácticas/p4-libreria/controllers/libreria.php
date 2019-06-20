<?php

    class Libreria extends Controller {

        function __construct() {
            parent::__construct(); 
            $this->view->message = "";
            $this->view->stats = null;
        }

        function render($whattorender) {
            $this->view->render('libreria/' . $whattorender);
        }

        function index() {
            $this->view->stats = $this->model->getstats();
            $this->render('index');
        }

        function add() {
           $this->render('add');
        }

        private function paramsok($type) {
            switch($type) {
                case 1: return isset($_POST['book-title']) && isset($_POST['book-author']) && isset($_POST['book-isbn']) && isset($_POST['book-price']) && isset($_POST['book-format']) && isset($_POST['book-publisher']) && isset($_POST['book-pubdate']) && isset($_POST['book-genre']);
                case 3: return isset($_POST['book-isbn']);
            }
        }

        function addbook() {
            $image = null;
            if ($_FILES['book-image']['size'] != 0)
                $image = file_get_contents($_FILES['book-image']['tmp_name']);
            
            if ($this->paramsok(1)) {
                $created = $this->model->insert([
                    'booktitle'     => $_POST['book-title'],
                    'bookauthor'    => $_POST['book-author'],
                    'bookisbn'      => $_POST['book-isbn'],
                    'bookprice'     => $_POST['book-price'],
                    'bookformat'    => $_POST['book-format'],
                    'bookpublisher' => $_POST['book-publisher'],
                    'bookpubdate'   => $_POST['book-pubdate'],
                    'bookgenre'     => $_POST['book-genre'],
                    'bookimage'     => $image
                ]);
                
                if ($created) {
                    $this->view->message = "Libro agregado correctamente.";
                } else {
                    $this->view->message = "Error al agregar el libro.";
                }
            } else {
                $this->view->message = "Error en los argumentos.";
            }

            $this->add();
        }

        function list() {
            $this->view->books = $this->model->getall();
            $this->render('list');
        }

        function edit($argv = null) {
            $this->view->book = $this->model->getbook($argv[0]);
            $this->render('edit');
        }
    
        function update() {
            if ($this->paramsok(1)) {
                $title      = $_POST['book-title'];
                $author     = $_POST['book-author'];
                $isbn       = $_POST['book-isbn'];
                $price      = $_POST['book-price'];
                $format     = $_POST['book-format'];
                $publisher  = $_POST['book-publisher'];
                $pubdate    = $_POST['book-pubdate'];
                $genre      = $_POST['book-genre'];
    
                if ($this->model->update(['title' => $title, 'author' => $author, 'isbn' => $isbn, 'price' => $price, 'format' => $format, 'publisher' => $publisher, 'pubdate' => $pubdate, 'genre' => $genre])) {
                    if ($_FILES['book-image']['size'] != 0) {
                        $image = file_get_contents($_FILES['book-image']['tmp_name']);
                        if ($this->model->updateimage(['isbn' => $isbn, 'image' => $image]))
                            $this->view->message = "Libro e imagen modificados correctamente.";
                    } else
                        $this->view->message = "Libro modificado correctamente.";
                } else {
                    $this->view->message = "Error al modificar el libro.";
                }
               
                $this->view->book = $this->model->getbook($isbn);
                $this->render('edit');
            } else {
                $this->view->message = "Error en los argumentos.";
            }

            $this->render('edit');
        }
    
        function delete($argv = null) {
            $this->view->book = $this->model->getbook($argv[0]);
            $this->render('delete');
        }
    
        function remove() {
            if ($this->paramsok(3)) {
                $isbn = $_POST['book-isbn'];
                if ($this->model->delete(['isbn' => $isbn])) {
                    $this->view->message = "Libro eliminado correctamente.";
                } else {
                    $this->view->message = "Error al eliminar el libro.";
                }
            } else {
                $this->view->message = "Error al eliminar el libro.";
            }
            
            $this->list();
        }
    }

?>