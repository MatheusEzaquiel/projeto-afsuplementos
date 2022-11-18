    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php?pagina=index">Home</a>
                    <a class="breadcrumb-item text-dark" href="">Catálogo</a>
                    <span class="breadcrumb-item active">Lista de produtos</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <form action="" method="post">
        <!-- Shop Start -->
        <div class="container-fluid">
            <div class="row px-xl-5 d-flex align-items-center justify-content-center">
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
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=1">Menor que $50</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=2">$50 - $100</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=3">$100 - $200</a>
                                            <a class="dropdown-item" href="index.php?pagina=shop&filtroPreco=4">Maior que $200</a>
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
                                            <a class="btn btn-outline-dark btn-square" href="index.php?pagina=carrinho&add=carrinho&id=<?php echo $produto['id_produto']?>" name="btn-carrinho<?php echo $idProduto;?>"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="index.php?pagina=detalhes&idDetail=<?php echo $produto['id_produto']?>"><i class="fa fa-search"></i></a>
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
                                </div>
                        
                        </div>
                       
    
                    
                        <?php       
                             
                                        


                                    
                                        
                                    }//Fim while
                                }else{
                                    echo '<div class="alert alert-danger d-flex justify-content-center" style="box-sizing:border-box;margin-left:33%;">
                                    <div class="pr-2"><button type="button" class="close" data-dismiss="alert">x</button></div>
                                     Não há produtos nesta categoria :(</div>';
                                     echo"<script>
                                        setTimeout(
                                            function() {
                                            window.location.replace('index.php?pagina=index');
                                            }, 5000)
                                        </script>";
                                }
                            } catch (PDOException $erro) {
                                echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
                            }
                        ?>






                        <!-- EXIBIR PRODUTOS-->
                        
                    </div>
                </div>
        </div>
    </form>
            
            
        </div>
    </div>
    <!-- Shop End -->

