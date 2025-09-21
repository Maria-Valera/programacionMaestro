
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php

    include('conexion.php');

    ?>
    
    <main class=" container-fluid p-5">


        <div class="row bg-light-subtle rounded ">
            <div class="col-12 ">
                <div class="container  ">
                    
                    


                    

                    <div class="d-flex justify-content-between p-3 mt-3">


                        <h3>Nuevo Estudiante</h3>


                        <div class=" d-flex justify-content-end  ">
                            

                            <div class="">
                                <a href="inicio.php" class="btn btn-secondary">
                                    <i class="bi bi-box-arrow-left ">Volver</i></a>

                            </div>

                            <!-- <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#formularioUsuario">

                                <i class="bi bi-plus-lg">Registrar</i>
                            </button>  -->
                        </div>

                    </div>



                    


                    

                    
                    <hr>
                    <div class="" id="formularioEstudiante" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">






                        <div id="estudiante-form">
                            <legend class="fs-5">Los campos con <span class="text-danger">(*)</span> son campos
                                obligatorios a llenar</legend>

                            

                            <div class="border border-primary rounded px-1 mt-2">


                            <div class="row">
                                <h4 class=" p-3">Datos del Estudiante</h4>
                                <div class="col-2" style="width: 220px;" >
                                                    <div class="input-group mb-3">
                                                <label class="input-group-text " for="inputGroupSelect01"><span class="text-danger">(*)</span>Documento</label>
                                                <select class="form-select " id="tipo-ci" name="tipo-ci">
                                                    <option value=""></option>
                                                    <option value="V">V</option>
                                                    <option value="F">F</option>

                                                </select>

                                                    </div>
                                                    <small id="tipo-ci-error" class="text-danger "></small>
                                </div>
                                <div class="col-2" >
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Cédula</span>
                                        <input type="text" class="form-control" id="cedula" pattern="[0-9]+" name="cedula" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" maxlength="8" title="Ingresa solamente numeros,no se permiten letras">
                                    </div>
                                    <small id="cedula-error" class="text-danger "></small>
                                </div>
                                <div class="col-4" >
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Fecha de
                                            Nacimiento</span>
                                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                            <small id="error-edad" class="text-danger d-none">La edad debe estar entre 10 y 18 años</small>

                                    </div>
                                            <small id="fechaNacimiento-error" class="text-danger"></small>
                                </div>
                                <div class=" col-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Sexo</label>
                                        <select class="form-select" id="sexo" name="sexo">
                                            <option value="">Seleccione</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>

                                        </select>

                                    </div>
                                    <small id="sexo-error" class="text-danger "></small>
                                </div>
                                


                            </div>


                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Primer
                                            Nombre</span>
                                        <input type="text" id="primer-nombre" name="primer-nombre" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios,no se aceptan números">
                                    </div>
                                    <small id="primer-nombre-error" class="text-danger "></small>
                                </div>
                                <div class="col">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Segundo
                                            Nombre</span>
                                        <input type="text" id="segundo-nombre" name="segundo-nombre" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios,no se aceptan números">
                                    </div>
                                        <small id="segundo-nombre-error" class="text-danger "></small>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Primer
                                            Apellido</span>
                                        <input type="text" id="primer-apellido" name="primer-apellido" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios,no se aceptan números">
                                    </div>
                                    <small id="primer-apellido-error" class="text-danger "></small>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Segundo
                                            Apellido</span>
                                        <input type="text" id="segundo-apellido" name="segundo-apellido" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios,no se aceptan números">
                                    </div>
                                    <small id="segundo-apellido-error" class="text-danger "></small>
                                </div>

                            </div>

                            <div class="row">
                                
                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Lateralidad</label>
                                        <select class="form-select" id="lateralidad-estudiante" name="lateralidad-estudiante">
                                            <option value="">Selección</option>
                                            <option value="1">Izquierda</option>
                                            <option value="2">Derecha</option>
                                            <option value="3">Ambidiestro</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>
                                
                                <div class="col-3" >

                                    <div class="input-group mb-3" >
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Orden de
                                            Nacimiento</label>
                                        <select class="form-select" id="orden-nacimiento-estudiante" name="orden-nacimiento-estudiante">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="1">3</option>
                                            <option value="1">6</option>

                                        </select>

                                    </div>
                                    <small id="orden-nacimiento-estudiante-error" class="text-danger "></small>
                                </div>
                                <div class="col-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Lugar de
                                            Nacimiento</span>
                                        <input type="text" class="form-control" id="lugar-nacimiento" name="lugar-nacimiento" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios,no se aceptan números"  required>
                                    </div>
                                    <small id="lugar-nacimiento-error" class="text-danger "></small>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group mb-3" >
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Talla Camisa</label>
                                        <select class="form-select" id="lateralidad-estudiante" name="lateralidad-estudiante">
                                            <option value="">Selección</option>
                                            <option value="izquierda">Izquierda</option>
                                            <option value="derecha">Derecha</option>
                                            <option value="ambidiestro">Ambidiestro</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                                <div class="col-3">
                                    <div class="input-group mb-3" >
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Talla Zapato</label>
                                        <select class="form-select" id="lateralidad-estudiante" name="lateralidad-estudiante">
                                            <option value="">Selección</option>
                                            <option value="izquierda">Izquierda</option>
                                            <option value="derecha">Derecha</option>
                                            <option value="ambidiestro">Ambidiestro</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Talla PAntalon</label>
                                        <select class="form-select" id="lateralidad-estudiante" name="lateralidad-estudiante">
                                            <option value="">Selección</option>
                                            <option value="izquierda">Izquierda</option>
                                            <option value="derecha">Derecha</option>
                                            <option value="ambidiestro">Ambidiestro</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group mb-3" >
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Estatura</label>
                                        <select class="form-select" id="lateralidad-estudiante" name="lateralidad-estudiante">
                                            <option value="">Selección</option>
                                            <option value="izquierda">Izquierda</option>
                                            <option value="derecha">Derecha</option>
                                            <option value="ambidiestro">Ambidiestro</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Peso</label>
                                        <select class="form-select" id="lateralidad-estudiante" name="lateralidad-estudiante">
                                            <option value="">Selección</option>
                                            <option value="izquierda">Izquierda</option>
                                            <option value="derecha">Derecha</option>
                                            <option value="ambidiestro">Ambidiestro</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>
                            </div>

                            </div>

                            

                                

                            

                            
                            <div class="d-flex justify-content-end p-4">

                                    


                                <div class="p-2">
                                     <a href="inicio.php" class="btn btn-danger">Cancelar</a>
                                </div>

                                <div class="p-2">
                                    <a href="{{route('modules.estudiante.formulario_representante')}}"  class="btn btn-primary me-2 " id="guardar" >Guardar</a>

                                </div>
                            </div>



                        </div>
                    </div>


                </div>













            </div>



        





        </div>
        </div>


    </main>
</body>
</html>



