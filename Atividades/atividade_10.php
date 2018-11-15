<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 10 </title>
    </head>
    
    <body>
        <h1>Atividade 10 </h1>
        <form method="post">
            
            <br>
            <label>Digite um numero para imprimar o fatorial do numero escolhido </label>
            
            <br>
            <input type="text"  name="num">
            <br><br>
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <lable>Resultado </lable>
            
            <?php

            $num = isset( $_POST ['num']) ? $_POST['num'] : null;
            $result = 1;
            
           while($num > 1){
                $result *= $num;
                $num--;
            }
         
              echo 'O Fatorial é '.$result;
              
           
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>





