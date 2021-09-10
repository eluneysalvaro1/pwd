<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>

<!-- Ejercicio -->

    <form action="control3.php" method="post">
        <div>
            <span>Nombre</span>
            <input type="text" required name="nombre" placeholder="Nombre">
        </div>
        <div>
            <span>Apellido</span>
            <input type="text" required name="apellido" placeholder="Apellido">
        </div>
        <div>
            <span>Edad</span>
            <input type="number" required name="edad" placeholder="Edad">
        </div>
        <div>
            <span>Direccion</span>
            <input type="text" required name="direccion" placeholder="Direccion">
        </div>
        <input type="submit" value="Enviar" >
    </form>
    <?php
    include_once '../../estructura/footer.php';
?>
</body>