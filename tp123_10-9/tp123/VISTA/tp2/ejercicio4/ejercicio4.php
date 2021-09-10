<?php
    $Titulo ="TP2 | Ejercicio 4";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
    <div class="d-flex align-items-center justify-content-evenly p-4" >
        <h3>Cinem@s</h3>
    </div>
    <form action="control.php" method="post">
        <div class="container p-4">
            <div class="row">
                <div class="col">
                    <label class="fs-5 fw-bold">Titulo</label>
                    <input id="inputTitulo" class="col-11 form-control val" name="titulo" required> 
                    <div class="inv" >

                    </div>
                </div>
                <div class="col">
                    <label class="fs-5 fw-bold">Actores</label>
                    <input name="actores" class="col-11 form-control val" id="inputActores" required >
                    <div class="inv" >

                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div class="row ">
                <div class="col">
                    <label class="fs-5 fw-bold">Director</label>
                    <input  required id="inputDirector" class="col-11 form-control val" name="director">
                    <div class="inv" >

                    </div>
                </div>
                <div class="col">
                    <label class="fs-5 fw-bold">Guion</label>
                    <input  required name="guion" class="col-11 form-control val" id="inputGuion">
                    <div class="inv" >

                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div class="row">
                <div class="col-6">
                    <label class="fs-5 fw-bold">Produccion</label>
                    <input required id="inputProduccion" class="col-11 form-control val" name="produccion">
                    <div class="inv" >

                    </div>
                </div>
                <div class="col-4">
                    <label class="fs-5 fw-bold">Año</label>
                    <input required type="number" min="1900" max="2021" class="form-control" name="anio" id="inputAnio">
                    <div class="invalido alert" >

                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div>
                <label class="fs-5 fw-bold" >Nacionalidad</label>
                <input required id="inputNacionalidad" class="form-control val" name="nacionalidad">
                <div class="inv" >

                </div>
            </div>
            <div  class="container p-4">
                <label class="fs-5 fw-bold">Genero</label>
                <select required name="selector" class="form-select" id="selectorGenero">
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                    <option value="terror">Terror</option>
                    <option value="ficcion">Ficcion</option>
                </select>
            </div>
        </div>
        <div class="container p-4">
            <div>
                <label class="fs-5 fw-bold">Duracion</label>
                <input required type="number" id="inputDuracion" class="form-control" name="duracion">
                <span>(minutos)</span>
                <div class="invalido2 alert" >
                        
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-evenly p-4">
                <label class="fs-5 fw-bold" >Restriccion de edad:</label>
                <br>
                <label for="uno">Todos los publicos</label>
                <input type="radio" name="radio" class="val" value="Todos los publicos" id="">
                <label for="dos">Mayores de 7</label>
                <input type="radio" name="radio"  class="val" value="Mayores de 7" id="">
                <label for="tres">Mayores de 18</label>
                <input type="radio" name="radio" class="val" value="Mayores de 18" id="">
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-evenly">
            <span class="fs-5 fw-bold p-3">Sinopsis</span>
            <textarea name="textarea" id="" cols="45" rows="3"></textarea>
        </div>
        <div class="d-flex align-items-center justify-content-evenly p-4" >
            <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
            <button class="btn btn-danger" id="borrar">Borrar</button>
        </div>
    </form>


    
<?php
    include_once '../../estructura/footer.php';

?>
<script src="../../estructura/script2.js"></script>
</body>

