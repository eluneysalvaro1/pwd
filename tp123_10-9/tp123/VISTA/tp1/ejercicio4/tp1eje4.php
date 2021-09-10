<?php
    $Titulo ="TP1 | Ejercicio 4";
    include_once '../../estructura/cabecera.php';
?>
<body>



<!-- Ejercicio -->
    <form action="control4.php" method="post">
            <div>
                <span style="font-size: 20px;">Nombre</span>
                <input type="text" required name="nombre" placeholder="Nombre">
            </div>
            <div>
                <span style="font-size: 20px;">Apellido</span>
                <input type="text" required name="apellido" placeholder="Apellido">
            </div>
            <div>
                <span style="font-size: 20px;">Edad</span>
                <input type="number" required name="edad" placeholder="Edad">
            </div>
            <div>
                <span style="font-size: 20px;">Direccion</span>
                <input type="text" required name="direccion" placeholder="Direccion">
            </div>
            <input type="submit" value="Enviar" >
        </form>
  
<?php
    include_once '../../estructura/footer.php';
?>
</body>
