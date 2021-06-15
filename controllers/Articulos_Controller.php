<?php
require_once 'entidades/articulo.php';

class Articulos_Controller extends Controller
{
    public function __construct()
    {

        $cambio = "a eliminar";
        parent::__construct();
        $this->view->mensaje = "";
    }

    //http://localhost/prophp3bj/proyectoPHPComun/articulos
    public function render()
    {
        $articulos = $this->model->get();
        $this->view->articulos = $articulos;
        $this->view->render('articulos/index');
    }

    public function verArticulo($param = null)
    {
        $idAlumno = $param[0];
        $alumno = $this->model->verArticulo($idArticulo);

        $_SESSION["id_verAlumno"] = $alumno->matricula;

        $this->view->alumno = $alumno;
        $this->view->render('articulos/detalle');
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
        $this->view->render('articulos/detalle');
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
        echo $mensaje;
    }

}
