 <html>
     <head></head>
     <body>
 <?php
 $conexion = mysqli_connect("localhost", "root", "1000794573", "ejemplo1") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select * from alumnos where correo='$_REQUEST[correo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
    ?>

        <div class="form-registrar">
            <div class="form">
                <h1>Cambio de Correo de Alumno</h1>
                <form class="reg-form" action="Update.php" method="post">
                    <div class="correo">
                        <label class="inputs"> <span>Correo</span> <input type="email" id="Correo" name="correonuevo"
                        value="<?php echo $reg['correo'] ?>">
                        </label>
                    </div>
                    <input type="hidden" name="correoviejo" value="<?php echo $reg['correo'] ?>">
                    <button class="btn" type="submit">Modificar</button>
                </form>
            </div>
        </div>
    <?php
    } else
        echo "No existe alumno con dicho correo";
    ?>
    </body>
    </html>