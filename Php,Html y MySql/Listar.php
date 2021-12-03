<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

 $conexion = mysqli_connect("localhost", "root", "1000794573", "ejemplo1") or die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select codigo,Nombres,Correo,codigocurso from alumnos") or die("Problemas en el select:" . mysqli_error($conexion));
while ($reg = mysqli_fetch_array($registros)) {
        echo "codigo: " . $reg['codigo'] . "<br>";
        echo "Nombres: " . $reg['Nombres'] . "<br>";
        echo "Correo: " . $reg['Correo'] . "<br>";
        echo "codigo: " . $reg['codigocurso'] . "<br>";
    }
    mysqli_close($conexion);
    
?>   
</body>
</html>