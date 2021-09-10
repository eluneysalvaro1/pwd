<?php
    $Titulo ="TP3 | Ejercicio 3";
    include_once '../../estructura/cabecera.php';
?>

<body>
<body>
<div class="enunciados" > 
<h1>
Ejercicio  3 </h1>
Agregue  al  formulario  creado  en  el  ejercicio  10  del  práctico  2  un  input  file  que  les permita  adjuntar  la  imagen  de  película  que  se  está  cargando.  Cuando  se  envía  el  formulario  se deberá  guardar  la  imagen  y  luego  mostrarla  junto  con  la  información  cargada  en  el  formulario.

</div>
<!-- EJERCICIO 3 TP3 -->

    <form class="needs-validation" novalidate action="accion.php" enctype="multipart/form-data" method="post">
        <div class="container p-4">
            <div class="row">
                <div class="col">
                    <label class="form-label">Titulo</label>
                    <input id="inputTitulo" class="col-11 form-control" required name="titulo">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
                <div class="col">
                    <label class="form-label">Actores</label>
                    <input name="actores" class="col-11 form-control" required id="inputActores">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div class="row ">
                <div class="col">
                    <label class="form-label">Director</label>
                    <input id="inputDirector" class="col-11 form-control" required name="director">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
                <div class="col">
                    <label class="form-label">Guion</label>
                    <input name="guion" class="col-11 form-control" required id="inputGuion">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Produccion</label>
                    <input id="inputProduccion" class="col-11 form-control" required name="produccion">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Año</label>
                    <input type="date" class="form-control" name="anio" required id="inputAnio">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Nacionalidad</label>
                    <input id="inputNacionalidad" class="form-control" required name="nacionalidad">
                    <div class="valid-feedback">
                        Datos Correctos!
                    </div>
                    <div class="invalid-feedback">
                        Datos Incorrectos!
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Genero</label>
                    <select class="form-select" name="selector" required id="selectorGenero">
                        <option selected value="" disabled>Seleccione</option>
                        <option value="comedia">Comedia</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="ficcion">Ficcion</option>
                    </select>
                    <div class="invalid-feedback">Seleccione alguna opcion.</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <label class="form-label">Duracion</label>
                    <input type="number" class="form-control" id="inputDuracion" required name="duracion">
                    <span>(minutos)</span>
                </div>
                <div class="col-md-10 p-4">
                    <label class="text-dark form-label">Restriccion de edad:</label><br>
                    <label class="fs-5 m-3">Todos los publicos</label>
                    <input class="form-check-input mt-4" type="radio" name="radio" value="Todos los publicos" id="">
                    <br>
                    <label class="fs-5 m-3">Mayores de 7</label>
                    <input type="radio" class="form-check-input mt-4" name="radio" value="Mayores de 7" id="">
                    <br>
                    <label class="fs-5 m-3">Mayores de 18</label>
                    <input type="radio" class="form-check-input mt-4" name="radio" value="Mayores de 18" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <span class="form-label" class="col-1 m-auto form-label">Sinopsis</span>
            <textarea class="col-5 m-auto" name="textarea" id="" cols="20" rows="3"></textarea>
        </div>
        <input class="d-flex m-auto mt-5 form-control" type="file" name="archivo" required id="archivo" accept="image/png, image/jpeg">
        <div class="invalid-feedback">Envie una imagen</div>
        <div class="d-flex justify-content-evenly m-5 p-5">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button class="btn btn-danger" id="limpiar">Borrar</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script>
        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<?php
    include_once '../../estructura/footer.php';
?>
</body>