<!DOCTYPE html>
<html>
    <head>
        <title> Exercicios Atividade 15 </title>
    </head>
    
    <body>
        <h1>Atividade 15 </h1>
        <form method="post">
            
            <br>
            <h1> Fazer busca na String </h1>
            <br><br>
            <label>Digite um nome </label>
            
            <br>
            <input type="text"  name="nome1">
            <br><br>
            <label>Digite um caracter a ser buscado dentro do nome </label>
            
            <br>
            <input type="text"  name="nome2">
            <br><br>
             
            <label>Enviar</label>
            <br>
            <input type="submit" name="sub" value="Enviar">
            <br><br>
            
            <lable>Resultado </lable>
            
            <?php
            
if (isset($_POST['nome2'])){

/*    
            $nome1 = isset( $_POST ['nome1']) ? $_POST['nome1'] : null;
            $nome2 = isset( $_POST ['nome2']) ? $_POST['nome2'] : null;
            
            echo substr_count($nome1, $nome2);
  */
    
    $cont = 0;
        for($i=0;$i<strlen($_POST['nome1']);$i++){
            if(substr($_POST['nome1'],$i,1) == $_POST['nome2']){
                $cont++;
            }
        }
    
        
         for($i=0;$i<strlen($_POST['nome1']);$i++){
            if($_POST['nome1'][$i] == $_POST['nome2']){
                $cont++;
            }
        }
        
        
        echo $cont;
}


            ?>
            
            <br><br>
            
        </form>
        
    </body>
    
</html>





