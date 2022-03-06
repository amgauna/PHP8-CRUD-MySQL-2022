<?php 

// Importamos o autoload do composer
require_once __DIR__.'../src/app/config/bootstrap.php';

// Como vamos trabalhar com envio de dados passados pelo terminal
// apenas garanto que haja valor para que seja processado a ação.
if(isset($entityManager)){

    // Recebemos o id do registro a ser atualizado
    $id = $argv[1];

    // Pesquisamos para valizar existência do produto no banco de dados
    $product = $entityManager->find('nome\Product', $id);

    // Caso produto não seja localizado, será retornado mensagem infromando o usuário
    if ($product === null) {
        echo "Product $id does not exist.\n";
        exit(1);
    }

    // Executamos a ação de remoção
    $entityManager->remove($product);

    // Efetiva a ação de remoção
    $entityManager->flush();

    // Retorna mensagem informativa de ação realizada com sucesso para o usuário
    echo 'Product remove successfully!';
}

?>
