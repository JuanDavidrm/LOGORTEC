<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "",
"clientes") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select id
from usuarios
where id=$_REQUEST[id]") or
die("Problemas en el select:" .
mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
mysqli_query($conexion, "delete from usuarios
where id=$_REQUEST[id]") or
die("Problemas en el select:" .
mysqli_error($conexion));
echo "Se efectuó el borrado del usuario con el
id digitado.";
} else {
echo "No existe un ausuario con ese id lo
siento intente con otro.";
}
mysqli_close($conexion);
?>
</body>
</html>