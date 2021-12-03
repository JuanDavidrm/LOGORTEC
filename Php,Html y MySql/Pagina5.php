<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "",
"clientes") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select id,nombre,correo
from usuarios where id=$_REQUEST[id]") or
die("Problemas en el select:" . mysqli_error($conexion));
if($reg = mysqli_fetch_array($registros)) {
echo "Id:" . $reg['id'] . "<br>";
echo "Nombre:" . $reg['nombre'] . "<br>";
echo "Correo:" . $reg['correo'] . "<br>";

switch ($reg['id'])
{
case 1:
echo "PHP";
break;
case 2:
echo "ASP";
break;
case 3:
echo "JSP";
break;
case 4:
echo "OTRO";
break;
  }
}else {
echo "No existe un usuario con ese id";
}
mysqli_close($conexion);
?>
</body>
</html>