<?php
$Titulo = "TP1 | Ejercicio 1";
include_once '../../estructura/cabecera.php';
?>

<body>
    <div class="enunciados">
        <h1>Ejercicio 1 </h1>
        <p>
            Confeccionar un formulario que solicite un número.
            Al pulsar el botón enviar debe llamar a un script vernumero.php
            y visualizar un mensaje que indique si el número
            enviado fue: positivo, cero o negativo.
            Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
        </p>
    </div>


    <!-- Ejercicio -->

    <form action="vernumero.php" method="get" >
        <span>Envie un numero</span>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
    <?php
    include_once '../../estructura/footer.php';
    ?>