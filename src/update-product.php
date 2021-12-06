<?php 

// Importamos o autoload do composer
require_once __DIR__.'/../config/bootstrap.php';

// Como vamos trabalhar com envio de dados passados pelo terminal
// apenas garanto que haja valor para que seja processado a ação.
if(isset($argv)){
    
    // Recebemos o id do registro a ser atualizado
    $id      = $argv[1];
    // Recebemos o novo nome do produto
    $newName = $argv[2];

    // Pesquisamos para valizar existência do produto no banco de dados
    $product = $entityManager->find('DiegoBrocanelli\Product', $id);

    // Caso produto não seja localizado, será retornado mensagem infromando o usuário
    if ($product === null) {
        echo "Product $id does not exist.\n";
        exit(1);
    }

    // Informamos o nome atual
    echo 'Old name: ' . $product->getName() ."\n";

    // Inserimos o novo nome desejado para o produto
    $product->setName($newName);

    // Executamos a ação de update
    $entityManager->flush();

    // Retornamos para o usuário o produto com seu novo nome
    echo 'New name: ' . $product->getName() ."\n";
}

?>
