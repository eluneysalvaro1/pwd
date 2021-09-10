<?php
    $Titulo ="TP3 | Ejercicio 2";
    include_once '../../estructura/cabecera.php';
?>
<body>
    <?php
        include_once '../../../CONTROLADOR/tp3/controlador.php'; 
        $comprobacion = new verificacion(); 
        $post = $_POST;
        $file = $_FILES;
        $rta = $comprobacion->subirArchivo($post,$file); 
    ?>
    <div class="archivo">
        <?php
            echo $rta;
        ?>
    </div>
<?php
    include_once '../../estructura/footer.php';
?>
</body>
