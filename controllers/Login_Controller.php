<?php

class Login_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    //base+login
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->alumnos = "cargado";
        $this->view->render('login/index');
    }

    public function ingresar()
    {
        //$alumnos = $this->model->get();
        //$this->view->alumnos = "exitoso";
        //$this->view->post = var_dump($_POST);

        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $modelo = $this->model->ingresar($nombre, $pass);

        $this->view->email = $email;
        $this->view->pass = $pass;
        $this->view->ingreso = "si";
        $this->view->render('login/ingresar');
    }
}
