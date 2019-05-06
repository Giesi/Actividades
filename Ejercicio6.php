<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
         <legend>Numero inicial</legend> 
         
        <form action="#" method="post">
        Número:
        <input type="text" name="num" placeholder="Número" size="5"> <br><br>
        
        <input type="submit" name="enviar">
        </form>
        
        </fieldset> <br>
        <?php
        $num = filter_input(INPUT_POST, 'num');
        echo $numero;
        for( $i=0;$numero!=1;$i++){
        if($numero%2==0){
            $numero = $numero / 2;
        }else{
            $numero = ($numero * 3) + 1;
        }
         echo numero . "<br>";
         
    }
        ?>
    </body>
</html>