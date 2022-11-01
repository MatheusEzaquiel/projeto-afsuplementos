<?php
    include_once("../../config/conexao.php");
    $idProduto = $_GET["idP"];
    
    
    $selectProduto = "SELECT * FROM tb_produto WHERE id_produto = :idProdt";
    
    try {
        $resultSelProduto = $conect->prepare($selectProduto);
        $resultSelProduto->bindParam(":idProdt",$idProduto,PDO::PARAM_INT);
        $resultSelProduto->execute();
        $contSelProduto = $resultSelProduto->rowCount();

        if($contSelProduto > 0){
            while($showProduto = $resultSelProduto->FETCH(PDO::FETCH_OBJ)){
                $showProduto->id_produto;
                $tipoP = $showProduto->tipo_produto;
                $marcaP = $showProduto->marca_produto;
                $nomeP = $showProduto->nome_produto;
                $tamanhoP = $showProduto->tamanho_produto;
                $descricaoP = $showProduto->descricao_produto;
                $precoCompraP = $showProduto->preco_compra_produto;
                $precoVendaP = $showProduto->preco_venda_produto;
                $qtdP = $showProduto->quantidade_produto;
                $validadeP = $showProduto->validade_produto;
                $fotoP = $showProduto->foto_produto;
                $promocaoP = $showProduto->promocao_produto;
                
            }//Fim while
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
                                <input class="form-control" type="text" value="<?php echo $nomeP;?>" name="nome-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Marca</label>
                                <input class="form-control" type="text" value="<?php echo $marcaP;?>" name="marca-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tipo</label>
                                <select class="custom-select" name="tipo-produto">
                                    <option value=0 selected>alterar tipo</option>
                                    <option value="1">em pó</option>
                                    <option value="2">bebida</option>
                                    <option value="3">pílula</option>
                                    <option value="4">barra</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tamanho</label>
                                <input class="form-control" type="text" value="<?php echo $tamanhoP;?>" name="tamanho-produto">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Descricão</label>
                                <textarea class="form-control" type="text" name="descricao-produto"><?php echo $descricaoP;?></textarea>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Validade</label>
                                <input class="form-control" type="date" value="<?php echo $validadeP;?>" name="validade-produto">

                            </div>

                            <div class="col-md-6 form-group">
                                <label>Preço de compra</label>
                                <input class="form-control" type="text" value="<?php echo $precoCompraP;?>" name="preco-compra-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Preço de venda</label>
                                <input class="form-control" type="text" value="<?php echo $precoVendaP;?>" name="preco-venda-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Quantidade</label>
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $qtdP;?>" name="qtd-produto">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
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
                                <button type="submit" name="btn-update-prodt" class="btn btn-block btn-primary font-weight-bold py-3 ">Atualizar</button>
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
        $precoCompraProdt = $_POST["preco-compra-produto"];
        $precoVendaProdt = $_POST["preco-venda-produto"];
        $qtdProdt = $_POST["qtd-produto"];
        $disponivel = 1;

                                    
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
            $novoNomeImg = $fotoP;
        }

        $updateProdt = "UPDATE tb_produto SET tipo_produto=:tipoProdt,marca_produto=:marcaProdt,nome_produto=:nomeProdt,tamanho_produto=:tamanhoProdt,descricao_produto=:descricaoProdt,preco_compra_produto=:precoCompProdt,preco_venda_produto=:precoVenProdt,quantidade_produto=:qtdProdt, validade_produto=:validade, foto_produto=:fotoProdt,disponibilidade_produto=:disponivel WHERE id_produto = :idProdt";
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
            $resultUpdateProdt->bindParam(":disponivel",$disponivel,PDO::PARAM_STR);
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
            <!-- FIM - Formulário de Login-->
            <div class="col-lg-4">
                <!--Coluna direita-->
                
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Produto</span></h5>
                    
                    <div class="bg-light p-30 mb-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <img src="../../imgs/produtos/<?php echo $fotoP;?>" alt="imagem do produto" width="80%">
                            </div>
                            <div class="col-md-12 form-group">
                                <labe><h1 style="text-align:center;"><?php echo $nomeP;?></h1></label>
                            </div>
                            <div class="col-md-12 form-group">
                                <h2 style="text-align:center;"><?php echo $marcaP;?></h2>
                            </div>
                            
                            <div class= "col-md-6 form-group">
                                <h3>R$<?php echo $precoCompraP;?></h3>
                            </div>
                            <div class="col-md-6 form-group">
                                <h3>R$ <?php echo $precoVendaP;?></h3>
                            </div>
                    

                            
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

