<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<<<<<<< HEAD
    
=======
    <link href="Css/style.css" rel="stylesheet">
>>>>>>> 54e691854b038385b85fd06aeffbf265f771f5d5
</head>


<body>
    <div class="barraMenu">
        <nav class="navbar  fixed-top navbar-expand-lg bg-primary" style="min-height: 96px;">
            <div class="container-fluid">
                <div class="imagen-texto">
                    <img class="logo-institucion" src="Css/liceoLogo.png" alt="image">
                    <h1 class="imagen">Estudiante</h1>
                </div>

                <a class="navbar-brand text-light fs-6" href="#" style="font-size: 1rem;font-weight: bold;">
                    <span>Liceo Gral Juan Guillermo Iribarren</span>
                    <br>
                    <span>Araure | Portuguesa</span>
                    <br>
                    <span>Sistema de Incripción</span>
            
                </a>
                </div>
            </div>
        </nav>
    </div>




<script src="aviso_eliminar.js"></script>



    <div class="container p-5  ">

        <?php 
include "conexion.php";
include "eliminar_registro.php"
?>


    <div class="Contenedor">

        <div class="d-flex justify-content-between p-3 mt-3">


            <h3>Estudiantes</h3>


            <div class=" d-flex justify-content-end  ">
                <a href="formulario.php" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#formularioUsuario">

                    <i class="bi bi-plus-lg">Registrar</i>
                </a>
            </div>

        </div>
        <hr>
        <table class="table table-striped table-bordered border-light table-secondary">
            <thead>
                <tr>
                    <th scope="col">Cédula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">fecha De Nacimiento</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php

                
                $sql = $link->query(" SELECT idPersona_NGMS,cedula_NGMS,primerNombre_NGMS,primerApellido_NGMS,fechaNacimiento_NGMS  FROM $tabla ");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>

                        <td><?= $datos->cedula_NGMS ?></td>
                        <td><?= $datos->primerNombre_NGMS ?></td>
                        <td><?= $datos->primerApellido_NGMS ?></td>
                        <td><?= $datos->fechaNacimiento_NGMS ?></td>
                        <td>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#modalVerDetalleRegistro">

                                <i class="bi bi-eye-fill link-light">
                                    Ver
                                </i>
                            </button>

                            <a href="" class="btn btn-secondary" data-bs-target="#editar">


                                <i class="bi bi-pencil-square">

                                    Editar

                                </i>
                            </a>
                            <!-- enviamos el id en una variable llamada id que la capturaremos en un "controlador" que es el eliminar -->
                            <a onclick="return eliminar()" href="inicio.php?id=<?= $datos->idPersona_NGMS ?>"  class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalConfirmacionEliminar">

                                <i class="bi bi-trash3-fill">
                                    Eliminar
                                </i>
                            </a>


                        </td>

                        <!-- </td> -->
                    </tr>

                <?php  }

                ?>





            </tbody>



        </table>

</div>

        <hr>
    
    </div>

    
</body>

</html>