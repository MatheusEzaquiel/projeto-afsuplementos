
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <div class="breadcrumb-item text-dark" style="cursor:pointer;">Estoque</div>
                    <a class="breadcrumb-item text-dark" href="">Produtos Desativados</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            
            <div class="col-lg-8 col-6 text-left">
                <form action="">
                    <div class="input-group  pb-3">
                        <input type="text" class="form-control" placeholder="Pesquisar por produtos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent" style="color:#DF0805;">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

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
                            <th>Desarquivar/Editar</th>
                            <!--<th>    </th>-->
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                        include_once("../../config/conexao.php");
                        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 0 ";
                        
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

                            <td class="align-middle"><?php echo date('d/m/y', strtotime($validadeProduto));?></td>
                            

                            <td class="align-middle">
                                <!-- Reativar -->
                                <button class="btn btn-sm btn-info" name="btn-inativar<?php echo $idProduto; ?>"onclick="return confirm('Deseja reativar o produto <?php echo $showProdutos->nome_produto;?>?')" >
                                    <img src="../../img/icones/arquivar-branco-24.png" alt="desarquivar" height="16" width="15">
                                </button>

                                <!-- Editar -->
                                <a href="?pagina=edicaoProduto&idP=<?php echo $idProduto;?>">
                                    <button type="button" class="btn btn-sm btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                            </svg>
                                    </button>
                                </a>
                            </td>
                            
                        </tr>

                    <?php       
                                /*Altera o estado de disponibilidade do produto; 1 = disponível, 0 = não disponível */
                                if(isset($_POST["btn-inativar$idProduto"])){
                                    echo "<h1>Produto desarquivado</h1>";

                                    $produtoIndisponivel = 1;
                                    $updateProdtInativo = "UPDATE tb_produto SET disponibilidade_produto=:disponProduto WHERE id_produto=:idProdt";
                                    $resultProdtInativo = $conect->prepare($updateProdtInativo);
                                    $resultProdtInativo->bindParam(':idProdt',$idProduto,PDO::PARAM_STR);
                                    $resultProdtInativo->bindParam(':disponProduto',$produtoIndisponivel,PDO::PARAM_STR);
                                    $resultProdtInativo->execute();
                                    
                                    //echo "<script>window.location.reload();</script>";
                                    

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


    