<?php
    $Titulo ="TP3 | Ejercicio 2";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
<div   style="background-color: #7cfddd;   padding: 50px;" > 
    <h1>Ejercicio  2</h1>
    <p>
        Crear  un  formulario  que  permita  subir  un  archivo.  En  el  servidor  se  deberá  controlar que  el  tipo  esperado  sea  txt  (texto  plano),  si  es  correcto  deberá  abrir  el  archivo  y  mostrar  su contenido  en  un  textarea. (OBS: Referencia a funciones  para trabajar con archivos http://php.net/manual/en/ref.filesystem.php) 
    </p>
    </div>
    <form action="control2.php" enctype="multipart/form-data" method="post">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Enviar">
    </form>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>