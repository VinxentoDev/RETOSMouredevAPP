<?php

function isPrime($num){
    
    for ($i = 0; $i < $num; $i++) {
        
        $prime = true;
         
         if ($i !== 0 && $i !== 1 && $i !== $num && $num % $i == 0 ){
             
             $prime = false;
             
             break;
             
         }
    }

    if ($prime){
        echo $num.' ';
    }
    
    return $prime;
    
}

// var_dump(isPrime(22));