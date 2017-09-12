
<!DOCTYPE html>

<html>
    
    <head>
       
        <title> Exercicios Atividade 13 </title>
        
    </head>
    
    <body>
        <h1>Atividade 13 </h1>
        <form method="post">
            
            <br>
            <label>Digite uma palavra </label>
            
            <br>
            <input type="text"  name="strings">
            <br><br>
             
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <lable>Nome da String </lable>
            
            <?php

            $Strt = isset( $_POST ['strings']) ? $_POST['strings'] : null;
            echo '('.$Strt.')';
           
            echo "<br>". 'O total de caracter é '.'('. strlen($Strt).')';
            
            
           $valor1 = strlen($Strt);
           
            echo "<br>".'Numeros intermediarios entre 0 e total de caracter ';
            
          for($n = 1; $n < $valor1; $n++){
              
             
              echo "<br>".$n ;
                
          }
            
            ?>
            
            <br><br>
            
            
            
        </form>
        
    </body>
    
    
    
</html>





