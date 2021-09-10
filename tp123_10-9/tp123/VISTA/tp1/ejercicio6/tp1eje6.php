<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
<form action="control6.php" method="post">
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
            <div>
                <select name="selector" id="selector">
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                </select>
            </div>
            <div>
                <span>1- No tiene estudios</span>
                <input type="radio" name="estudios" value="No tiene estudios"  id="">
                <span>2- Tiene estudios primarios</span>
                <input type="radio" name="estudios" value="Tiene estudios primarios" id="">
                <span>3- Tiene estudios secundarios</span>
                <input type="radio" name="estudios" value="Tiene secundario completo" id="">
            </div>
            <div>
                <span>Futbol</span>
                <input type="checkbox" name="f" value="futbol">
                <span>Basket</span>
                <input type="checkbox" name="b" value="basket">
                <span>Tennis</span>
                <input type="checkbox" name="t" value="tennis">
                <span>Voley</span>
                <input type="checkbox" name="v" value="voley">
            </div>
            <input type="submit" value="Enviar" >
        </form>
        <?php
    include_once '../../estructura/footer.php';
?>
</body>
