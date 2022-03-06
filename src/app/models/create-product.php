<?php 
// Importamos o autoload do composer
require_once __DIR__.'../src/app/config/bootstrap.php';

// Como vamos trabalhar com envio de dados passados pelo terminal
// apenas garanto que haja valor para que seja processado a ação.
if(isset($argv)){
    // coletamos o nome passado pelo usuário no terminal
    $newProductName = $argv[1];

    // Instanciamos nossa entidade Products
    $product = new DiegoBrocanelli\Product();

    // Passamos o novo nome para a entidade
    $product->setName($newProductName);

    // Passamos a data de criação para a aentidade
    $product->setCreated(new \DateTime(date('Y-m-d H:i:s')));

    // Persistimos seus dados
    $entityManager->persist($product);

    // Descarregamos a ação
    $entityManager->flush();
    
    // Para melhor visualização do resultado, retornamos uma mensagem 
    // com o id do registro salvo no DB. 
    echo 'Created Product with ID '.$product->getId()."\n";
}

?>
