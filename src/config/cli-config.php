<?php 
// Importação do autoloader do composer
require __DIR__.'/bootstrap.php';

// Retorna o componente que nos auxilia na utilização do Schema tool
// Necessário para gerar Tabelas para trabalhar com metadados
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

?>
