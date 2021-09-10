<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
    <form action="control8.php" method="post">
        <span>Edad</span>
        <input type="number" name="edad" placeholder="edad">
        <div>
            <span>¿Estudias?</span>
            <select name="selector">
                <option value="si">Estudiante</option>
                <option value="no">No estudiante</option>
            </select>
        </div>
        <input type="submit" value="Enviar">
    </form>
<?php
    include_once '../../estructura/footer.php';
?>
</body>
