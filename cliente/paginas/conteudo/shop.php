
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Catálogo</a>
                    <span class="breadcrumb-item active">LIsta de produtos</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <form action="" method="post">
    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Por preço</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form method="POST" action="">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input name="pesquisar" type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">Todos os preços</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input tname="pesquisar[]" type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$5 - $50</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input name="pesquisar[]" type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$50 - $100</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input name="pesquisar[]" type="checkbox" class="custom-control-input" id="price-3" style="background-color:#DF0805;">
                            <label class="custom-control-label" for="price-3">$100 - $200</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <br>
                        <div class="mb-3">
                        <input type="submit" value="Pesquisar" name="PesqProduto" class="btn" style="background-color:#DF0805;border: #DF0805 1px solid;color: #F9F6F6;border-radius:3px;" placeholder="Pesquisar">
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Por Tipo</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Todos</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Em pó</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">Bebidas</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Grão</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Pílulas</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Barrinhas</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <br>
                        <div class="mb-3">
                        <input type="submit" value="Pesquisar" name="PesqProduto" class="btn" style="background-color:#DF0805;border: #DF0805 1px solid;color: #F9F6F6;border-radius:3px;" placeholder="Pesquisar">
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                
                
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Produtos -->
            
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                
                    <div class="col-12 pb-1">
                         
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PHP 1/2 -->
                    <?php
                        include_once("../../config/conexao.php");
                        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY preco_venda_produto ASC";
                        
                        try {
                            $resultSelProdutos = $conect->prepare($selectProdutos);
                            $resultSelProdutos->execute();
                            $contSelProdutos = $resultSelProdutos->rowCount();
                            

                            if($contSelProdutos > 0){
                                while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                    $showProdutos->id_produto;
                                    $showProdutos->tipo_produto;
                                    $showProdutos->marca_produto;
                                    $nomeP = $showProdutos->nome_produto;
                                    $showProdutos->tamanho_produto;
                                    $showProdutos->descricao_produto;
                                    $showProdutos->preco_compra_produto;
                                    $showProdutos->preco_venda_produto;
                                    $showProdutos->quantidade_produto;
                                    $showProdutos->foto_produto;
                                    $showProdutos->promocao_produto;
                    ?>
                    <!-- Seção de Produtos -->
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <form action="" method="post">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                                    <div class="product-action">
                                        <!-- Botão enviar p/ carrinho-->
                                        <button type="submit" class="btn btn-outline-dark btn-square" name="btn-carrinho<?php echo $showProdutos->id_produto;?>"><i class="fa fa-shopping-cart"></i></button>
                                        <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href="home.php?pagina=detalhes?idDetail=<?php echo $showProdutos->id_produto;?>"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href=""><?php echo $showProdutos->nome_produto;?></a>
                                    <br><small><?php echo $showProdutos->marca_produto;?></small> |
                                    <small><?php echo $showProdutos->tamanho_produto;?></small>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>$<?php echo $showProdutos->preco_venda_produto;?></h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small>(99) </small>
                                        <small class="fa mr-1"> Reviews</small>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                   
                    
                    <!-- PHP 2/2 -->
                    <?php
                                    //Carrinho
                                    if(isset($_POST["btn-carrinho$showProdutos->id_produto"])){
                                        $showProdutos->id_produto;
                                        
                                        $idCliente = 4;
                                        $precoPed = 0; //$precoProdt * $prodtQtd;
                                        $estadoP = 0;

                                        $cadCarrinho = "INSERT INTO tb_carrinho(cliente_pedido,produto_pedido,preco_pedido,estado_pedido) VALUES(:clientePed,:produtoPed,:precoPed,:estadoPed)";
                                        
                                        try{
                                            $resultCadCar = $conect->prepare($cadCarrinho);
                                            $resultCadCar->bindParam(':clientePed',$idCliente,PDO::PARAM_STR);
                                            $resultCadCar->bindParam(':produtoPed',$showProdutos->id_produto,PDO::PARAM_STR);
                                            $resultCadCar->bindParam(':precoPed',$precoPed,PDO::PARAM_STR);
                                            $resultCadCar->bindParam(':estadoPed',$estadoP,PDO::PARAM_STR);
                                            $resultCadCar->execute();

                                            $contPedido = $resultCadCar->rowCount();
                                            if($contPedido > 0){
                                                echo "<script>alert('${nomeP} enviado para o carrinho')</script>";
                                            }else{
                                                echo "<script>alert('[Erro] Tente novamente!')</script>";
                                            }

                                        }catch(PDOException	$erro){
                                            echo "ERRO DE CADASTRO [PDO] Carrinho = ".$erro->getMessage();
                                        }
                                        
                                    }
                                }//Fim while
                            }else{
                                echo "ERRO!!";
                            }
                        } catch (PDOException $erro) {
                            echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
                        }
                    ?>
                    

                    <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
    </form>
            
            
        </div>
    </div>
    <!-- Shop End -->

