<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>




<h2>¿Cuantas horas cursas de PWD por dia?</h2>
<form action="control2.php" method="get">
    <input type="number" min="0" max="24" required placeholder="lunes"  name="lunes">
    <input type="number" min="0" max="24" required placeholder="martes" name="martes">
    <input type="number" min="0" max="24"  required placeholder="miercoles" name="miercoles">
    <input type="number" min="0" max="24" required placeholder="jueves" name="jueves">
    <input type="number" min="0" max="24" required placeholder="viernes" name="viernes">
    <input type="submit" min="0" max="24" required value="Enviar">
</form>
<?php
    include_once '../../estructura/footer.php';
?>
</body>