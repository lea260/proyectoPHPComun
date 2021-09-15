
<?php

require_once 'entidades/alumno.php';
require_once 'entidades/articulo.php';

class Apicarrito_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function completarCarrito($lista, $usuario)
    {
        //INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES (NULL, '1', '2021-09-23 16:27:40');
        //INSERT INTO `pedido` (`usuario_id`, `fecha`) VALUES ('1', '2021-09-02 16:01:29');

        //INSERT INTO `item` ( `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES ('2', '5', '25', '6');
        $pdo = $this->db->connect();
        $pdo->beginTransaction();
        //'2021-09-23 16:27:40')
        try {
            $fecha = date('Y-m-d H:i:s', time());
            $query = $pdo->prepare('insert into pedido (usuario_id, fecha) VALUES (:idUsuario, :fecha)');
            $query->bindParam(':idUsuario', $usuario);
            $query->bindParam(':fecha', $fecha);
            $lastInsertId = 0;
            if ($query->execute()) {
                $lastInsertId = $pdo->lastInsertId();
            } else {
                //Pueden haber errores, como clave duplicada
                $lastInsertId = -1;
                //echo $consulta->errorInfo()[2];
            }
            $query = $pdo->prepare('insert into item ( articulo_id, cantidad, precio, pedido_id) VALUES (:articulo_id, :cantidad, :precio, :pedido_id)');
            foreach ($lista as $key => $articulo) {
                # code...
                $query->bindParam(':articulo_id', $articulo->id);
                $query->bindParam(':cantidad', $articulo->cantidad);
                $query->bindParam(':precio', $articulo->precio);
                $query->bindParam(':pedido_id', $lastInsertId);
                $query->execute();
            }
            //:descripcion, :precio, :fecha
            //$query->close();
            $pdo->commit();
            return $lastInsertId;
        } catch (PDOException $e) {
            $pdo->rollBack();
            return false;
        } finally {
            $pdo = null;
        }
    }

}
