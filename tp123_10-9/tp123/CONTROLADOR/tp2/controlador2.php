<?php

//ejercicio 3
class tp2ejercicio3{
    public function tp2eje1($post){
        //DEJAR PROLIJO NEGRO
        $rta = '';
        $bandera = false; 
        if ($post) {
            $arreglo = [
                0 => [
                    "usuario" => 'augustoUnCrimen',
                    "clave" => '0123456789',
                ],
                1 => [
                    "usuario" => 'juanClavoUnClavo',
                    "clave" => 'juanito12345',
                ],
                2 => [
                    "usuario" => 'eluStappen', 
                    "clave" => 'eluClerc12345',
                    ]
                ];
                
                foreach ($arreglo as $usuario) {
                    if ($usuario['usuario'] == $post['usuario'] && $usuario['clave'] == $post['clave']) {
                        $rta = "<h3 class='alert alert-primary'>Bienvenido {$usuario['usuario']}</h3>";
                        $bandera = true; 
                    }
                }
            }
            if ($bandera == false) {
                $rta = 'Error: No hay usuario/contraseña'; 
            }
        return $rta;
    }
}

//ejercicio 4
class tp2ejercicio4{
    public function tp2eje4($post){

        $titulo = $post['titulo']; 
        $actores = $post['actores']; 
        $director = $post['director']; 
        $guion = $post['guion']; 
        $produccion = $post['produccion']; 
        $anio = $post['anio'];
        $nacionalidad = $post['nacionalidad'];
        $genero = $post['selector']; 
        $duracion = $post['duracion'];
        $descripcion = $post['textarea'];
        $radio = $post['radio'];


        $rta = "  <style>
                b{
                    color: deep-green;
                }
                </style>

                <div class='alert alert-success'>
                <h1>La pelicula introducida es:</h1>
                <p>
                    <b>Titulo: </b> {$titulo} <br>
                    <b>Actores: </b> {$actores} <br>
                    <b>Director: </b> {$director} <br> 
                    <b>Guion: </b> {$guion} <br> 
                    <b>Produccion: </b> {$produccion} <br>
                    <b>Año: </b> {$anio} <br>
                    <b>Nacionalidad: </b> {$nacionalidad} <br>
                    <b>Genero: </b> {$genero} <br> 
                    <b>Duracion: </b> {$duracion} <br>
                    <b>Restriccion de edad: </b> {$radio}
                </p>
            </div>";
        return $rta; 
    }
}

?>