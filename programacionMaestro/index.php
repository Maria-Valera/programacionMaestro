<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

// direccion ip del servidor mysql 
$host ="localhost";

// pueto del servidor mysql
$puerto = "3306";

// nombre del usuario del servidor mysql
$usuario = "root";

// contraseña del usuario

$contraseña = "";

// nombre de la base de datos 
$base_de_datos = "db_ngms";


// nombre de la tabla con la cual vamos a trabajar 
$tabla ="clientes";

function conectar(){
    // variable global
    global $host,$puerto,$usuario,$contraseña,$base_de_datos,$tabla;

    if(!($link = mysqli_connect($host.":".$puerto,$usuario,$contraseña))){
        echo "error conectando a la base de datos.<br>";
        exit();
    }else{
        echo "listo,estamos conectados.<br>";
    }
    // aqui se selecciona la base de datos con el link junto con el nombre
    if(!mysqli_select_db($link,$base_de_datos)){
        echo "error seleccionando la base de datos.<br>";
        exit();

    }else{
        echo "se obtuvo la base de datos $base_de_datos sin problema.<br>";
    }
    return $link;
}

$link = conectar();

mysqli_close($link);


?>
</body>
</html>