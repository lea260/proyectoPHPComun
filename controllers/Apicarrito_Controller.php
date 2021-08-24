<?php
require_once 'entidades/articulo.php';
require_once 'vendor/autoload.php';

class Apicarrito_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localahost/prophp3bj/proyectoPHPComun/Api260260articulos
    public function completarCarrito()
    {

        $listaArticulos = $this->model->listar();
        $respuesta = [
            "datos" => $listaArticulos,
            "totalResultados" => count($listaArticulos),
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('api/articulos/completarCarrito');
        //var_dump($this);
        //var_dump($this->view);
        //$this->view->render('apilea/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

}
