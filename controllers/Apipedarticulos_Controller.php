<?php
class Apipedarticulos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    public function render()
    {

        /*ejecuta
        si solo paso http://localhost/controlador
         */
        //$alumnos = $this->view->datos = $this->model->get();
        //var_dump($this);
        //el modelo esta cargado de antes, en APP
        /*controlador_Model*/
        /* this->model tiene el modelo */
        //
        //$alumnos = $this->view->datos = $this->model->get();
        //var_dump($this);
        $this->view->alumnos = "cargado"; /*evita un error*/
        $this->view->render('apipedro/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function listar()
    {

        /*ejecuta
        si solo paso http://localhost/controlador
         */
        //$alumnos = $this->view->datos = $this->model->get();
        //var_dump($this);
        //el modelo esta cargado de antes, en APP
        /*controlador_Model*/
        /* this->model tiene el modelo */
        //
        //$alumnos = $this->view->datos = $this->model->get();
        //var_dump($this);
        $this->view->alumnos = "cargado"; /*evita un error*/
        $this->view->render('apipedro/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

}
