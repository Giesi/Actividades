 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1>NUMEROS PRIMOS DEL 1 AL 1000</h1>";
echo "<br>";
for($i=1;$i<=1000;$i++)
{
    if($i%2==0)
    {
        echo $i;
        echo "<br>";
    }
    
}
echo "<h1>ESTOS SON LOS AÑOS BISIESTOS</h1>";
echo "<br>";
for($i=2000;$i<3000;$i++)
{
    if($i%4==0)
    {
        echo $i;
        echo "<br>";
    }
    
}