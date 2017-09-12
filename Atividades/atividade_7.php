<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 7 </title>
    </head>
    
    <body>
        <h1>Atividade 7 </h1>
        <form method="post">
           
            <br>
            <h3><em><label>Escolha seu sexo </label></h3></em>
            
            <br>
            <select name="sexo">
                <option value="0">**SELECIONE**</OPTION>
                <option value="masc">Masculino</OPTION>
                <option value="fem">Feminino</OPTION>
            </select>
            
            <!--
            <lable for="masc" name="masc">Masculino</lable>
            <input type="radio"  name="sexo" value="masc">
             
            <lable for="fem" name="fem" >Feminino</lable>
            <input type="radio"  name="sexo" value="fem">
            -->
            <br><br>
            
            <label>Digite sua altura </label>
            <input type="text"  name="alt" >
            
             <br>
           
            <br><br>
            <label>Calcula o Peso Ideal</label>
            <br>
            <input type="submit" name="sub" value="Calcular">
            <br><br>
            
            <?php
            
                $alt = isset( $_POST ['alt']) ? $_POST['alt'] : null;
                $sexo = isset( $_POST ['sexo']) ? $_POST['sexo'] : null;

            if (isset($_POST['sexo']) && isset($_POST['alt'])){
                
            }
            
            if($sexo == 'masc'){
               
                 $Hom = 72.7 * $alt - 58; #58
                 
                echo 'seu peso ideal é '.$Hom ;
                
            }else if ($sexo == 'fem'){
                $Fem = 62.1 * $alt - 44.7; #44.7
                echo 'seu peso ideal é '.$Fem;
            }
          
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>