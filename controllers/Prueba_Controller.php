<?php

class Prueba_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->mensaje2 = "";
        $this->view->mensaje3 = "";
    }

    //http://localhost/prophp3bj/proyectoPHPComun/prueba02
    public function render()
    {

        //$this->view->render('prueba/index');
        $this->view->render('prueba/index');
        //var_dump($this);
        //var_dump($this->view);
    }

}
