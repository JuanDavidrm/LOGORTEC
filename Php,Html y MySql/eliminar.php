<html>

<head>
    <meta charset="utf-8">
    <title>Eliminar</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "1000794573", "ejemplo1") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select codigo from alumnos where codigo=$_REQUEST[codigo]") or die("Problemas en el select:" .
        mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from alumnos where codigo=$_REQUEST[codigo]") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del alumno con la identificacion digitada.";
    } else {
        echo "No existe un alumno con esa identificacion lo siento intente con otro.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>