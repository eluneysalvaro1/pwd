<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>

<body>
    <?php
        include_once '../../../CONTROLADOR/tp1/controlador.php';
        include_once '../../../utiles/funciones.php';
        $dato = data_submitted(); 
        $obj = new ejercicio7();
        $rta = $obj->eje7($dato); 
        echo "El resultado es: {$rta}";
    ?>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>
