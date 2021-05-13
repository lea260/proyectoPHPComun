<?php

class Apileaarticulos_Controller extends Controller
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

        $this->view->render('apilea/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function listar()
    {
        $articulos = $this->model->get();
        $this->view->articulos = json_encode($articulos);
        $this->view->render('apilea/articulos/listar');
        //var_dump($this);
        //var_dump($this->view);
    }

}
