<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 4 </title>
    </head>
    
    <body>
        <h1>Atividade 4 </h1>
        <form method="post">
            
            <br>
            <label>Digite o valor de A </label>
            
            <br>
            <input type="text" id="A" name="A">
            <br><br>
            
             <br>
            <label>Digite o valor de B </label>
            
            <br>
            <input type="text"  name="B">
            <br><br>
             <br>
            <label>Digite o valor de C </label>
            
            <br>
            <input type="text"  name="C">
            <br><br>
             <br>
            <label>Digite o valor de D </label>
            
            <br>
            <input type="text"  name="D">
            <br><br>
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <h2><em><lable>Resultado da soma e multiplicação </lable></h2></em> 
            
            <br>
            
            <?php

                    $a = isset( $_POST ['A']) ? $_POST['A'] : null;
                    $b = isset( $_POST ['B']) ? $_POST['B'] : null;
                    $c = isset( $_POST ['C']) ? $_POST['C'] : null;
                    $d = isset( $_POST ['D']) ? $_POST['D'] : null;

           
            
            if(empty($_POST['A']) && empty($_POST['B'])&& empty($_POST['C'])&& empty($_POST['D'])){
         
              echo "<h4><em>". 'Alguns dos campos estão vazios'."</h4></em>" ."<br>";
              
            }
                 
                $soma_A_C =  $a + $c;
                $soma_B_D = $b + $d;
                $mult_B_D = $b * $d;
            
            if ($soma_A_C ==  $mult_B_D){
                    echo 'A soma é igual ao da multiplicaçao '.', O valor da soma é '.'('.$soma_A_C.')'."<br>".'Valor da multiplicação '.'('.$mult_B_D.')';
                    
            }else if ($soma_A_C < $mult_B_D){
                     echo 'A soma é menor que a multiplicaçao '.', O valor da soma é '.'('.$soma_A_C.')'. "<br>".'Valor da multiplicação '.$mult_B_D.')';
                    
                }else{
                    echo ' A soma é maior que a multiplicação '.', O valor da soma é '.'('.$soma_A_C.')'. "<br>".'Valor da multiplicação '.$mult_B_D.')';
                    
                }
           
            ?>
            
            <br><br>
            
            <h4><em> <label>Soma entre os campos</label></em></h4>
            <br>
            
            <?php
            
                if ($soma_A_C > $soma_B_D ){

                    echo 'A + C é maior que a soma B + D'.', A soma entre A + C é '.'('.$soma_A_C.')'.' - '.'A soma entre B + D é '.'('.$soma_B_D.')';
                }else if($soma_A_C < $soma_B_D){
                   echo 'A + C é menor que a soma B + D'.', A soma entre A + C é '.'('.$soma_A_C.')'. ' - '.'A soma entre B + D é '.'('.$soma_B_D.')'; 

                    }else {

                    echo 'A + C é igual a soma B + D'.', A soma entre A + C é '.'('.$soma_A_C.')'. ' - '.'A soma entre B + D é '.'('.$soma_B_D.')';
                    }
            
            ?>
            
        </form>
        
    </body>
    
</html>





