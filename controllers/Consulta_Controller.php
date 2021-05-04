<?php

class Consulta_Controller extends Controller
{
    public function __construct()
    {

        $cambio = "a eliminar";
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
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function verAlumno($param = null)
    {
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);

        $_SESSION["id_verAlumno"] = $alumno->matricula;

        $this->view->alumno = $alumno;
        $this->view->render('consulta/detalle');
    }

    public function actualizarAlumno($param = null)
    {
        //seguridad
        var_dump($_SESSION);
        //por eso lo recupera, de la sesion

        $matricula = $_SESSION["id_verAlumno"];
        //$matricula = $_POST["matricula"];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        //da error la segunda vez
        //borra la variable $_SESSION['id_verAlumno']
        //unset($_SESSION['id_verAlumno']);

        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        } else {
            $this->view->mensaje = "No se pudo actualizar al alumno";
        }
        $this->view->render('consulta/detalle');
    }

    public function eliminarAlumno($param = null)
    {
        $matricula = $param[0];

        if ($this->model->delete($matricula)) {
            $mensaje = "Alumno eliminado correctamente";
            //$this->view->mensaje = "Alumno eliminado correctamente";
        } else {
            $mensaje = "No se pudo eliminar al alumno";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }

        //$this->render();

        echo $mensaje;
    }

}
