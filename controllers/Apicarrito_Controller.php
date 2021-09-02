<?php
require_once 'entidades/carrito.php';
require_once 'vendor/autoload.php';

class Apicarrito_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localhost/prophp3bj/proyectoPHPComun/Apicarrito/completarcarrito
    public function completarcarrito()
    {
        $json = file_get_contents('php://input');
        //convierto en un array asociativo de php
        $jsonDecode = json_decode($json);
        $listaArticulos = $jsonDecode->lista;
        //$lista = $lista->;
        foreach ($listaArticulos as $key => $obj) {
            $articulo = new Carrito();
            $articulo->id = $obj->id;
            $articulo->cantidad = $obj->cantidad;
            $articulo->precio = $obj->precio;
            //$lista[] = $articulo;
            array_push($lista, $articulo);
        }
        $listaArticulos = [];
        $respuesta = [
            "datos" => $lista,
            "totalResultados" => count($listaArticulos),
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
