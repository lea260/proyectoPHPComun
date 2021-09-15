SELECT p.id as id, nombre, fecha FROM `pedido` p
INNER JOIN usuarios u
on p.usuario_id=u.id