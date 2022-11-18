 <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5" style="margin-top:5em;">    
            <div class="col-lg-12 table-responsive mb-5">
                <form action="" method="post">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead style="background-color:#000000;color:#F9F6F6;">
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Marca</th>
                            <th>Tamanho</th>
                            <th>Preço de Compra</th>
                            <th>Preço de Venda</th>
                            <th>Quantidade</th>
                            <th>Validade</th>
                            <th>Arquivar/Editar</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                        include_once("../../config/conexao.php");
                        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ";
                        
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

                    ?>
                        <tr>
                            <td class="align-middle"><img src="../../imgs/produtos/<?php echo $fotoProduto;?>" alt="" style="width: 50px;"></td>
                            <td class="align-middle"><?php echo $nomeProduto;?></td>
                            <td class="align-middle"><?php echo $marcaProduto;?></td>
                            <td class="align-middle"><?php echo $tamanhoProduto;?></td>
                            <td class="align-middle">R$<?php echo str_replace('.' , ',', $precoCompraP);?></td>
                            <td class="align-middle">R$<?php echo str_replace('.' , ',', $precoVendaP);?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $showProdutos->quantidade_produto;?>">
                                </div>
                            </td>
                            <td class="align-middle">
                                <?php echo date('d/m/y', strtotime($validadeProduto));?></td>
                            <td class="align-middle">
                                
                                <!-- Inativar -->
                                <a href="#">
                                    <button class="btn btn-sm btn-danger mx-2" name="btn-inativar<?php echo $idProduto; ?>"onclick="return confirm('Deseja Inativar o produto <?php echo $showProdutos->nome_produto;?>?')" ><i class="fa fa-times"></i></button>
                                </a>
                                

                                <!-- Editar -->
                                <a href="?pagina=edicaoProduto&idP=<?php echo $idProduto;?>">
                                    <button type="button" class="btn btn-sm btn-success">
                                        <i class="fa fa-pen"></i>
                                    </button>
                                </a>
                                
                            </td>
                        </tr>
                    <?php       
                                /*Altera o estado de disponibilidade do produto; 1 = disponível, 0 = não disponível */
                                if(isset($_POST["btn-inativar$idProduto"])){
                                    echo "<h1>OK!</h1>";
                                    echo $idProduto;

                                    $produtoIndisponivel = 0;
                                    $updateProdtInativo = "UPDATE tb_produto SET disponibilidade_produto=:disponProduto WHERE id_produto=:idProdt";
                                    $resultProdtInativo = $conect->prepare($updateProdtInativo);
                                    $resultProdtInativo->bindParam(':idProdt',$idProduto,PDO::PARAM_STR);
                                    $resultProdtInativo->bindParam(':disponProduto',$produtoIndisponivel,PDO::PARAM_STR);
                                    $resultProdtInativo->execute();
                                    
                                    echo "<script>window.location.reload();</script>";
                                    

                                }
                                }//Fim while
                            }//Fim if contSelProdutos

                               
                        
                                        
            
                        } catch (PDOException $erro) {
                            echo "ERRO DE PDO (SELECT) -> ".$erro->getMessage();
                        }   

                       
                    ?> 

                    </tbody>
                    </table>
                </form>
                

            </div>
        </div>
    </div>
    <!-- Cart End -->

    



    