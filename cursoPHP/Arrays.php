<?php
$num = 1;
//Determinando um array
$carros = array("Gol", "HB20", "Strada");

//Adicionando items no array(Pode ser colocado a posição que o novo item vai ser adicionado dentro das chaver)
$carros[] = "S10";

//printando o array
print_r($carros);
echo "<br>";

//printando um item específico
echo $carros[2];
echo "<br>";

//Outra forma para criar um array
$nomes = ["Gabriel", "Eduardo", "Carlos"];
print_r($nomes);
echo "<br>";

//Mostrando a quantidade de itens que tem em um array com o "Cout"
echo count($nomes);
echo "<br>";
