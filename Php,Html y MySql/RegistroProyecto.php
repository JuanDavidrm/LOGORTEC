<html>
<html>
<head>
<title>Ingresar Usuario</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "1000794573", "proyecto") or die("Problemas con la conexión");
mysqli_query($conexion, "insert into usuarios(Nombres,Correo,Contraseña) values ('$_REQUEST[nombres]','$_REQUEST[correo]',$_REQUEST[contraseña])")
or die("Problemas en el select" .mysqli_error($conexion)); mysqli_close($conexion);
echo "El ususario fue Ingresado Exitosamente! ";
?>
</body>
</html>