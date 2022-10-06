<?php 

// OBS: as funções is_array e in_array Retornam 1 se for True e nada se for false)

$nomes = ["Gabriel", "Eduardo", "Carlos"];
print_r($nomes);
echo "<br>";
echo "<hr>";




//Função do array que retorna se é um array
echo is_array($nomes);
echo "<br>";
echo "<hr>";




//Função do array que Retorna se um item está dentro do array(no primeiro campo, cola o item que você queira ver se está, e o segundo campo é o nome do array)
echo in_array("Gabriel", $nomes);
echo "<br>";
echo "<hr>";




//Função que retorna os índices de outro array
$item = array_keys($nomes);
print_r($item);
echo "<br>";
echo "<hr>";




//Função que junta conteúdos de dois arrays
$coresPrimarias = ["vermelho", "azul"];
$coresSecundarias = ["Violeta", "Ciano"];

$paletaCores = array_merge($coresPrimarias, $coresSecundarias);

print_r($paletaCores);
echo "<br>";
echo "<hr>";




$lugares = ["Caruaru", "Rceife", "Bezerros", "Alagoas", "Toritama"];
print_r($lugares);
echo "<br>";


//Função para excluir o ultimo item de um array
array_pop($lugares);
echo "<br>";
print_r($lugares);
echo "<br>";




//Função para excluir o primeiro item de um array
array_shift($lugares);
echo "<br>";
print_r($lugares);
echo "<br>";
echo "<hr>";




$frutas = ["Manga", "Uva", "Laranja"];
print_r($frutas);
echo "<br>";


//Função para adicionar um ou mais elementos no inicio de um array
array_unshift($frutas, "Côco", "Morango", "Limão");
print_r($frutas);
echo "<br>";
echo "<hr>";




$corpo = ["Perna", "Braço", "Olhos"];
print_r($corpo);
echo "<br>";


//Função para adicionar um ou mais elementos no final de um array
array_push($corpo, "Cabeça", "Dedos", "Ombros");
print_r($corpo);
echo "<br>";
echo "<hr>";




//Função que mescla conteúdos de dois arrays(Sendo o primeiro array, para o índice, e o segundo para os valores)
$keys= ["Champion", "Loser"];
$values = ["GSW", "Bostos Celtics"];

$teams = array_combine($keys, $values);

print_r($teams);
echo "<br>";
echo "<hr>";




//Função que soma todos os items de dentro de um array
$nums = [1, 5, 8, 9, 13, 56];
$total = array_sum($nums);
echo $total;
echo "<br>";
echo "<hr>";