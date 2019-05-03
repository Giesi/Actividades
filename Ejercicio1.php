<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
         <legend>Datos a enviar</legend> 
         
        <form action="#" method="post">
        Número:
        <input type="text" name="num" placeholder="Número" size="5"> <br><br>
        
        <input type="submit" name="enviar">
        </form>
        
        </fieldset> <br>
        
        <?php
        
          $num = filter_input(INPUT_POST, 'num');
          $fact=1;
          
       if(isset($num))
        {
         
        for( $i = $num; $i>=1; $i--){
            $fact = $fact * $i;
        }
        
        echo   "El Factorial de $num es: ", $fact;
        
        }
        
        ?>
    </body>
</html>
