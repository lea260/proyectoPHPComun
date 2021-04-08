<?php

class Nuevo_Controller extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";

    }

    public function render()
    {
        $this->view->render('nuevo/index');
    }

    public function crear()
    {
        //var_dump($this); //desplegar los detalles de una variable
        //echo 'ejecutando crear';
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            //header('location: '.constant('URL').'nuevo/alumnoCreado');
            $this->view->mensaje = "Alumno creado correctamente";
            $this->view->render('nuevo/index');
        } else {
            $this->view->mensaje = "La matrícula ya está registrada";
            $this->view->render('nuevo/index');
        }
    }

}
