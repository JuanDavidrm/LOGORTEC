<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "", "clientes") or die("Problemas con la conexión");
mysqli_query($conexion, "insert into usuarios(Id,Nombre,Sexo,Direccion,Correo,fechanac,Telefono,Edad) values
($_REQUEST[Id],'$_REQUEST[Nombre]','$_REQUEST[Sexo]','$_REQUEST[Direccion]','$_REQUEST[Correo]','$_REQUEST[FechaNac]'
,$_REQUEST[Telefono],$_REQUEST[Edad])")
or die("Problemas en el select" .
mysqli_error($conexion));
mysqli_close($conexion);
echo "El ususario fue Ingresado Exitosamente! ";
?>
</body>
</html>