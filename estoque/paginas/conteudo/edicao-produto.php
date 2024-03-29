<?php
    include_once("../../config/conexao.php");
    $idProdutoGet = $_GET["idP"];
    
    /*
    $selectProduto = "SELECT * FROM tb_produto 
    INNER JOIN tb_promocao 
    ON tb_produto.promocao_produto = tb_promocao.id_promocao  
    WHERE id_produto = :idProdutoGet ";
    //ON tb_produto.promocao_produto = tb_promocao.id_promocao
    */

    $selectProduto = "SELECT * FROM tb_produto 
    WHERE id_produto = :idProdutoGet";
  
    try {
        $resultSelProduto = $conect->prepare($selectProduto);
        $resultSelProduto->bindParam(":idProdutoGet",$idProdutoGet,PDO::PARAM_INT);
        $resultSelProduto->execute();
        $contSelProduto = $resultSelProduto->rowCount();

        if($contSelProduto > 0){
            while($produtoEditado = $resultSelProduto->FETCH(PDO::FETCH_OBJ)){

                //$idProduto         = $showProduto->id_produto;
                $tipoProduto       = $produtoEditado->tipo_produto;
                $marcaProduto      = $produtoEditado->marca_produto;
                $nomeProduto       = $produtoEditado->nome_produto;
                $tamanhoProduto    = $produtoEditado->tamanho_produto;
                $descricaoProduto  = $produtoEditado->descricao_produto;
                $precoCompraP      = $produtoEditado->preco_compra_produto;
                $precoVendaP       = $produtoEditado->preco_venda_produto;
                $qtdProduto        = $produtoEditado->quantidade_produto;
                $fotoProduto       = $produtoEditado->foto_produto;
                $validadeProduto   = $produtoEditado->validade_produto;
                $promocaoProduto   = $produtoEditado->promocao_produto;
                $precoPromocao = $produtoEditado->preco_promocao_produto;
                //$nomePromocao      = $produtoEditado->nome_promocao;
               

            }


            /* Tipos de produtos
            
                1 - em pó
                2 - bebida
                3 - pílula
                4 - barra 
            
            */
           
            switch ($tipoProduto){

                case $tipoProduto == 0:
                    $tipoProdutoTxt = "nenhum tipo";
                    break;

                case $tipoProduto == 1 :
                    $tipoProdutoTxt = "em pó";
                    break;

                case $tipoProduto == 2 :
                    $tipoProdutoTxt = "bebida";
                    break;

                case $tipoProduto == 3 :
                    $tipoProdutoTxt = "pílula";
                    break;

                case $tipoProduto == 4 :
                    $tipoProdutoTxt = "barra";
                    break;
                
                default :
                    $tipoProdutoTxt = "nenhum tipo";
                    


            }

        }else{
            echo "ERRO!!";
        }

    } catch (PDOException $erro) {
        echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
    }   
?>
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!--Formulário de Login-->

            <!--Coluna esquerda-->
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Edição</span></h5>
                    
                    <div class="bg-light p-30 mb-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                    
                            <div class="col-md-6 form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" value="<?php echo $nomeProduto;?>" name="nome-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Marca</label>
                                <input class="form-control" type="text" value="<?php echo $marcaProduto;?>" name="marca-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tipo</label>
                                <select class="custom-select" name="tipo-produto">
                                    <option value=<?php echo $tipoProduto;?> selected> <?php echo $tipoProdutoTxt;?></option>
                                    <option value="1">em pó</option>
                                    <option value="2">bebida</option>
                                    <option value="3">pílula</option>
                                    <option value="4">barra</option>
                                </select>
                            </div>

                           

                            <?php
                                /*
                                    while($promocoes = $resultSelProduto->FETCH(PDO::FETCH_OBJ)){

                                        //$idProduto         = $showProduto->id_produto;
                                        $tipoProduto       = $promocoes->tipo_produto;
                                        $promocaoProduto   = $promocoes->promocao_produto;

                                        echo $tipoProduto;
                                    }

                                */
                                ?>

                            <div class="col-md-6 form-group">
                                <label>Tamanho</label>
                                <input class="form-control" type="text" value="<?php echo $tamanhoProduto;?>" name="tamanho-produto">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Descricão</label>
                                <textarea class="form-control" type="text" name="descricao-produto"><?php echo $descricaoProduto;?></textarea>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Validade</label>
                                <input class="form-control" type="date" value="<?php echo $validadeProduto;?>" name="validade-produto">

                            </div>

                            <div class="col-md-6 form-group">
                                <label>Preço de compra</label>
                                <input class="form-control" type="text" value="<?php echo str_replace('.' , ',', $precoCompraP);?>" name="preco-compra-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Preço de venda</label>
                                <input class="form-control" type="text" value="<?php echo str_replace('.' , ',', $precoVendaP);?>" name="preco-venda-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Quantidade</label>
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-minus" style="background-color:#DF0805;">
                                            <i class="fa fa-minus" style="color:#f9f6f6;"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $qtdProduto;?>" name="qtd-produto">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-plus" style="background-color:#DF0805;">
                                                <i class="fa fa-plus" style="color:#f9f6f6;"></i>
                                            </button>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Imagem do Produto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04" name="foto-produto">
                                        <label class="custom-file-label" for="inputGroupFile04">Imagem</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <button type="submit" name="btn-update-prodt" class="btn btn-block font-weight-bold py-3" style="background-color:#DF0805;color:#f9f6f6;">Atualizar</button>
                            </div>
                            
                        </div>
                    </form>
<?php

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
        
        /*
        $precoPromocaoProdt = str_replace(',' , '.', $_POST['preco-promocao-produto']);

        if ($precoPromocaoProdt != ""){
             $promocaoProdt = 1;     
        }else{
            $promocaoProdt = 0;
        }
        */
       
        

                                    
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

        $updateProdt = "UPDATE tb_produto SET 
            tipo_produto=:tipoProdt,
            marca_produto=:marcaProdt,
            nome_produto=:nomeProdt,
            tamanho_produto=:tamanhoProdt,
            descricao_produto=:descricaoProdt,
            preco_compra_produto=:precoCompProdt,
            preco_venda_produto=:precoVenProdt,
            preco_promocao_produto=:precoPromocaoProdt,
            promocao_produto=:promocaoProdt,
            quantidade_produto=:qtdProdt,
            validade_produto=:validade,
            foto_produto=:fotoProdt
            
           
            WHERE id_produto = :idProdt";

        try{
            $resultUpdateProdt = $conect->prepare($updateProdt);
            $resultUpdateProdt->bindParam(":idProdt",$idProdutoGet,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":tipoProdt",$tipoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":marcaProdt",$marcaProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":nomeProdt",$nomeProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":tamanhoProdt",$tamanhoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":descricaoProdt",$descricaoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":validade",$validadeProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":precoCompProdt",$precoCompraProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":precoVenProdt",$precoVendaProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":precoPromocaoProdt",$precoPromocaoProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":qtdProdt",$qtdProdt,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":fotoProdt",$novoNomeImg,PDO::PARAM_STR);
            $resultUpdateProdt->bindParam(":promocaoProdt",$promocaoProdt,PDO::PARAM_STR);
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
                </div>
            </div>
       


            <!--Coluna da direita com informações do produto -->

            <div class="col-lg-4">
                
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Produto</span></h5>
                    
                    <div class="bg-light p-30 mb-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 form-group d-flex align-items-center justify-content-center">
                                <img src="../../imgs/produtos/<?php echo $fotoProduto;?>" alt="imagem do produto" width="80%">
                            </div>
                            <div class="col-md-12 form-group d-flex align-items-center justify-content-center">
                                <label><h2 style="text-align:center;"><?php echo $nomeProduto;?></h2></label>
                            </div>
                            <div class="col-md-12 form-group">
                                <small style="margin-left:9em;">Marca do Produto</small>
                                <h4 style="text-align:center;"><?php echo $marcaProduto;?></h4>
                            </div>
                            
                            <div class= "col-md-6 form-group pl-5">
                                <small>Preço de Compra</small>
                                <h3>R$ <?php echo str_replace('.' , ',', $precoCompraP);?></h3>
                            </div>
                            <div class="col-md-6 form-group pl-4">
                                <small>Preço de Venda</small>
                                <h3>R$ <?php echo str_replace('.' , ',', $precoVendaP);?></h3>
                            </div>
                    

                            
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

