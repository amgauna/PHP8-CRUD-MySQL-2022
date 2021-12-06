<?php 

// Importação do autoload do composer
require_once __DIR__.'/../vendor/autoload.php';

// Importação dos pacotes necessários
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Criar uma configuração ORM do Doctrine simples "default" para utilizar Annotations
$isDevMode = true;
$configuration = Setup::createAnnotationMetadataConfiguration(
    [__DIR__.'/../src'], 
    $isDevMode
);

// Configurações do banco de dados
// Estamos utilizando o SQLite, para facilitar a reprodução do post
$connection = [
    'driver' => 'pdo_sqlite', // Vamos utilizar o drive pdo do sqlite
    'path'   => __DIR__.'/../db/db.sqlite' // caminho onde será armazenado o DB.
];

// Obtemos o Entity Manager
$entityManager = EntityManager::create($connection, $configuration);
