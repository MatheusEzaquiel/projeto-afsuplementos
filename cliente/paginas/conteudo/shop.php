    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Catálogo</a>
                    <span class="breadcrumb-item active">Lista de produtos</span>
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
                
                <form action="" method="get">
                    <div class="col-lg-3 col-md-4">

                    <!-- Filtro por preço -->
                        <!-- Price Start -->
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Por preço</span></h5>
                        <div class="bg-light p-4 mb-30">
                                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input name="pesquisar" type="checkbox" class="custom-control-input" checked id="price-all">
                                    <label class="custom-control-label" for="price-all">Todos os preços</label>
                                    <span class="badge border font-weight-normal">1000</span>
                                </div>
                                <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input name="filtro01" type="checkbox" class="custom-control-input" id="price-1">
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
                        </div>
                        <!-- Price End -->
                    
                    <!-- Filtro por tipo -->
                    
                        <!-- Color Start -->
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Por Tipo</span></h5>
                        <div class="bg-light p-4 mb-30">
                        
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

                        </div>
                        <!-- Color End -->

                        <!-- Size Start -->
                        
                        
                        <!-- Size End -->
                    </div>
                </form>
                    <!-- Shop Sidebar End -->



                <!-- Produtos -->
                
                <div class="col-lg-9 col-md-8">
                    <div class="row pb-3">
                    
                        <div class="col-12 pb-1">

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div></div>
                                <div class="ml-2">
                                    <!-- Filtro tipo do produto
                                        0 -> Todos
                                        1 -> Em pó
                                        2 -> Bebidas
                                        3 -> Pílulas
                                        4 -> Barrinhas
                                    --> 

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Tipo de Produto</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="index.php?pagina=shop&TipoProduto=0">Todos</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&TipoProduto=1">Em pó</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&TipoProduto=2">Bebidas</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&TipoProduto=3">Pílulas</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&TipoProduto=4">Barrinhas</a>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Preço</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=0">Qualquer preço</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=1">menor que 50</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=2">50 a 100</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=3">100 a 200</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=4">mais que 200</a>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Filtro</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtro=1">Mais recentes</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtro=2">Menor Preço</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtro=3">Promoções</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <!-- EXIBIR PRODUTOS -->
                        <?php

                            include_once("../../config/conexao.php");

                            $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1";

                           
                            include("filtro-shop/filtro.php");

                            try {
                                $resultSelProdutos = $conect->prepare($selectProdutos);
                                $resultSelProdutos->execute();
                                $contSelProdutos = $resultSelProdutos->rowCount();
                                

                                if($contSelProdutos > 0){
                                    $fetch = $resultSelProdutos->fetchAll();

                                    foreach ($fetch as $produto) {

                                        
                                        
                        ?>
                                    <!--
                                        <h3><?php //echo $produto['id_produto']?></h3>
			                            <p><?php //echo $produto['nome_produto']?></p>
			                            <p><?php //echo $produto['quantidade']?></p>
			                            <p><?php //echo 'Preço: R$'. number_format($produto['preco_venda_produto'],2, ",", ".")?></p>
                                    -->
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="../../imgs/produtos/<?php echo $produto['foto_produto'];?>" alt="foto-produto">
                                        
                                        <div class="product-action">
                                            <!-- Botão enviar p/ carrinho -->
                                            <button type="submit" class="btn btn-outline-dark btn-square" name="btn-carrinho<?php echo $idProduto;?>"><i class="fa fa-shopping-cart"></i></button>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-sync-alt"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="home.php?pagina=detalhes&idDetail=<?php echo $idProduto;?>"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>

                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href=""><?php echo $produto['nome_produto'];?></a>
                                        <br><small><?php echo $produto['marca_produto'];?></small> |
                                        <small><?php echo $produto['tamanho_produto'];?></small>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5>R$ <?php echo number_format($produto['preco_venda_produto'],2, ",", ".");?></h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="index.php?pagina=carrinho&add=carrinho&id=<?php echo $produto['id_produto']?>">Adicionar</a>
			                        </div>
                                    
                                </div>
                        
                        </div>
                       
    
                    
                        <?php       
                             
                                        


                                    
                                        
                                    }//Fim while
                                }else{
                                    echo "ERRO!!";
                                }
                            } catch (PDOException $erro) {
                                echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
                            }
                        ?>






                        <!-- EXIBIR PRODUTOS-->
                        

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
        </div>
    </form>
            
            
        </div>
    </div>
    <!-- Shop End -->

