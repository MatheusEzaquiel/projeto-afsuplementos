


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Estoque</a>
                    <a class="breadcrumb-item text-dark" href="#">lista de Produtos</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            
            <div class="col-lg-8 col-6 text-left">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar por produtos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12 table-responsive mb-5">
                <form action="" method="post">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Marca</th>
                            <th>Tamanho</th>
                            <th>Preço de Compra</th>
                            <th>Preço de Venda</th>
                            <th>Quantidade</th>
                            <th>Adicionar Promoção</th>
                            <th>Remover/Editar</th>
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
                                    $idProdt = $showProdutos->id_produto;
                                    $showProdutos->tipo_produto;
                                    $showProdutos->marca_produto;
                                    $showProdutos->nome_produto;
                                    $showProdutos->tamanho_produto;
                                    $showProdutos->descricao_produto;
                                    $showProdutos->preco_compra_produto;
                                    $showProdutos->preco_venda_produto;
                                    $showProdutos->quantidade_produto;
                                    $showProdutos->foto_produto;
                                    $showProdutos->promocao_produto;
                    ?>
                        <tr>
                            <td class="align-middle"><img src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="" style="width: 50px;"></td>
                            <td class="align-middle"><?php echo $showProdutos->nome_produto;?></td>
                            <td class="align-middle"><?php echo $showProdutos->marca_produto;?></td>
                            <td class="align-middle"><?php echo $showProdutos->tamanho_produto;?></td>
                            <td class="align-middle"><?php echo $showProdutos->preco_compra_produto;?></td>
                            <td class="align-middle"><?php echo $showProdutos->preco_venda_produto;?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $showProdutos->quantidade_produto;?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo $showProdutos->promocao_produto;?></td>
                            
                            <td class="align-middle">
                                

                                

                                <!-- Inativar -->
                                <a href="#">
                                    <button class="btn btn-sm btn-danger" name="btn-inativar<?php echo $idProdt; ?>"onclick="return confirm('Deseja Inativar o produto <?php echo $showProdutos->nome_produto;?>?')" ><i class="fa fa-times"></i></button>
                                </a>
                                
                                <!-- Salvar alterações [Fazer essa função]-->
                                <a href="#">
                                    <button
                                        class="btn btn-sm btn-warning" name="btn-inativar<?php echo $idProdt; ?>" onclick="return confirm('Deseja salvar a edição na quantidade do produto <?php echo $showProdutos->nome_produto;?>?')">
                                        <img src="../../img/icones/disquete-branco-24.png" alt="salvar alterações" height="16" width="15">
                                    </button>
                                </a>

                                <!-- Editar -->
                                <a href="?pagina=edicaoProduto&idP=<?php echo $idProdt;?>">
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
                                if(isset($_POST["btn-inativar$idProdt"])){
                                    echo "<h1>OK!</h1>";
                                    echo $idProdt;

                                    $produtoIndisponivel = 0;
                                    $updateProdtInativo = "UPDATE tb_produto SET disponibilidade_produto=:disponProduto WHERE id_produto=:idProdt";
                                    $resultProdtInativo = $conect->prepare($updateProdtInativo);
                                    $resultProdtInativo->bindParam(':idProdt',$idProdt,PDO::PARAM_STR);
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



    