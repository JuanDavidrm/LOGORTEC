<html>

<head>
    <meta charset="utf-8">
    <title>Eliminar</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "1000794573", "proyecto") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select nombres from usuarios where nombres=$_REQUEST[nombres]") or die("Problemas en el select:" .
        mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from usuarios where nombres=$_REQUEST[nombres]") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del usuario con el nombre.";
    } else {
        echo "No existe un usuario con ese nombre lo siento intente con otro.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>