<?php
    $Titulo ="TP1 | Ejercicio 1";
    include_once '../../estructura/cabecera.php';
?>
<body>
<!-- Ejercicio -->
<form action="control5.php" method="post">
            <div >
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
                
                <input type="radio" name="estudios" value="No tiene estudios"  id="">
                <span>1- No tiene estudios</span></br>
                
                <input type="radio" name="estudios" value="Tiene estudios primarios" id="">
                <span>2- Tiene estudios primarios</span></br>
                
                <input type="radio" name="estudios" value="Tiene secundario completo" id="">
                <span>3- Tiene estudios secundarios</span></br>
            </div>
            <div >
                <button class="btn btn-primary center-block btn-sm" type="submit"> Enviar </button>
            </div>
        </form>
        <?php
    include_once '../../estructura/footer.php';
?>
</body>
