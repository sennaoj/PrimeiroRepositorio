
<?php

$a = 3;
$b = &$a;
$b  +=5;

echo "Valor de A Usando referencia - ".$a."<br>";
echo "Valor de B - ". $b;

$a = "aa";
$$b = "bb";

echo "<br>Conteudo de A  - ".$a."<br>";
echo "Conteudo de B - ". $$b;

# ou 

$a = "aa";
$$a = "bb";

echo "<br>Conteudo de A usando outra forma o resultado é o mesmo - ".$a."<br>";
echo "Conteudo de B - ". $aa;

?>