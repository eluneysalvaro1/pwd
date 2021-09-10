<?php
    $Titulo ="TP1 | Ejercicio 4";
    include_once '../../estructura/cabecera.php';
?>
<body>

    <?php
        include_once '../../../CONTROLADOR/tp1/controlador.php';
        include_once '../../../utiles/funciones.php';
        $dato = data_submitted(); 
        $obj = new ejercicio4();
        $rta = $obj->eje4($dato); 
        echo $rta; 
    ?>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>
