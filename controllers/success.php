<?php

class Success extends Controller
{

    public function __construct()
    {
        parent::__construct();

        //echo "Error al cargar el recurso";
    }

    public function nuevoAlumno()
    {
        $this->view->mensaje = "Nuevo alumno creado correctamente";
        $this->view->render('success/index');
    }
}
