<?php
    
    
    function Camposvacios($campo){
        return isset($campo) && trim($campo) !== '';
    }

    function CamposCaracteres($campo){
        $texto="/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/";
        return !($texto === $campo);
    }

    function CamposNumericos($campo){
        return !(is_numeric($campo));
    }

    function Edad($campo){
        $hoy = new DateTime(); //toma la fecha actual
        $fecha = new DateTime($campo); // Fecha de nacimiento del estudiante

        // Caulcula la diferencia entre la fecha actual y la fecha de nacimiento del estudiante.
        $edad = $hoy->diff($fecha)->y; // ->y Extrae solo los años de esa diferencia (ignora meses y días)

        if ($edad < 11 || $edad > 18) {
            return "La edad debe estar entre 11 y 18 años para ser estudiante de bachillerato";
            }

    }

    function TamañoCedula($campo){
        $caracteres=str_split($campo);
        $contador=0;
        foreach($caracteres as $caracter){
            $contador++;
        }
        if ($contador > 8 || $contador < 8){
        return "El campo cedula debe tener exactamente 8 caracteres";
    }
    }


?>