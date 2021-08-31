<?php
require_once 'entidades/carrito.php';
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
        $json = file_get_contents('php://input');
        //convierto en un array asociativo de php
        $datos = json_decode($json);
        $listaArticulos = $datos->lista;
        $lista = [];
        foreach ($listaArticulos as $key => $obj) {
            $articulo = new Carrito();
            $articulo->id = $obj->id;
            $articulo->cantidad = $obj->cantidad;
            $articulo->precio = $obj->precio;
            //$lista[] = $articulo;
            array_push($lista, $articulo);

            $respuesta = [
                "datos" => $lista,
                "totalResultados" => count($lista),
            ];
            $this->view->respuesta = json_encode($respuesta);

            $this->view->render('api/carrito/completarcarrito');
            //var_dump($this);
            //var_dump($this->view);
            //$this->view->render('apilea/articulos/index');
            //var_dump($this);
            //var_dump($this->view);
        }
    }

}
