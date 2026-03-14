<?php

// index.php será o ponto de entrada do sistema

require_once 'app/models/Cidade.php';   
try{
//Criando objeto
$cidade = new Cidade("Itapira", "SP");
$cidade->setId(1);

echo "<h2> Dados da Cidade </h2>";
echo "ID: " . $cidade->getId() . "<br>";
echo "Nome: " . $cidade->getNome() . "<br>";    
echo "Estado: " . $cidade->getEstado() . "<br>";    
 } catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

// Atribuindo valores diretamente 
$cidade->id = 1;
$cidade->nome = "Itapira";
$cidade->estado = 'SP';


echo "<pre>";

var_dump($cidade);

echo "</pre>";


?>