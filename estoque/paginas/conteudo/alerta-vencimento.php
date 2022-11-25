<?php

include_once("../../config/conexao.php");
$selectProdutos = "SELECT * FROM tb_produto";

try {
    $resultSelProdutos = $conect->prepare($selectProdutos);
    $resultSelProdutos->execute();
    $contSelProdutos = $resultSelProdutos->rowCount();

    if($contSelProdutos > 0){
        while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
            
            $idProduto         = $showProdutos->id_produto;
            $tipoProduto       = $showProdutos->tipo_produto;
            $marcaProduto      = $showProdutos->marca_produto;
            $nomeProduto       = $showProdutos->nome_produto;
            $tamanhoProduto    = $showProdutos->tamanho_produto;
            $descricaoProduto  = $showProdutos->descricao_produto;
            $precoCompraP      = $showProdutos->preco_compra_produto;
            $precoVendaP       = $showProdutos->preco_venda_produto;
            $qtdProduto        = $showProdutos->quantidade_produto;
            $fotoProduto       = $showProdutos->foto_produto;
            $validadeProduto   = $showProdutos->validade_produto;
            $promocaoProduto   = $showProdutos->promocao_produto;


            /* Verificação de validade */
            
            $dateAntiga = date_create($validadeProduto);
            //$dateAtual = date_create('2022-11-14');
            $dateAtual = date_create();

            $diasDeVencimento = date_diff($dateAtual, $dateAntiga);
            
            /*
                -> $diasDeVencimento é um obj
                -> o atributo days sempre retorna um inteiro positivo [$diasDeVencimento->days]
                -> já o atributo define se o número é negativo ou positivo
                -> Se "invert" retorna 0 (número negativo) ou seja, produto vencido  [$diasDeVencimento->invert]
                -> Se retorna 1 (número positivo) ou seja, produto não vencido
            */

            //Como o atributo invert define se o número é negativo ou não, usa-se ele p/ modificar o valor de dias
            if($diasDeVencimento->invert == 1){

                $qtdDias = $diasDeVencimento->days * (-1);
                //quantidade de dias que passaram do vencimento (negativo)

            }else{

                $qtdDias = $diasDeVencimento->days * 1;
                //quantidade de dias que estão do vencimento (positivo)

            }
        
            
            //Verifica se há produtos vencidos ou próximos (em 10 dias) do vencimento
            
            if($qtdDias > 0  && $qtdDias < 60){

                echo '  <div class="alert alert-warning" role="alert">
                            <h3>Produto próximo do vencimento!</h3>
                            <p>Restam '.$qtdDias.' dias para o produto '.$nomeProduto.' de código [ '.$idProduto.' ] se vencer</p> 
                        </div>';
                    
            }else if($qtdDias < 0){
                
                echo '  <div class="alert alert-danger" role="alert">
                            <h3>Produto vencido!</h3>
                            <p>O produto '.$nomeProduto.' de código [ '.$idProduto.' ] se venceu a '. $qtdDias * -1 .' dias</p>
                        </div>';
                

            }
            

        }//Fim while
            
        
    }//Fim if contSelProdutos


} catch (PDOException $erro) {
    echo "ERRO DE PDO (SELECT) -> ".$erro->getMessage();
}   


?> 
