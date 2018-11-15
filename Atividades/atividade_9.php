<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 9 </title>
    </head>
    
    <body>
        <h1>Atividade 9 </h1>
        <form method="post">
            
            <br>
            <label>Digite um numero para imprimar numeros de 0 ate o numero escolhido </label>
            
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
          
            
            if(empty($_POST['num']) ){
         
              echo 'Alguns dos campos estão vazios';
                  
              }
              
          for($n = 0; $n < $num; $n++){
                  echo $n;
                
          }
           
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>





