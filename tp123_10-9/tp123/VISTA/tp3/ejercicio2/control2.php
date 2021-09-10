<?php
    $Titulo ="TP3 | Ejercicio 2";
    include_once '../../estructura/cabecera.php';
?>
<body>
    <?php
        include_once '../../../CONTROLADOR/tp3/controlador.php';
        $obj = new verificacion();
        $rta = $obj->control($_FILES); 
        echo $rta;
    ?>
</body>
<?php
    include_once '../../estructura/footer.php';
?>
</body>