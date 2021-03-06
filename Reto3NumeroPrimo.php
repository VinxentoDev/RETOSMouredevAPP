<?php

/*
 * Reto #3
 * ¿ES UN NÚMERO PRIMO?
 * Fecha publicación enunciado: 17/01/22
 * Fecha publicación resolución: 24/01/22
 * Dificultad: MEDIA
 *
 * Enunciado: Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 *
 * Información adicional:
 * - Usa el canal de nuestro discord (https://mouredev.com/discord) "🔁reto-semanal" para preguntas, dudas o prestar ayuda a la comunidad.
 * - Puedes hacer un Fork del repo y una Pull Request al repo original para que veamos tu solución aportada.
 * - Revisaré el ejercicio en directo desde Twitch el lunes siguiente al de su publicación.
 * - Subiré una posible solución al ejercicio el lunes siguiente al de su publicación.
 *
 */

 /**
  * Funciona pero a partir del numero 23 el algoritmo da error, entiendo que por la enorme cantidad de numeros
  * y no se interpretar otra formula matematica para comprobar si el numero es primo
  *
  * Buscando encuentro un algoritmo que saca si un numero es primo o no, y lo adapto
  */

require_once 'isPrime.php';

/*
function isPrime($num){

    $cont = 0;
    
    for ($i=1; $i <= $num; $i++) {
       if ($num % $i==0) {

           $cont = $cont + 1;
        
        }
    }
    if ($cont==2){ 
        
        printf($num. ' ');

    }else{
        
        echo '* ';

    }
    /*
    $storage = $num;
    $solution = 1;
    $num--;
    
    for($i=1;$i<$storage;$i++){

        $solution *= $num;

        $num--;

    }
    
    $solution++;
    

    if ($solution % $storage == 0 && $storage !== 1 && $storage !== 0){
    
        printf($storage. ' ');
    
    }else{

        echo '* ';

    }
    
}

Al final mientras espero la comida en casa de la suegra, me programo un isPrime() en el movil y funciona 100% bien
Me ayudo mucho a darle una vuelta el hecho de que, Moure leyese despacio el enunciado varias veces. 
Me ayudo a verlo con perspectiva y a buscar soluciones
*/
function printPrimes($num){

    $storage = $num;

    for($i=0;$i<$storage; $i++){

        isPrime($num);

        $num--;

    }

}

// $num = readline('Escribe el tope de la comprobacion de numeros primos ');

printPrimes(100);