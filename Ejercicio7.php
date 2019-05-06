<!DOCTYPE html>
<!--
Autor katherine Urquilla
Grupo sis16
Ejercicio7
 Calcular el aumento de sueldo para N empleados de una
empresa (mediante cuadros de dialogo), bajo el siguiente criterio:
 Si el sueldo es menor a $650, el aumento es del 15%
 Si el sueldo está comprendido entre $650 y $1000, el aumento es del 12%
 Si el sueldo es mayor a $1000, el aumento es del 9%.
 Imprimir lo siguiente: Código del trabajador, nombre del trabajador, 
sueldo del trabajador,monto total de la nómina, considerando el nuevo
sueldo y el monto total de los aumentos. 
-->
<html lang ="es">
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>
        <form action="#" method="get">
            Ingrese el numero de empleados <input type="text" name="n"><input type="submit" name="b1">
        </form>
        <?php
        if(isset($_GET['b1'])){
            $n=$_GET['n'];
          echo'<form action="#" method="GET">';
        for ($i = 0; $i < $n; $i++) {
           echo'#'.($i+1).' Ingrese el codigo del empleado<input type="text" name="code[]">  Ingrese el nombre del empleado</h3><input type="text" name="nombre[]"> Ingrese el sueldo del empleado<input type="text" name="sueldo[]"><br>';
        }
         echo' <input type="submit" name="enviar" value="Guardar">'; 
       echo'   </form>';
        }   
        if(isset($_GET['enviar'])){         
       $sueldo=$_GET['sueldo'];
       $codigo=$_GET['code'];
       $nombre=$_GET['nombre'];
       $nomina=0;
       $nomAum=0;
       
       for($i=0;$i<  count($nombre);$i++){
            $nomina=$nomina+$sueldo[$i];
            if($sueldo[$i]<650){
                $aumento=$sueldo[$i]*0.15;
       $nuSueldo=$sueldo[$i]+$aumento;
        
        echo"<br>Codigo de trabajador:".$codigo[$i]."\nNombre del trabajador:".$nombre[$i]."\nSueldo del trabajador:$"
       .$nuSueldo; 
        
     } if($sueldo[$i]>=650 && $sueldo[$i]<=1000){
          $aumento2=$sueldo[$i]*0.12;
            $nuSueldo2=$aumento2+$sueldo[$i];
       echo"<br>Codigo de trabajador:".$codigo[$i]."\nNombre del trabajador:".$nombre[$i]."\nSueldo del trabajador:$".$nuSueldo2; 
        }
        if($sueldo[$i]>1000){
            $aumento3=($sueldo[$i]*0.09);
         $nuSueldo3=$sueldo[$i]+$aumento3;
           echo"<br>Codigo de trabajador:".$codigo[$i]."\nNombre del trabajador:".$nombre[$i]."\nSueldo del trabajador:$".$nuSueldo3; 
        }
        
       }
       $aumt=$aumento+$aumento2+$aumento3;
        $nomAum=$nuSueldo+$nuSueldo2+$nuSueldo3;   
         
   echo"<br>Monto total de la nomia:".$nomina."\nNomina Total con aumentos:".$nomAum.' Monto total de aumentos :'.$aumt;}
     
     

    
  
        
        ?>
       

       
    
        
    </body>
</html>
