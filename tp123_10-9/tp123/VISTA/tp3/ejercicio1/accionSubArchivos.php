<?php
$Titulo = "TP3 | Ejercicio 1 | Respuestas";
include_once '../../estructura/cabecera.php';
?>

<body>
<div class="d-flex  align-items-center justify-content-center p-3">
    <?php
    include_once '../../../CONTROLADOR/tp3/controlador.php';
    include_once '../../../utiles/funciones.php';
    

    $obj = new verificacion;

    $arregloVerificacion = $obj->controlArchivos($_POST);

    if ($arregloVerificacion['archivo']['error'] == "") {
        echo $arregloVerificacion['archivo']['link'] . "</br>";
        echo "<a  target='_blank' href=" . $arregloVerificacion['archivo']['link'] . ">archivo subido</a>";
    } else {
        echo $arregloVerificacion['archivo']['error'] . "</br>";
    }
    ?>
</div>
    <?php
    include_once '../../estructura/footer.php';
    ?>
</body>