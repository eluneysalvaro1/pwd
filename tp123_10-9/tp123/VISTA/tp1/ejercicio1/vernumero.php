<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
  
 
<h1> 
<?php
    include_once '../../../CONTROLADOR/tp1/controlador.php';
    include_once '../../../utiles/funciones.php';
    $dato = $_GET["num"];
    $obj = new ejercicio1(); 
    $rta = $obj->eje1($dato);
 
    echo $rta; 
?>
</h1>
<div style="margin:70px 0px 120px 600px";>
<a class="mb-10 btn btn-primary" href="tp1eje1.php" role="button" >Volver</a>
</div>
</body>
<?php
    include_once '../../estructura/footer.php';
?>