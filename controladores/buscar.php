<?php

require "confi/conex.php";


$now = $_POST["now"];


$sql = "SELECT cod, fecha_Sys, nombre, dueno, celular, email FROM datos WHERE nombre like '%" . $now . "%'";


echo "<table border='4'>
<tr>
    <th>codigo</th>
    <th>nombre</th>
    <th>nombre dueno</th>
    <th>celular</th>
    <th>email</th>
    <th>fecha Sys</th>
</tr>";


foreach ($dbh->query($sql) as $row) {
    $cod = $row['cod'];
    $fecha = $row['fecha_Sys'];
    $nombre = $row['nombre'];
    $dueno = $row['dueno'];
    $celular = $row['celular'];
    $email = $row['email'];


    echo "<tr>
    <td>$cod</td>
    <td>$nombre</td>
    <td>$dueno</td>
    <td>$celular</td>
    <td>$email</td>
    <td>$fecha</td>
    </tr>";
}


echo "</table>";

?>
