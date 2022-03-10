<?php

/**
 * Reto #1
 * ES UN ANAGRAMA?
 * Dificultad: MEDIA
 * 
 * Escribe una funcion que reciba 2 palabras (String) y retorne verdadero
 * o falso (Boolean) segun sea un anagrama o no.
 * Un Anagrama consiste en formar una palabra reordenando TODAS las letras de otra palabra inicial
 * NO hace falta comprobar que las palabras existan
 * Dos palabras exactamente iguales no son anagrama
 */

function isAnagram($word1, $word2) {

    $chars1 = str_split($word1);
    $chars2 = str_split($word2);
    $check = array_diff($chars1, $chars2);

    if($word1 == $word2){

        return false;

    }elseif (count($chars1) !== count($chars2)) {

        return false;

    }elseif($check){

        return false;

    }else{

        return true;

    }

}

$word1=readline('Introduce la palabra 1 ');
$word2=readline('Introduce la palabra 2 ');

var_dump (isAnagram($word1, $word2));


/*

// Funcion que convierte un String en un array letra a letra, incluye espacios como vacio.
// puedes delimitar la longitud del string str_split($letras, 3);
$letras = str_split($palabra);
var_dump($letras);

Moure lo soluciona de la siguiente manera en Kotlin

coge la primera palabra, la convierte en array (como yo), ordena el array y lo compara con la palabra 2 que le aplica las mismas operaciones.
Yo comparo los arrays a ver si tienen diferencias, Moure los ordena y compara.

*/