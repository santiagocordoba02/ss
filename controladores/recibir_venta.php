<?php
// Paso 1: importar la libreria
require "../Confi/conex.php";

// Paso 2: Verificar si se han enviado todos los datos esperados
if(isset( $_POST["nombre"], $_POST["dueno"], $_POST["celular"], $_POST["email"])) {
    // Almacenar las variables

    $fecha_sys = date('Y-m-d H:i:s');
   
    $nombre = $_POST["nombre"];
    $dueno = $_POST["dueno"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    
    // Paso 3: armar el SQL en una variable, asegurando que los valores estén correctamente escapados y rodeados de comillas si son de tipo string
    $sql_insertar = "INSERT INTO datos( fecha_Sys, nombre, dueno, celular, email)  
                    VALUES ('$fecha_sys', '$nombre', '$dueno', '$celular', '$email')";
    
    // Paso 4: enviar a la BD
    if($dbh->query($sql_insertar)) {
        echo "Información registrada correctamente";
    } else {
        echo "Error al registrar la información: " . $dbh->errorInfo()[2]; 
    }
} else {
    echo "Error: No se han recibido todos los datos esperados.";
}
?>

