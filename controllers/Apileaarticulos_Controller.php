<?php
require 'entidades/articulo.php';

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

    public function crear()
    {
        //obtengo los datos de la peticion http, post body
        $json = file_get_contents('php://input');
        //convierto en un array asociativo de php
        $obj = json_decode($json);
        $articulo = new Articulo();
        $articulo->id = $obj->id;
        $articulo->nombre = $obj->nombre;
        $articulos = $this->model->get();
        $this->view->articulos = json_encode($articulos);
        $this->view->json = json_encode($articulo);
        $respuesta = [
            "datos" => $obj,
            "totResultado" => 2,
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('apilea/articulos/crear');
        //var_dump($this);
        //var_dump($this->view);
    }

}
