<?php

/*
 * Reto #5
 * ASPECT RATIO DE UNA IMAGEN
 * Fecha publicación enunciado: 01/02/22
 * Fecha publicación resolución: 07/02/22
 * Dificultad: DIFÍCIL
 *
 * Enunciado: Crea un programa que se encargue de calcular el aspect ratio de una imagen a partir de una url.
 * - Url de ejemplo: https://raw.githubusercontent.com/mouredev/mouredev/master/mouredev_github_profile.png
 * - Por ratio hacemos referencia por ejemplo a los "16:9" de una imagen de 1920*1080px.
 *
 * Información adicional:
 * - Usa el canal de nuestro discord (https://mouredev.com/discord) "🔁reto-semanal" para preguntas, dudas o prestar ayuda a la comunidad.
 * - Puedes hacer un Fork del repo y una Pull Request al repo original para que veamos tu solución aportada.
 * - Revisaré el ejercicio en directo desde Twitch el lunes siguiente al de su publicación.
 * - Subiré una posible solución al ejercicio el lunes siguiente al de su publicación.
 *
 */

/*
$exif = exif_read_data('mouredev_github_profile.jpg'); esta funcion devuelve todos los datos exif de un jpg, jpeg o tiff en un array

intval() pasa a int el numero

*/

function gcd($a,$b) {
    return ($a % $b) ? gcd($b,$a % $b) : $b;
}

/* Funcion gcd (de internet) saca el maximo comun divisor (great common divisor) con un if en una sola linea.
getimagesize coge en un array las dimensiones de una imagen, para coger la imagen de una url tiene que ir en dobles comillas ""
*/
$size = getimagesize("https://raw.githubusercontent.com/mouredev/mouredev/master/mouredev_github_profile.png");

$gcd = gcd($size[0], $size[1]);

$aspect_ratio = $size[0]/$gcd .' : '. $size[1]/$gcd;

echo $aspect_ratio;