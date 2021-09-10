<?php

//Ejercicio 1

class ejercicio1{
    public function eje1($numero){
        $rta = '';
        if ($numero == 0) {
            $rta = 'El numero es 0';
        }elseif ($numero > 0) {
            $rta = 'El numero es positivo';
        }elseif ($numero < 0) {
            $rta = 'El numero es negativo';
        }else{
            $rta = 'Ingresaste una Letra e... ';
        }
        return "{$rta} "; 
    }
}

//Ejercicio 2 

class ejercicio2{
    
    public function eje2($get){
        $rta = '';
        if (isset($get)) {        
            $total = 0;
            $array = [];
            $array['lunes'] = $get['lunes']; 
            $array['martes'] = $get['martes'];
            $array['miercoles'] = $get['miercoles'];
            $array['jueves'] = $get['jueves'];
            $array['viernes'] = $get['viernes']; 
            foreach ($array as $dia) {
                $total = $total + $dia;
            }
            if ($total > 0) {
                $rta = "El total de horas es: {$total}";
            }else{
                $rta = "No se pueden ingresar horas en negativo";
            }
        }else{
            $rta = 'No se envio ningun valor al formulario';
        }
        return $rta;
    }
    
}

//Ejercicio 3

class ejercicio3{
    public function eje3($post){
        $rta = '';
        if (isset($post)) {
            $rta = "Hola, soy {$post['nombre']}, {$post['apellido']} tengo {$post['edad']} años y vivo en {$post['direccion']}"; 
        }elseif(!isset($post)){
            $rta = 'Fua no mandaron nada'; 
        }
        return $rta;
    }
}

//Ejercicio 4 

class ejercicio4{
    public function eje4($post){
        $rta = '';
        if (isset($post)) {
            if ($post['edad'] >= 18 ) {
                $rta = 'Sos una persona mayor de edad';
            }elseif ($post['edad'] < 18 && $post['edad']>1) {
                $rta = 'Sos menor de edad'; 
            }    
        }elseif(!isset($post)){
            $rta = 'Fua no mandaron nada'; 
        }
        return $rta;
    }
}

//Ejercicio 5

class ejercicio5{
    public function eje5($post){
        $rta = ''; 
        if (isset($post)) {
            $rta = "Hola, {$post['nombre']}, {$post['apellido']} tienes {$post['edad']} años y vives en {$post['direccion']}. Eres {$post['selector']} y sobre su situacion academica: {$post['estudios']}";
        }else{
            $rta = 'No enviaron nada';
        }
        return $rta;
    }
}

//Ejercicio 6 

class ejercicio6{
    public function eje6($post){
        $rta = ''; 
        $dep = '';
        if (isset($post)) {
            $voley = isset($post['v']) ? ' Voley ' : ''; 
            $basket = isset($post['b']) ? ' Basket ' : '';
            $futbol = isset($post['f']) ? ' Futbol ' : '';
            $tennis = isset($post['t']) ? ' Tennis ' : '';
            $dep = $voley . $basket . $futbol . $tennis; 
            $rta = "Hola, {$post['nombre']}, {$post['apellido']} tienes {$post['edad']} años y vives en {$post['direccion']}. Eres {$post['selector']} y sobre su situacion academica: {$post['estudios']} y practica los siguientes deportes: {$dep}";
        }else{
            $rta = 'No enviaron nada';
        }
        return $rta;
    }
}

//Ejercicio 7

class ejercicio7{
    public function eje7($post){
        $num1 = $post['num1'];
        $num2 = $post['num2']; 
        $rta = '';
        if ($post['selector'] == 'suma') {
            $rta = $num1 + $num2;
        }elseif ($post['selector'] == 'resta') {
            $rta = $num1 - $num2;
        }else{
            $rta = $num1 * $num2;
        }
        return $rta; 
    }
}

//Ejercicio 8

class ejercicio8{
    public function eje8($post){
        $rta = 0;
        if (isset($post)) {
            $edad = $post['edad']; 
            $estudia = $post['selector']; 
            if ($edad < 12 || $estudia == 'si') {
                $rta = 160;
            }elseif ($edad >= 12 && $estudia == 'si') {
                $rta = 180;
            }else{
                $rta = 300;
            }
        }
        return $rta; 
    }
}
?>