<?php

class Axel_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    public function render()
    {

        $this->view->alumnos = $alumnos;
        $this->view->render('axel/index');
        //var_dump($this);
        //var_dump($this->view);
    }

}
