<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "",
"clientes") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select
id,nombre,sexo,direccion,correo,fechanac,telefono,edad
from usuarios") or
die("Problemas en el select:" . mysqli_error($conexion));
while ($reg = mysqli_fetch_array($registros)) {
echo "Id:" . $reg['id'] . "<br>";
echo "Nombre:" . $reg['nombre'] . "<br>";
echo "Sexo:" . $reg['sexo'] . "<br>";
echo "Direccion:" . $reg['direccion'] . "<br>";
echo "Correo:" . $reg['correo'] . "<br>";
echo "FechaNac:" . $reg['fechanac'] . "<br>";
echo "Telefono:" . $reg['telefono'] . "<br>";
echo "Edad:" . $reg['edad'] . "<br>";
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
echo "OTROS";
break;
}
echo "<br>";
echo "<br>";
}
mysqli_close($conexion);
?>
</body>
</html>