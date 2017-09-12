<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 14 </title>
    </head>
    
    <body>
        <h1>Atividade 14 </h1>
        <form method="post">
            
            <br>
            <h1> Fazer Comparacação entre Strings </h1>
            <br><br>
            <label>Digite o primeiro nome </label>
            
            <br>
            <input type="text"  name="nome1">
            <br><br>
            <label>Digite o segundo nome </label>
            
            <br>
            <input type="text"  name="nome2">
            <br><br>
             
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <lable>Resultado </lable>
            
            <?php

            $nome1 = isset( $_POST ['nome1']) ? $_POST['nome1'] : null;
            $nome2 = isset( $_POST ['nome2']) ? $_POST['nome2'] : null;
            
            
            
            
           if($nome1 === $nome2){
               echo 'Iguais';
               
           }else{
               
               echo 'Diferentes';
           }
              
              
            ?>
            
            <br><br>
            
            
            
        </form>
        
    </body>
    
</html>





