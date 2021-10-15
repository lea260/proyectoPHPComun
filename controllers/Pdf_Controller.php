<?php

class Pdf_Controller extends Controller
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
        //$this->view->articulos = $this->model->get();
        $this->view->render('pdf/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function generar()
    {
        //$this->view->articulos = $this->model->get();
        $this->view->render('pdf/generar');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function generarPdf02()
    {
        //$this->view->articulos = $this->model->get();
        $this->view->render('pdf/generarPdf02');
        //var_dump($this);
        //var_dump($this->view);
    }

}
