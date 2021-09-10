<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
<body>
    <?php 
        include_once '../../../CONTROLADOR/tp1/controlador.php';
        include_once '../../../utiles/funciones.php';
        $dato = data_submitted(); 
        $obj = new ejercicio6();
        $rta = $obj->eje6($dato); 
        echo $rta; 
    ?>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>