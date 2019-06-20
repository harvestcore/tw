<?php

    class Login extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->message = "";
            $this->view->randbook = null;
            $this->view->topauthors = null;
        }

        function render($whattorender) {
            $this->view->render('login/' . $whattorender);
        }
        
        function index() {
            require_once('models/libro.php');
            $aux = new Libro();
            $this->view->randbook = $aux->getrandombook();
            $this->loadtopauthors();
            $this->render('index');
        }

        function validate() {
            if (isset($_POST['login-username']) && isset($_POST['login-password'])) {
                $u = [
                    'username' => $_POST['login-username'],
                    'password' => $_POST['login-password']
                ];

                if ($this->model->validateuser($u)) {
                    if (session_status() == PHP_SESSION_NONE) session_start();
                    $_SESSION['username'] = $u['username'];
                    if ($this->model->isadmin($u['username']))
                        $_SESSION['isadmin'] = true;
                    header('Location: ' . constant('URL'));
                    die();
                } else {
                    $this->view->message = "Error al validar el usuario.";
                    $this->index();
                }
            }
        }

        function logout() {
            session_start();
            session_unset();
            session_destroy();
            header('Location: ' . constant('URL'));
            die();
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