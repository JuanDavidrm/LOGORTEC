<html>
<head>
<title>Update</title>
</head>
<body>
<?php
$conexion =
mysqli_connect("localhost", "root", "1000794573","ejemplo1") or
die("Problemas con la conexión");
mysqli_query($conexion, "update alumnos set
correo='$_REQUEST[correonuevo]' where
correo='$_REQUEST[correoviejo]'") or
die("Problemas en el select:" .
mysqli_error($conexion));
echo "El correo fue modificado con exito";
?>
</body>
</html>