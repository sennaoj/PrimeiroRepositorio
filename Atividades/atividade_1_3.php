<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 01 - 03 </title>
    </head>
    
    <body>
        
        <h1>Atividade 1 - 3  </h1>
        <form method="post">
            
            <h4><em> Digite numeros negativos, numeros menor que 10, e maior que 10 para bincar com resultados</em></h4>
            
            <br><br>
            <label>Digite um valor</label>
            
            <br>
            <input type="text"  name="val">
            <br><br>
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
           </form>
            <?php

            $val = isset( $_POST ['val']) ? $_POST['val'] : null;
            
            if($_POST['val'] == ""){
         
              echo 'campo vazio';
              
            }elseif($val < 0){
                    
                 echo 'O valor é negativo';
                
            }elseif ($val == 0.0) {
                    echo "<br><br>".' Valor Digitado igual a 0'."<br>";
            }elseif ($val < 10 ){
                  echo 'O valor é Positivo e não é maior ou igual a 10 ';
                   
            }elseif($val >= 10){
                    
                     echo 'O valor positivo e maior ou igual a 10';
                    
            }
           
            ?>
            
        
        
    </body>
    
</html>





