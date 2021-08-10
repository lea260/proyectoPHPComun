<?php
require_once 'entidades/articulo.php';

class Carrito_Controller extends Controller
{
    public function __construct()
    {

        $cambio = "a eliminar";
        parent::__construct();
        $this->view->mensaje = "";
    }

    //http://localhost/prophp3bj/proyectoPHPComun/carrito
    public function render()
    {
        //$articulos = $this->model->get();
        //$this->view->articulos = $articulos;
        $this->view->render('carrito/index');
    }

}
