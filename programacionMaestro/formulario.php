
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="Css/style.css" rel="stylesheet">
    <title>Document</title>
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
                        </div>

                    </div>



                    


                    

                    
                    <hr>
                    <div class="" id="formularioEstudiante" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">






                        <form id="estudiante-form" method="POST">
                            <legend class="fs-5">Los campos con <span class="text-danger">(*)</span> son campos
                                obligatorios a llenar</legend>
                            <?php
                                include "conexion.php";
                                include "crear_registro.php";
                            ?>
                            

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
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>

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
                                            <option value="Izquierda">Izquierda</option>
                                            <option value="Derecha">Derecha</option>
                                            <option value="Ambidiestro">Ambidiestro</option>

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
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>

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
                                            aria-describedby="inputGroup-sizing-default" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios,no se aceptan números">
                                    </div>
                                    <small id="lugar-nacimiento-error" class="text-danger "></small>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group mb-3" >
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Talla Camisa</label>
                                        <select class="form-select" id="talla_camisa" name="talla_camisa">
                                            <option value="">Selección</option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                            <option value="14">14</option>
                                            <option value="16">16</option>
                                            <option value="18">18</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                                <div class="col-3">
                                    <div class="input-group mb-3" >
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Talla Zapato</label>
                                        <select class="form-select" id="talla_zapato" name="talla_zapato">
                                            <option value="">Selección</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><span
                                                class="text-danger">(*)</span>Talla PAntalon</label>
                                        <select class="form-select" id="talla_pantalon" name="talla_pantalon">
                                            <option value="">Selección</option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                            <option value="14">14</option>
                                            <option value="16">16</option>
                                            <option value="18">18</option>

                                        </select>

                                    </div>
                                    <small id="lateralidad-estudiante-error" class="text-danger "></small>
                                </div>

                            </div>

                            

                            <div class="row">

                            <div class="col-2" >
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Estatura</span>
                                        <input type="number" step="0.01" class="form-control" id="estatura" pattern="[0-9]+" name="estatura" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" maxlength="8" title="Ingresa solamente numeros,no se permiten letras">
                                    </div>
                                    <small id="cedula-error" class="text-danger "></small>
                                </div>

                                <div class="col-2" >
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><span
                                                class="text-danger">(*)</span>Peso</span>
                                        <input type="number" step="0.01" class="form-control" id="peso" pattern="[0-9]+" name="peso" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default" maxlength="8" title="Ingresa solamente numeros,no se permiten letras">
                                    </div>
                                    <small id="cedula-error" class="text-danger "></small>
                                </div>
                                
                            </div>

                            </div>

                            

                                

                            

                            
                            <div class="d-flex justify-content-end p-4">

                                    


                                <div class="p-2">
                                     <a href="inicio.php" class="btn btn-danger">Cancelar</a>
                                </div>

                                <div class="p-2">
                                    <button type="submit"   class="btn btn-primary me-2 " name="registrar" value="Guardar" >Guardar</button>

                                </div>
                            </div>



                        </form>
                    </div>


                </div>













            </div>



        





        </div>
        </div>


    </main>
</body>
</html>



