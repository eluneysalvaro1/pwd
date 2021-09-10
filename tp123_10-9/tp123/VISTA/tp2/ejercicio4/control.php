<?php
    $Titulo ="TP2 | Ejercicio 4";
    include_once '../../estructura/cabecera.php';
?>
<body>
    <?php
        include_once '../../../CONTROLADOR/tp2/controlador2.php';
        include_once '../../../utiles/funciones.php';
        $dato = data_submitted();
        $obj = new tp2ejercicio4(); 
        $rta = $obj->tp2eje4($dato); 
        echo $rta; 
    ?>
 <?php
    include_once '../../estructura/footer.php';

?>
<script src="../../estructura/script2.js"></script>
</body>