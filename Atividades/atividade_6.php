<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 6 </title>
    </head>
    
    <body>
        <h1>Atividade 6 </h1>
        <form method="post">
            
            <h2><em><lable>Calculando a Media</lable></h2></em>
            
            <br>
            <label>Digite a nota 1 </label>
            
            <br>
            <input type="text" name="A">
            <br><br>
            
            <br>
            <label>Digite a nota 2 </label>
            
            
            <br>
            <input type="text"  name="B">
            <br><br>
             <br>
            <label>Digite a nota 3 </label>
            
            <br>
            <input type="text"  name="C">
            <br><br>
             <br>
            <label>Digite a nota 4 </label>
            
            <br>
            <input type="text"  name="D">
            <br><br>
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <?php

            $a = isset( $_POST ['A']) ? $_POST['A'] : null;
            $b = isset( $_POST ['B']) ? $_POST['B'] : null;
            $c = isset( $_POST ['C']) ? $_POST['C'] : null;
            $d = isset( $_POST ['D']) ? $_POST['D'] : null;
            
            $soma =  ($a + $b + $c + $d)/4;
            
            if(empty($_POST['A']) && empty($_POST['B'])&& empty($_POST['C'])&& empty($_POST['D'])){
         
              echo "<br>".'Alguns dos campos estão vazios'."<br>";
              
          }
          
            echo "<h3><em><lable>Resultado da Media: </lable></h3></em><br>";
            
                if ($soma >= 7 ){
                    echo 'Parabens APROVADO!'.' sua media é '.'('.$soma.')';
                    
                }else  {
                     echo 'Reprovado '.'sua media é '.'('.$soma.')';
                    
                }
                 #echo 'O valor não é maior ou igual 10';
           
            ?>
            
            <br><br>
            
            
        </form>
        
    </body>
    
    
</html>





