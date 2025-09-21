<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>





    <div class="container p-5  ">

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

                include "conexion.php";
                $sql = $link->query(" SELECT idPersona_NGMS,primerNombre_NGMS,primerApellido_NGMS,fechaNacimiento_NGMS  FROM $tabla ");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>

                        <td><?= $datos->idPersona_NGMS ?></td>
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

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalConfirmacionEliminar">

                                <i class="bi bi-trash3-fill">
                                    Eliminar
                                </i>
                            </button>


                        </td>

                        <!-- </td> -->
                    </tr>

                <?php  }

                ?>





            </tbody>



        </table>

        <hr>
    </div>
</body>

</html>