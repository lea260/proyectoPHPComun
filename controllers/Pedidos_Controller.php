<?php

class Pedidos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->mensaje2 = "";
        $this->view->mensaje3 = "";
    }

    public function render()
    {
        $this->view->articulos = $this->model->get();
        $this->view->render('pedidos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

}
