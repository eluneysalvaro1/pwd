<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
    
    <?php
    include_once '../../../CONTROLADOR/tp1/controlador.php';
    include_once '../../../utiles/funciones.php';
        error_reporting(0);
        $dato = data_submitted(); 
        $obj = new ejercicio3();
        $rta = $obj->eje3($dato);
        echo $rta;
    ?>

    <?php
    include_once '../../../footer.php';
    ?>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>