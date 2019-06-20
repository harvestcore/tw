<?php

    class Catalogo extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->message = "";
            $this->view->randbook = null;
            $this->view->topauthors = null;
        }

        function render($whattorender) {
            $this->view->render('catalogo/' . $whattorender);
        }

        function index() {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            $this->view->books = $this->model->getall();
            $this->render('index');
        }

        private function paramsok($type) {
            switch($type) {
                case 1: return isset($_POST['ped-condic']) && isset($_POST['ped-nomape']) && isset($_POST['ped-direccion']) && isset($_POST['ped-email']) && isset($_POST['ped-ntarjeta']) && isset($_POST['ped-mes']) && isset($_POST['ped-anno']) && isset($_POST['ped-cvc']) && isset($_POST['ped-isbn']);
            }
        }

        function isvalidluhn($number) {
            $num = preg_replace('/[^\d]/', '', $number);
            $sum = '';

            for ($i = strlen($num) - 1; $i >= 0; -- $i)
                $sum .= $i & 1 ? $num[$i] : $num[$i] * 2;

            return array_sum(str_split($sum)) % 10 === 0;
        }

        function buy($argv = null) {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            $this->view->book = $this->model->getbook($argv[0]);
            $this->render('buy');
        }

        private function order($order) {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            $this->view->orderbook = $this->model->getbook($order['isbn']);
            $this->view->ordercustomer = $order['customer'];

            $this->render('order');
        }

        function validateandbuy() {
            if ($this->paramsok(1)) {
                if ($this->isvalidluhn($_POST['ped-ntarjeta'])) {
                    if (strlen((string) $_POST['ped-cvc']) == 3) {
                        $info = false; $gift = false;
                        if (isset($_POST['ped-info'])) $info = true;
                        if (isset($_POST['ped-regalo'])) $gift = true;
    
                        $order = [
                            'isbn' => $_POST['ped-isbn'],
                            'customer' => [
                                'nomape' => $_POST['ped-nomape'],
                                'direccion' => $_POST['ped-direccion'],
                                'email' => $_POST['ped-email'],
                                'ntarjeta' => $_POST['ped-ntarjeta'],
                                'mes' => $_POST['ped-mes'],
                                'anno' => $_POST['ped-anno'],
                                'cvc' => $_POST['ped-cvc'],
                                'anno' => $_POST['ped-anno'],
                                'info' => $info,
                                'gift' => $gift
                            ]
                        ];
    
                        $this->order($order);
                    } else {
                        echo "cvc";
                    }
                } else {
                    echo "cc";
                }
            } else {
                echo "params";
            }
        }

        function book($argv = null) {
            $this->loadtopauthors();
            $this->view->randbook = $this->model->getrandombook();
            $this->view->book = $this->model->getbook($argv[0]);
            $this->render('book');
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