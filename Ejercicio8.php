<!DOCTYPE html>
<!--
Ejercicio 8
Dados N números enteros como datos mediante un cuadro
de dialogo, obtener:
a) Cuántos números leídos fueron mayores que cero.
b) El total y promedio de los números positivos.
c) El total de los números negativos. 
d) El promedio de todos los números. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="#" method="GET">   
        <h3>Ingrese el numero de datos a ingresar</h3><input type="text" name="numero">
        <input type="submit" name="enviar" value="Guardar"><br>
        <?php
        if(isset($_GET['enviar'])){
        $numero=$_GET['numero'];
        for($i=1;$i<=$numero;$i++)
        {
            echo'Digite una numero<input type="text" name="digi[]"><br>';
        }
        echo '<br> <input type="submit" name="b2" value="guardar">';
        
        }
        if(isset($_GET['b2'])){
            $dato=$_GET['digi'];
            $l=0;
            $acum=0;
            $suma=0;
            $negativo=0;
            for($i=0;$i<count($dato);$i++){
              if($dato[$i]<0)
            {
               $negativo=$negativo+$dato[$i];
              
            }
            if($dato[$i]>0)
            {
               $acum++;
               $suma=$suma+$dato[$i];
                
            } 
            $l++;
            }
        
        $promedio=$suma/$acum;
        $proml=($suma+$negativo)/$l;
        echo"El total de la suma de numero positivo es:".$suma."\ntotal de numero negativo es:".$negativo."\n"."El promedio de los numeros positivos es".$promedio."\n"."promedio total de los numero ingresados es:".$proml."\n"."Total de numeros positivos :".$acum;
        }
        ?>
       
    </body>
</html>
