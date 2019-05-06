<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$n=2;
$suma = 0;

do{
    $suma = $suma + $n;
        $n = $n +3;
        $suma = $suma + $n;
        $n = $n +2;
        
    }while($n<1800);
    $suma = $suma + $n;
echo "la suma de los valores es: " . $suma;

?>
