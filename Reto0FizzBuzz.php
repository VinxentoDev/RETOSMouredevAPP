<?php

/*
Reto 0
El FAMOSO "FIZZ BUZZ"

Dificultad FACIL
Enunciado: Escribe un programa que muestre por consola con un print los n'umeros de 1 a 100 (ambos incluidos) y
- Multiplos de 3 por la palabra fizz
- Multiplos de 5 por la palabra buzz
- Multiplos de 3 y de 5 a la vez por la palabra fizzbuzz
*/

function fizz(){

    for ($i = 0; $i < 100; $i+=3){

        if ($i == 0 ) {

            printf('1 ');

        }else{

            printf($i.' ');

        }

        if ($i == 99 ) {

            printf('100');

        }

    }

}

function buzz(){

    for ($i = 0; $i <= 100; $i+=5){

        if ($i == 0 ) {

            printf('1 ');
            

        }else{

            printf($i.' ');
        }
    }
    
}

function fizzbuzz(){

    for ($i=1; $i<100; $i++){

        if ($i == 1 ) {

            printf('1 ');

        }elseif($i%3 == 0 || $i%5 == 0){

            printf($i.' ');

        }

    }

}

function reto0($palabra){

    if (strtolower($palabra) !== 'fizz' && strtolower($palabra) !== 'buzz' && strtolower($palabra) !== 'fizzbuzz'){

            printf('Error');
        
    }
    elseif (strtolower($palabra) === 'fizz'){

        fizz();

    }
    elseif (strtolower($palabra) === 'buzz'){

        buzz();

    }else{

        fizzbuzz();

    }

}

//readline lee una linea en consola
$palabra=readline('Escribe la palabra fizz, buzz o fizzbuzz ');

reto0($palabra);