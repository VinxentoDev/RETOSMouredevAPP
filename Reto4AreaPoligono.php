<?php

/*
 * Reto #4
 * ÁREA DE UN POLÍGONO
 * Fecha publicación enunciado: 24/01/22
 * Fecha publicación resolución: 31/01/22
 * Dificultad: FÁCIL
 *
 * Enunciado: Crea UNA ÚNICA FUNCIÓN (importante que sólo sea una) que sea capaz de calcular y retornar el área de un polígono.
 * - La función recibirá por parámetro sólo UN polígono a la vez.
 * - Los polígonos soportados serán Triángulo, Cuadrado y Rectángulo.
 * - Imprime el cálculo del área de un polígono de cada tipo.
 *
 * Información adicional:
 * - Usa el canal de nuestro discord (https://mouredev.com/discord) "🔁reto-semanal" para preguntas, dudas o prestar ayuda a la comunidad.
 * - Puedes hacer un Fork del repo y una Pull Request al repo original para que veamos tu solución aportada.
 * - Revisaré el ejercicio en directo desde Twitch el lunes siguiente al de su publicación.
 * - Subiré una posible solución al ejercicio el lunes siguiente al de su publicación.
 *
 */

// esto es una prueba de git push

function areaPoligon($width, $heigh){

    $poligon = readline('Por favor, introduce tu poligono sin tildes ');

    strtolower($poligon);

    if($poligon==='triangulo'){

        $area = ($width * $heigh)/2;

        printf("El area del triangulo es $area");

    }elseif($poligon==='cuadrado'){

        $area = $width * $heigh;

        printf("El area del cuadrado es $area");

    }elseif($poligon==='rectangulo'){

        $area = $width * $heigh;

        printf("El area del rectangulo es $area");


    }else{

        printf('Error, el poligono no esta bien escrito o no esta en la base de datos.');

    }

}