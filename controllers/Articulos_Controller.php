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
        $idArticulo = $param[0];
        $articulo = $this->model->verArticulo($idArticulo);

        $_SESSION["id_articulo"] = $idArticulo;

        $this->view->articulo = $articulo;
        $this->view->render('articulos/verArticulo');
    }

    public function actualizar($param = null)
    {
        $articulo = new Articulo();
        $articulo->id = $_POST['id'];
        $articulo->codigo = $_POST['codigo'];
        $articulo->descripcion = $_POST['descripcion'];
        $articulo->precio = $_POST['precio'];
        $articulo->fecha = $_POST['fecha'];
        $resultado = $this->model->actualizar($articulo);
        $this->view->respuesta = $resultado;
        $this->view->render('articulos/actualizar');
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
