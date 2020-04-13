<?php

$conexion=mysqli_connect('localhost','root','','prueba');

?>


<!DOCTYPE html>
<html>
<head>
    <title>Datos Peliculas</title>
</head>
<body>

<br>

<table border="1" >
    <tr>
        <td>Codigo</td>
        <td>Titulo</td>
        <td>Autor</td>
    </tr>

    <?php
    $sql="SELECT * from pelicula";
    $result=mysqli_query($conexion,$sql);

    while($datos=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $datos['Codigo'] ?></td>
            <td><?php echo $datos['Titulo'] ?></td>
            <td><?php echo $datos['Autor'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>