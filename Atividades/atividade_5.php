<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 5 </title>
    </head>
    
    <body>
        <h1>Atividade 5 </h1>
        <form method="post">
           
            <br>
            <label>Digite o valor de A </label>
            
            <br>
            <input type="text"  name="A">
            <br><br>
            
             <br>
            <label>Digite o valor de B </label>
            
            <br>
            <input type="text"  name="B">
            <br><br>
             <br>
           
            <br><br>
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Ordenar">
            <br><br>
            
            <?php

                $vet[0] = isset( $_POST ['A']) ? $_POST['A'] : null;
                $vet[1] = isset( $_POST ['B']) ? $_POST['B'] : null;
             
             /*   
             bubbleSort($vet);
                function bubbleSort($vetor){

                    for ($cont1=0; $cont1<2; $cont1++){
                        for ($cont2=0;$cont2<1; $cont2++){

                           if($vetor [$cont2+1]<=$vetor[$cont2]){
                               $aux =  $vetor[$cont2];
                               $vetor[$cont2]=$vetor[$cont2+1];
                               $vetor[$cont2+1]=$aux;
                            }
                        } 

                         $lista[$cont1]=$aux; 
                    }
                        echo '<h1>Lista Organizada em Ordem crescente</h1>'; 
                        for($n=0;$n<2; $n++){
                            echo '<td><h3> '.$n.'='.$vetor[$n].'</h3></td>';
                        }
                }
              
              */
                
                if($_POST['A'] > $_POST['B']){
                    echo $_POST['A'] ." - ".$_POST['B'];
                }else{
                    echo $_POST['B'] ." - ".$_POST['A'];
                }
            if(empty($_POST['A']) && empty($_POST['B'])){
         
              echo 'Alguns dos campos estão vazios';
              
            }
          
            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>