<?php

class Administracion extends Controller {

    function __construct() {
        parent::__construct(); 
        $this->view->message = "";
        $this->view->stats = null;
    }

    function render($whattorender) {
        $this->view->render('administracion/' . $whattorender);
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
            case 1: return isset($_POST['user-username']) && isset($_POST['user-password']) && isset($_POST['user-email']) && isset($_POST['user-firstname']) && isset($_POST['user-surname']);
            case 2: return isset($_POST['user-username']) && isset($_POST['user-admin']) && isset($_POST['user-email']) && isset($_POST['user-firstname']) && isset($_POST['user-surname']);
            case 3: return isset($_POST['user-username']);
        }
    }

    function adduser() {
        if ($this->paramsok(1)) {
            $created = $this->model->insert([
                'username'     => $_POST['user-username'],
                'password'    => $_POST['user-password'],
                'email'      => $_POST['user-email'],
                'firstname'     => $_POST['user-firstname'],
                'surname'    => $_POST['user-surname']
            ]);

            if ($created) {
                $this->view->message = "Usuario agregado correctamente.";
            } else {
                $this->view->message = "Error al agregar usuario.";
            }
        } else {
            $this->view->message = "Error en los parámetros.";
        }

        $this->add();
    }

    function list() {
        $this->view->users = $this->model->getall();
        $this->render('list');
    }

    function edit($argv = null) {
        $this->view->user = $this->model->getuser($argv[0]);
        $this->render('edit');
    }

    function update() {
        if ($this->paramsok(2)) {
            $username   = $_POST['user-username'];
            $email      = $_POST['user-email'];
            $admin      = $_POST['user-admin'];
            $firstname  = $_POST['user-firstname'];
            $surname    = $_POST['user-surname'];
    
            if ($this->model->update(['username' => $username, 'email' => $email, 'admin' => $admin, 'firstname' => $firstname, 'surname' => $surname])) {
                $this->view->message = "Usuario modificado correctamente.";
            } else {
                $this->view->message = "Error al modificar el usuario.";
            }
        } else {
            $this->view->message = "Error en los parámetros.";
        }

        $this->view->user = $this->model->getuser($username);
        $this->render('edit');
    }

    function delete($argv = null) {
        $this->view->user = $this->model->getuser($argv[0]);
        $this->render('delete');
    }

    function remove() {
        if ($this->paramsok(3)) {
            $username = $_POST['user-username'];
            if ($this->model->delete(['username' => $username])) {
                $this->view->message = "Usuario eliminado correctamente.";
            } else {
                $this->view->message = "Error al eliminar el usuario.";
            }
        } else {
            $this->view->message = "Error en los parámetros.";
        }
        
        $this->list();
    }
}
