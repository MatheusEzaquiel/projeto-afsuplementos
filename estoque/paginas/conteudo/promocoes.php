<form action="" method="post">

<?php
    include_once("../../config/conexao.php");
    $idProduto = 8;//$_GET["idP"];
    
    
    $selectProduto = "SELECT * FROM tb_produto 
    INNER JOIN tb_promocao ON tb_produto.promocao_produto = tb_promocao.id_promocao";
    
    try {
        $resultSelProduto = $conect->prepare($selectProduto);
        //$resultSelProduto->bindParam(":idProdt",$idProduto,PDO::PARAM_INT);
        $resultSelProduto->execute();
        $contSelProduto = $resultSelProduto->rowCount();

        if($contSelProduto > 0){
            while($produtoEmPromocao = $resultSelProduto->FETCH(PDO::FETCH_OBJ)){

                $idProduto         = $produtoEmPromocao->id_produto;
                $nomeProduto       = $produtoEmPromocao->nome_produto;
                $tamanhoProduto    = $produtoEmPromocao->tamanho_produto;
                $descricaoProduto  = $produtoEmPromocao->descricao_produto;
                $precoCompraP      = $produtoEmPromocao->preco_compra_produto;
                $precoVendaP       = $produtoEmPromocao->preco_venda_produto;
                $qtdProduto        = $produtoEmPromocao->quantidade_produto;
                $promocaoProduto   = $produtoEmPromocao->promocao_produto;
                $idPromocao     = $produtoEmPromocao->promocao_produto;
                $fotoProduto       = $produtoEmPromocao->foto_produto;
                $valorPromocao     = $produtoEmPromocao->valor_promocao;
                $nomePromocao     = $produtoEmPromocao->nome_promocao;




                //Cálculo promoção
                $novoPrecoPromocao = $precoVendaP - ($precoVendaP * $valorPromocao);
              
                
            
?>              
                <div class="container-fluid mb-3 d-flex justify-content-center align-items-center w-75" style="margin-top:5em;">
                    <div class="row px-xl-5">
                        <td class="align-middle"><img src="../../imgs/produtos/<?php echo $fotoProduto;?>" alt="" style="width: 50px;"></td>
                        <div class="col-lg-12">
                            
                            <h4><strong>id: <strong><?php echo $idProduto?> | <?php echo $nomeProduto?></strong></h4>
                            <p class="h5"></strong></p>
                            <p>Preço original: R$<strong><?php echo $precoVendaP?></strong></p>
                            <p>promoção: <strong><?php echo $nomePromocao?></strong></p>
                            <p>Novo preço: R$<strong><?php echo str_replace('.' , ',', $novoPrecoPromocao);?></strong></p>
                            <div class="col-md-6 form-group">
                                <label>Promoção</label>

                                <select class="custom-select" name="promocao-produto">
                                    <option value=<?php echo $promocaoProduto;?> selected> <?php echo $nomePromocao;?></option>
                                    <option value="1">10% de desconto</option>
                                    <option value="2">15% de desconto</option>
                                    <option value="3">20% de desconto</option>
                                    <option value="4">25% de desconto</option>
                                    <option value="5">30% de desconto</option>
                                    <option value="6">40% de desconto</option>
                                    <option value="7">50% de desconto</option>
                                </select>
                            </div>
                            <a href="?pagina=promocoes&addPromocao=<?php echo $idProduto;?>">aplicar promoção</a>
                        </div>
                    </div>
                </div>

                <hr>

                <?php

    //update
    include_once("../../config/conexao.php");

    if(isset($_GET["addPromocao"])){

        $_GET["addPromocao"];

        /*
        $nomeProdt = $_POST["nome-produto"];
        $marcaProdt = $_POST["marca-produto"];
        $tipoProdt = $_POST["tipo-produto"];
        $tamanhoProdt = $_POST["tamanho-produto"];
        $descricaoProdt = $_POST["descricao-produto"];
        $validadeProdt = $_POST["validade-produto"];
        $precoCompraProdt = str_replace(',' , '.', $_POST["preco-compra-produto"]);
       
        $qtdProdt = $_POST["qtd-produto"];
        $promocaoProdt = $_POST["promocao-produto"];
        */

        $precoVendaProdt = str_replace(',' , '.', $_POST["preco-venda-produto"]);
        $promocaoProduto = $_POST["promocao-produto"];

                                    
        //Update de img
        
        $updateProdt = "UPDATE tb_produto SET 

            preco_venda_produto=:precoVenProdt,
            promocao_produto =:promocaoProdt

            WHERE id_produto = :idProdt";

        try{

            $resultUpdateProdt = $conect->prepare($updateProdt);
            $resultUpdateProdt->bindParam(":idProdt",$idProdutoGet,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":promocaoProdt",$promocaoProduto,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":precoVenProdt",$precoVendaProdt,PDO::PARAM_STR);
        
            //$resultUpdateProdt->bindParam(":promocaoProdt",$promocaoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->execute();

            $contresUpdateP = $resultUpdateProdt->rowCount();
            if($contresUpdateP > 0){
                echo "<div class='alert alert-success' role='alert'>
                        Informações atualizadas com sucesso!
                    </div>";
                
                echo "<script> //window.location.reload();</script>";
            }

        }catch(PDOException $erro){
            echo "ERRO DE PDO (CADASTRO)".$erro->getMessage();
        }

        
            
    }
    

    
?>

<?php
            }
            
            if(isset($_POST["btnAplicarPromocao$idProduto"])){
                echo "o id correspondente é:". $idProduto;

            }
            

        }else{
            echo "ERRO!!";
        }

    } catch (PDOException $erro) {
        echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
    }   


    //update
    include_once("../../config/conexao.php");

    if(isset($_POST["btn-update-prodt"])){

        $nomeProdt = $_POST["nome-produto"];
        $marcaProdt = $_POST["marca-produto"];
        $tipoProdt = $_POST["tipo-produto"];
        $tamanhoProdt = $_POST["tamanho-produto"];
        $descricaoProdt = $_POST["descricao-produto"];
        $validadeProdt = $_POST["validade-produto"];
        $precoCompraProdt = str_replace(',' , '.', $_POST["preco-compra-produto"]);
        $precoVendaProdt = str_replace(',' , '.', $_POST["preco-venda-produto"]);
        $qtdProdt = $_POST["qtd-produto"];

                                    
        //Update de img
        if(!empty($_FILES['foto-produto']['name'])){
        
            $extensaoImg = pathinfo($_FILES['foto-produto']['name'], PATHINFO_EXTENSION); //Remove a extensão da img
            $tipoExtensao = array("jpg","jpeg","JPEG","png","gif");

            if(in_array($extensaoImg, $tipoExtensao)){
                $pasta = "../../imgs/produtos/";
                $temporarioImg = $_FILES['foto-produto']['tmp_name'];
                $novoNomeImg =  uniqid().".$extensaoImg";

                if(move_uploaded_file($temporarioImg, $pasta.$novoNomeImg)){
                }else{
                    echo "Erro! Não foi possível fazer o upload da imagem";
                }

            }else{
                echo "Formato de imagem não inválido! tente outra imagem";
            }
        }else{
            $novoNomeImg = $fotoProduto;
        }


        /*
        $updateProdt = "UPDATE tb_produto SET tipo_produto=:tipoProdt,marca_produto=:marcaProdt,nome_produto=:nomeProdt,tamanho_produto=:tamanhoProdt,descricao_produto=:descricaoProdt,preco_compra_produto=:precoCompProdt,preco_venda_produto=:precoVenProdt,quantidade_produto=:qtdProdt, validade_produto=:validade, foto_produto=:fotoProdt WHERE id_produto = :idProdt";
        try{
            $resultUpdateProdt = $conect->prepare($updateProdt);
            $resultUpdateProdt->bindParam(":idProdt",$idProduto,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":tipoProdt",$tipoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":marcaProdt",$marcaProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":nomeProdt",$nomeProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":tamanhoProdt",$tamanhoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":descricaoProdt",$descricaoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":validade",$validadeProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":precoCompProdt",$precoCompraProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":precoVenProdt",$precoVendaProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":qtdProdt",$qtdProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":fotoProdt",$novoNomeImg,PDO::PARAM_STR);
            $resultUpdateProdt->execute();

            $contresUpdateP = $resultUpdateProdt->rowCount();
            if($contresUpdateP > 0){
                echo "<div class='alert alert-success' role='alert'>
                        Informações atualizadas com sucesso!
                    </div>";
                
                echo "<script> //window.location.reload();</script>";
            }

        }catch(PDOException $erro){
            echo "ERRO DE PDO (CADASTRO)".$erro->getMessage();
        }

        */
            
    }
    

    
?>
</form>