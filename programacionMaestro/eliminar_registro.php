<?php
if (!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = $link->query("DELETE FROM persona_ngms WHERE idPersona_NGMS=$id");
    if($sql==1){
        echo "<div class ='alert alert-success'>ESTUDIANTE ELIMINADO CORRECTAMENTE</div>";
    }else{
        echo "<div class ='alert alert-danger'>ERROR AL ELIMINAR PIPIPI</div>";
    }
}

?>