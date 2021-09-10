<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
    <form action="tp1eje7.php" method="post">
        <span>Ingrese el numero 1: </span>
        <input type="number" required placeholder="Numero 1" name="num1" id="">
        <span>Ingrese el numero 2: </span>
        <input type="number" required placeholder="Numero 2" name="num2" id="">
        <select name="selector" id="">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <?php
        include_once '../../../CONTROLADOR/tp1/controlador.php';
        error_reporting(0);
        $obj = new ejercicio7();
        $rta = $obj->eje7($_POST); 
        echo "El resultado es: {$rta}";
    ?>
<?php
    include_once '../../estructura/footer.php';
?>
</body>
