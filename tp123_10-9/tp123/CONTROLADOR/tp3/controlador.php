<?php

class verificacion{

    //ejercicio 1
    public function controlArchivos($datosArchivos)    {
        $tama単o = $_FILES['archivo']['size'];
        $dir = '../../archivos/';

        $arregloRetorno['archivo']['link']="";
        $arregloRetorno['archivo']['error']="";

        if ($_FILES['archivo']['error'] <= 0 && $tama単o / 1024 < 2000) {//verificamos que el tama単o sea menor a 2mb y que no tenga errores
            $nombre = $_FILES['archivo']['name'];//Realiza la copia del archivo
            if (copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
                $link = $dir . $nombre;
                $arregloRetorno['archivo']['link'] = $link;
            } else {
                //$retorno = "error No se pudo copiar el archivo";
                $arregloRetorno['archivo']['error']="No se pudo copiar";
            }
        } else {
            //$retorno = "error No se pudo subir el archivo al servidor";
            $arregloRetorno['archivo']['error']="El archivo Supera el tama単o solicitado o tiene error";
        }
        return $arregloRetorno;
    }

    //ejercicio 2
    public function control($datosArchivos){
        $rta = '';
        $directorio = '../../archivos/'; 
        if($datosArchivos){
            $size = $datosArchivos['archivo']['size'] / 1024; 
            $name = $datosArchivos['archivo']['name'];
            $tmpCarpeta = $datosArchivos['archivo']['tmp_name']; 
            $type = $datosArchivos['archivo']['type']; 
            if ($type == 'text/plain') {
                if ($size < 2000) {
                    if (!copy($datosArchivos['archivo']['tmp_name'] , $directorio . $name)) {
                        $rta = 'No se pudo subir el archivo';
                    }else{
                        $rta = 'Se pudo subir el archivo';
                        $f = fopen("../../archivos/{$name}" , 'r'); 
                        $texto = '';
                        while (!feof($f)) {
                            $linea = fgets($f);
                            $saltoDeLinea = nl2br($linea);
                            $texto = $texto . $saltoDeLinea;
                        }
                        fclose($f); 
                        $rta = $texto;
                    }
                }else{
                    $rta = 'El archivo es muy pesado';
                }
            }else{
                $rta = 'Formato Invalido';
            }
        }else{
            $rta = 'Error';
        }
        return $rta; 
    }

    //ejercicio 3 
    public function subirArchivo($POST , $FILES){
            $titulo = $POST['titulo'];
            $actores = $POST['actores'];
            $director = $POST['director'];
            $guion = $POST['guion'];
            $produccion = $POST['produccion'];
            $anio = $POST['anio'];
            $nacionalidad = $POST['nacionalidad'];
            $genero = $POST['selector'];
            $duracion = $POST['duracion'];
            $radio = $POST['radio'];
            $imgType = $FILES['archivo']['type'];
            $directorio = '../../archivos/';
            $texto = '';
            if ($imgType == 'image/jpeg') {
                $nombreImg = $FILES['archivo']['name'];
                copy($FILES['archivo']['tmp_name'], $directorio . $nombreImg);
                $img = "<img src='{$directorio}{$nombreImg}' >"; 
            $texto = "  <style>
                    b{
                        color: green;
                    }
                    </style>
                <div class='alert alert-success' >
                
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
                            <b>Restriccion de edad: </b> {$radio} <br>
                        </p>
                        
                        <div class='second'>
                            {$img} 
                        </div>
                </div>";
            } else {
                $texto = 'FORMATO INVALIDO DE IMAGEN';
            }
            return $texto;
        
    
    }
}



?>