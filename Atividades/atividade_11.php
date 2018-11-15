<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 11 </title>
    </head>
    
    <body>
        <h1>Atividade 11 </h1>
        <form method="post">
            
            <br>
            <h1> imprimir numeros intermediarios </h1>
            <br><br>
            <label>Digite o primeiro numero </label>
            
            <br>
            <input type="text"  name="num1">
            <br><br>
            <label>Digite o segundo numero </label>
            
            <br>
            <input type="text"  name="num2">
            <br><br>
             
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <lable>Resultado </lable>
            
            <?php

            $valor1 = isset( $_POST ['num1']) ? $_POST['num1'] : null;
            $valor2 = isset( $_POST ['num2']) ? $_POST['num2'] : null;
            
           for($result = $valor1; $result < $valor2; $result++ ){
                echo $result ;
            }
              
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>





