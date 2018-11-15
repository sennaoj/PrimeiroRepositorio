<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 8 </title>
    </head>
    
    <body>
        <h1>Atividade 8 </h1>
        <form method="post">
            
            <h3><em><label>Calculo de salario com reajuste </label></h3></em>
            
            <br>
            <label>Digite seu salario </label>
            
            <br>
            <input type="text"  name="salario">
            <br><br>
             
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <?php

            $salario = isset( $_POST ['salario']) ? $_POST['salario'] : null;
          
          //  $reaj_50  = $salario * 1.5;
            //$reaj_30 = $salario * 1.3;
            
            /*
            $reaj_50 = (($salario * 50)/100) + $salario;
            $reaj_30 = (($salario * 30)/100) + $salario;
             
             */
            if(empty($_POST['salario']) ){
         
              echo 'Alguns dos campos estão vazios'."<br><br>";
              
          }
          
                if ($salario <= 300 ){
                   // echo 'Seu salario com reajuste é de ('.$reaj_50.')'."<br>";
                    $reaj  = $salario * 1.5;
                }else if($salario > 300) {
                    // echo 'Seu salario com reajuste é de ('.$reaj_30.')';
                     $reaj  = $salario * 1.3;
                }
                echo 'Seu salario com reajuste é de ('.$reaj.')';
           
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>





