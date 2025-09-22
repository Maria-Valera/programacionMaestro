<?php
    include 'conexion.php';
    
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
            echo "La edad debe estar entre 11 y 18 años para ser estudiante de bachillerato";
            } else {
    
            }

    }
?>