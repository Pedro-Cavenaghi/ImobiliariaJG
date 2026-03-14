<?php

require_once '../app/models/Cidade.php';

//criando objeto
$cidade = new Cidade();

//atribuindo valores diretamente
$cidade->id = 1;
$cidade->nome ="Itapira";
$cidade->estado ="SP";

echo "<pre>";
var_dump($cidade);
echo "</pre>";


// index.php será o ponto de entrada do sistema
echo "<h1>Imobliaria JG</h1>";
echo "<p>Projeto iniciado com sucesso</p>";

?>