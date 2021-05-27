<?php
require_once 'entidades/articulo.php';

class Api260260articulos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localahost/prophp3bj/proyectoPHPComun/Api260260articulos
    public function render()
    {

        $this->view->render('apilea/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

}
