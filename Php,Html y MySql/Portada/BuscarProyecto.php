<html>
<head>
<title>Buscar</title>
</head>
<body>
<?php

 $conexion = mysqli_connect("localhost", "root", "1000794573", "proyecto") or die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select Nombres,Correo,Contraseña from usuarios where Nombres=$_REQUEST[Nombres]") or die
("Problemas en el select:" . mysqli_error($conexion)); if ($reg = mysqli_fetch_array($registros)) {
        echo "Nombres: " . $reg['Nombres'] . "<br>";
        echo "Correo: " . $reg['Correo'] . "<br>";
        echo "codigo: " . $reg['Contraseña'] . "<br>";
    }
    mysqli_close($conexion);
    
?>   
</body>
</html>