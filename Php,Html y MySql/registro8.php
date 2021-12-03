<html>
<html>
<head>
<title>Ingresar Alumno </title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "1000794573", "ejemplo1") or die("Problemas con la conexión");
mysqli_query($conexion, "insert into alumnos(Codigo,Nombres,Correo,codigocurso) values ($_REQUEST[codigo],'$_REQUEST[nombres]','$_REQUEST[correo]',$_REQUEST[codigocurso])")
or die("Problemas en el select" .mysqli_error($conexion)); mysqli_close($conexion);
echo "El ususario fue Ingresado Exitosamente! ";
?>
</body>
</html>