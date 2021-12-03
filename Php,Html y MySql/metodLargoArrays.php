<html>
<head>
<title> Introduccion a los arrays metodo largo</title>
</head>
<body>
<h1> Introduccion </h1>

<P> A continuacion escribiremos los arrays con metodo largo </p>

<p>
    <?php

    /* 
    Este es el metodo largo para la creacion de arrays donde cada uno de los arreglos,
    esta en  una  linea diferente, junto con su calor de indice correspondiente.
    */

    $dia[0]= "domingo";
    $dia[1]= "lunes";
    $dia[2]= "martes";
    $dia[3]= "miercoles";
    $dia[4]= "jueves";
    $dia[5]= "viernes";
    $dia[6]= "sabado";


        // mostrar los dias marcados , Lunes,Miercoles y Viernes


    echo $dia[1];
    echo "<br>";
    echo $dia[3];
    echo "<br>";
    echo $dia[5];
    echo "<br>";
    echo "<br>";
    echo "solo los dias llamados...!";
?>
</p>
</body>
</html>