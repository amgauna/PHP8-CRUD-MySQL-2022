<?php 

// Importamos o autoload do composer
require_once __DIR__.'/../config/bootstrap.php';

// Como vamos trabalhar com envio de dados passados pelo terminal
// apenas garanto que haja valor para que seja processado a ação.
if(isset($argv)){
    // Recebemos o id informado
    $id = (int)$argv[1];
    
    // Nosso entity manager nos fornece acesso ao método find()
    // no qual nos permite informar nossa entidade e o id para pesquisa
    $product = $entityManager->find('DiegoBrocanelli\Product', $id);

    // Caso não seja encontrado nenhum produto com o id desejado
    // será retornado mensagem informando o usuário
    if($product === null){
        echo "No product found. \n";
        exit(1);
    }

    // Caso o produto seja encontrado exibimos seu nome e data de criação
    echo sprintf('-%s\n', $product->getName() . ' - ' . $product->getCreated());
}

?>
