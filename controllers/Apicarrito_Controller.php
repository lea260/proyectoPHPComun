<?php
require_once 'entidades/carrito.php';
require_once 'vendor/autoload.php';
require_once 'auth/Auth.php';

class Apicarrito_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localhost/prophp3bj/proyectoPHPComun/Apicarrito/completarcarrito
    public function completarCarrito()
    {
        try {

            //apache
            $headers = apache_request_headers();
            $tokenAux = @$headers['Authorization'];

            //ngnix
            //$headers = $this->get_nginx_headers();
            //$tokenAux = @$headers['authorization'];
            $token = substr($tokenAux, 7, strlen($tokenAux));
            Auth::Check($token);
            $role = Auth::GetData($token)->role;
            if ($role != 'cliente') {
                throw new Exception("no tiene autorizacion");
            }

            $json = file_get_contents('php://input');
            //convierto en un array asociativo de php
            $datos = json_decode($json);
            $listaArticulos = $datos->lista;
            $usuario = $datos->usuario;
            //$lista = array();
            $lista = [];
            foreach ($listaArticulos as $key => $obj) {
                $articulo = new Carrito();
                $articulo->id = $obj->id;
                $articulo->cantidad = $obj->cantidad;
                $articulo->precio = $obj->precio;
                $lista[] = $articulo;
                //array_push($lista, $articulo);
            }
            $resultado = $this->model->completarCarrito($lista, $usuario);

            $respuesta = [
                "datos" => $lista,
                "totalResultados" => count($lista),
                "usuario" => $usuario,
                "resultado" => $resultado,
                "token" => $token,
            ];
            $this->view->respuesta = json_encode($respuesta);
            if ($resultado == false) {
                http_response_code(400);
                $this->view->respuesta = json_encode([
                    "resultado" => $resultado,
                    "respuesta" => "error al completar el pedido",
                ]);
            } else {
                http_response_code(200);
            }
            $this->view->render('api/carrito/completarcarrito');
            //code...

        } catch (Exception $e) {
            echo "<h1>" . $e->getMessage() . "</h1>";
            echo $headers;
            http_response_code(401);
        }
    }

    public function get_nginx_headers($function_name = 'getallheaders')
    {

        $all_headers = array();

        if (function_exists($function_name)) {

            $all_headers = $function_name();
        } else {

            foreach ($_SERVER as $name => $value) {

                if (substr($name, 0, 5) == 'HTTP_') {

                    $name = substr($name, 5);
                    $name = str_replace('_', ' ', $name);
                    $name = strtolower($name);
                    $name = ucwords($name);
                    $name = str_replace(' ', '-', $name);

                    $all_headers[$name] = $value;
                } elseif ($function_name == 'apache_request_headers') {

                    $all_headers[$name] = $value;
                }
            }
        }

        return $all_headers;
    }

}
