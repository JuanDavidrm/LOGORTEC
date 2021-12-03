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
($_REQUEST[Id],'$_REQUEST[Nombre]','$_REQUEST[Sexo]','$_REQUEST[Direccion]','$_REQUEST[Correo]','$_REQUEST[FechaDeNacimiento]'
,$_REQUEST[Telefono],$_REQUEST[Edad])")
or die("Problemas en el select" .
mysqli_error($conexion));
echo "El ususario fue Ingresado Exitosamente! ";

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
        echo "Se efectuó el borrado del usuario con el id digitado.";
      
         mysqli_close($conexion);
          
?>
</body>
</html>