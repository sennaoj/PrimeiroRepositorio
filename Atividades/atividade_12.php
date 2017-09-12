<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 12 </title>
    </head>
    <body>
        <h1>Atividade 12 </h1>
        <form method="post">
            
            <br>
            <h4><em>  Fazer mutiplicação usando operador '+' </h4></em> 
            <br><br>
            <label>Digite o primeiro valor </label>
            
            <br>
            <input type="text"  name="num1">
            <br><br>
            <label>Digite o segundo valor </label>
            
            
            <br>
            <input type="text"  name="num2">
            <br><br>
             
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <lable>Resultado </lable>
            
            <?php

            if(isset($_POST)){
            
                /*
                if($valor1 = $_POST['num1']){
                    a
                    b
                    c
                    
                }
                
                 * *
                 */
            /*
                $valor1 = isset( $_POST ['num1']) ? $_POST['num1'] : null;
            $valor2 = isset( $_POST ['num2']) ? $_POST['num2'] : null;
            
            $vet = array();

            for($result = 1; $result <= $valor1; $result++ )
                $vet[] = $valor2;
            
            
            echo join('+',$vet);
            echo '=' . array_sum($vet);
              
            }*/
                
            $valor1 = isset( $_POST ['num1']) ? $_POST['num1'] : null;
            $valor2 = isset( $_POST ['num2']) ? $_POST['num2'] : null;
            
            $res=0;
            $res1 = "({$valor1} * {$valor2}) = ";
            for($i = 1;$i <= $valor1;$i++){
                $res+=$valor2;
                $res1.=$valor2." + ";
                
            }
            
            
            echo substr($res1,0,-2);
            }
            
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>





