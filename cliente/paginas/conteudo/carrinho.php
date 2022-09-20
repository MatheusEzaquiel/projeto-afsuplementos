    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                        include_once("../../config/conexao.php");
                        $selCarrinho = "SELECT * FROM tb_carrinho";
                        
                        try {
                            $resultSelCarrinho = $conect->prepare($selCarrinho);
                            $resultSelCarrinho->execute();
                            $contSelCarrinho = $resultSelCarrinho->rowCount();

                            if($contSelCarrinho > 0){
                                while($showCarrinho = $resultSelCarrinho->FETCH(PDO::FETCH_OBJ)){
                                    $showCarrinho->produto_pedido;
                                    $showCarrinho->quantidade_produto;
                                    $showCarrinho->preco_produto;
                                    $showCarrinho->preco_pedido;
                                    $showCarrinho->foto_produto;
                                   
                    ?>
                        <tr>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"><?php echo $showCarrinho->produto_pedido;;?></td>
                            <td class="align-middle"><?php echo $showCarrinho->preco_pedido;;?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $showCarrinho->quantidade_produto;?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$  <?php echo $showCarrinho->preco_pedido?></td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
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

                    <?php
                        $cadCarrinho = "INSERT INTO tb_carrinho(cliente_pedido,produto_pedido,quantidade_produto,preco_produto,preco_pedido,foto_produto,estado_pedido) VALUES(:clientePed,:produtoPed:,:qtdProdt,:precoProdt,:precoPed,:fotoProdt,:estadoPed)";

                        try{
                            $resultCadCar = $conect->prepare($cadCarrinho);
                            $resultCadCar->bindParam(':idCliente',$idCliente,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':idProduto',$produto,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':nomeProd',$nomeProduto,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':tamanhoPizza',$tamanhoProdPizza,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':borda',$saborBorda,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':precoBorda',$precoBorda,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':qtdProduto',$qtdProduto,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':precoIndividualProduto',$precoProduto,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':precoPedido',$precoPed,PDO::PARAM_STR);
                            $resultCadCar->bindParam(':fotoP',$fotoProduto,PDO::PARAM_STR);
                            $resultCadCar->execute();

                          $contarProduto = $resultProduto->rowCount();
                            if($contarProduto > 0){
                                echo "<script>alert('Produto enviado para o carrinho')</script>";
                            }else{
                                echo "<script>alert('[Erro] Tente novamente!')</script>";
                            }

                        }catch(PDOException	$erro){
                            echo "ERRO DE CADASTRO [PDO] = ".$erro->getMessage();
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->