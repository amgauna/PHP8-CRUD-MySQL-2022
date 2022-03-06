<?php 
// Importamos o autoload do composer
require_once __DIR__.'../src/app/config/bootstrap.php';

// Como vamos trabalhar com envio de dados passados pelo terminal
// apenas garanto que haja valor para que seja processado a ação.
if(isset($entityManager)){
    //Importamos o repository que nos auxiliará com a pesquisa.
    $productRepository = $entityManager->getRepository('nome-email\Product');
    
    // Podemos acessar o método findAll() responsável por retornar todos os 
    // registros cadastrados em nossa tabela products
    $products = $productRepository->findAll();

    // Realizamos uma iteração de dados
    foreach ($products as $product) {
        // Exibimos o resultado de cada registro encontrado
        var_dump($product);
    }
}
?>
