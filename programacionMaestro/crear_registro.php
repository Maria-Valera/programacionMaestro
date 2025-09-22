<?php

// DICE,SI EL USUARIO PRESIONA EL BOTON,QUE VA A HACER....
if(!empty($_POST["registrar"])){
    // VALIDACIONES DEL FORMULARIO ACA

    if(!empty($_POST["primer-nombre"]) 
    and !empty($_POST["segundo-nombre"]) and !empty($_POST["primer-apellido"]) 
    and !empty($_POST["segundo-apellido"]) and !empty($_POST["fechaNacimiento"]) 
        and !empty($_POST["sexo"]) and !empty($_POST["tipo-ci"]) and !empty($_POST["cedula"]) and !empty($_POST["lateralidad-estudiante"]) 
    and !empty($_POST["orden-nacimiento-estudiante"]) and !empty($_POST["lugar-nacimiento"]) 
    and !empty($_POST["estatura"]) and !empty($_POST["peso"]) and !empty($_POST["talla_camisa"]) and !empty($_POST["talla_pantalon"])
    and !empty($_POST["talla_zapato"])    ){

        $documento = $_POST["tipo-ci"];
        $cedula = $_POST["cedula"];
        $fechaNac = $_POST["fechaNacimiento"];
        $sexo = $_POST["sexo"];
        $pNombre = $_POST["primer-nombre"];
        $sNombre = $_POST["primer-apellido"];
        $pApellido = $_POST["segundo-nombre"];
        $sApellido = $_POST["segundo-apellido"];
        $lateralidad = $_POST["lateralidad-estudiante"];
        $ordenNac = $_POST["orden-nacimiento-estudiante"];
        $lugarNac = $_POST["lugar-nacimiento"];
        $tCamisa = $_POST["talla_camisa"];
        $tZapato = $_POST["talla_zapato"];
        $tPantalon = $_POST["talla_pantalon"];
        $estatura = $_POST["estatura"];
        $peso = $_POST["peso"];

        // $sql = $link->query("INSERT INTO persona_ngms (documento_NGMS,cedula_NGMS,fechaNacimiento_NGMS,sexo_NGMS,primerNombre_NGMS,segundoNombre_NGMS,primerApellido_NGMS,segundoApellido_NGMS,lateralidad_NGMS,ordenNacimiento_NGMS,lugarNacimiento_NGMS,tallaCamisa_NGMS,tallaZapato_NGMS,tallaPantalon_NGMS,estatura_NGMS,peso_NGMS)
        // VALUES ('$documento','$cedula','$fechaNac','$sexo','$pNombre','$sNombre','$pApellido','$sApellido','$lateralidad','$ordenNac',
        // '$lugarNac','$tCamisa','$tZapato','$tPantalon','$estatura','$peso')");

        $sql = $link->query("INSERT INTO persona_ngms (primerNombre_NGMS,segundoNombre_NGMS,primerApellido_NGMS,segundoApellido_NGMS,fechaNacimiento_NGMS,sexo_NGMS,documento_NGMS,cedula_NGMS,lateralidad_NGMS,ordenNacimiento_NGMS,lugarNacimiento_NGMS,estatura_NGMS,peso_NGMS,tallaCamisa_NGMS,tallaPantalon_NGMS,tallaZapato_NGMS)
        VALUES ('$pNombre','$sNombre','$pApellido','$sApellido','$fechaNac','$sexo','$documento','$cedula','$lateralidad','$ordenNac',
        '$lugarNac','$estatura','$peso','$tCamisa','$tPantalon','$tZapato')");



        if($sql== 1){
            echo '<div class = "alert alert-success">PERSONA REGISTRADA CORRECTAMENTE YUPIII</div>';

        }else{
            echo '<div class = "alert alert-danger">ERROR AL REGISTRAR PIPIPI</div>';
        }
    }else{
        echo '<div class = "alert alert-warning">alguno de los campos debe de estar vacio....sospechoso...</div>';
    }
}


?>
