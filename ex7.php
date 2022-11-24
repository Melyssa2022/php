<?php
/*Faça um programa para uma loja de tintas. o programa deverá pedir o tamanho em metros quadrados da area a ser pintada.
considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a  tinta é vendida em latas de 18 litros, que custam R$ 80,00.
Informe ao usuario a quantidade de latas de tinta a serem compradas e o preço total. 
*/


$metro = '10000';
$tinta = ($metro / 3)/18;

echo 'você terá que comprar ' . intval($tinta) . ' latas de tinta de 18 litros';






?>