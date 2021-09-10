<?php
    $Titulo ="TP3 | Ejercicio 1 | Respuestas";
    include_once '../../estructura/cabecera.php';
?>
<body>
<div class="enunciados" > 
    <h1>Ejercicio  1</h1>
    <p>
        Crear  un  formulario  HTML  que  permita  subir  un  archivo.  En  el  servidor  se  deberá controlar,  antes  de  guardar  el  archivo,  que  los  tipos  validos  son  .doc  o  pdf  y  además  el  tamaño máximo  permitido  es  de  2mb.  En  caso  que  se  cumplan  las  condiciones  mostrar  un  link  al  archivo cargado,  en  caso  contrario  mostrar  un  mensaje  indicando  el  problema. 
    </p>
</div>    

    <form action="accionSubArchivos.php" enctype="multipart/form-data" method="post" id="formularioUno"
    class="d-flex  align-items-center justify-content-center p-3">
        <span>Ingrese un archivo: </span>
        <input type="file" name="archivo" id="archivo" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf">
        <input type="submit" value="Enviar">
    </form>
    <?php
    include_once '../../estructura/footer.php';
?>
</body>