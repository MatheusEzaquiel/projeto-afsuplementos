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
                        //Select dos produtos
                        include_once("../../config/conexao.php");
                        $selCarrinho = "SELECT * FROM tb_carrinho";
                        
                        try {
                            $resultSelCarrinho = $conect->prepare($selCarrinho);
                            $resultSelCarrinho->execute();
                            $contSelCarrinho = $resultSelCarrinho->rowCount();

                            if($contSelCarrinho > 0){
                                while($showCarrinho = $resultSelCarrinho->FETCH(PDO::FETCH_OBJ)){
                                    $showCarrinho->produto_pedido;
                                    $showCarrinho->cliente_pedido;
                                    $showCarrinho->preco_pedido;
                                    $showCarrinho->estado_pedido;

                                        /*$selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1" 
                                        AND tb_carrinho.produt_pedido = tb_produto.id_produto; */
                                   
                    ?>
                        <tr>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"><?php #echo $showCarrinho->produto_pedido;?></td>
                            <td class="align-middle"><?php echo $showCarrinho->produto_pedido;?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php #echo $showCarrinho->quantidade_produto;?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$  <?php #echo $showCarrinho->preco_pedido;?></td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                    <?php       
                                
                                }//Fim while
                            }//Fim if contSelProdutos
                        } catch (PDOException $erro) {
                            echo "ERRO DE PDO (SELECT) -> ".$erro->getMessage();
                        }   

                       
                    ?>     
                    </tbody>
                </table>
            </div>

            <?php
                
                /*
                $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1";
                
                try {
                    $resultSelProdutos = $conect->prepare($selectProdutos);
                    $resultSelProdutos->execute();
                    $contSelProdutos = $resultSelProdutos->rowCount();
                    

                    if($contSelProdutos > 0){
                        while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                            $idProduto = $showProdutos->id_produto;
                            $nomeP = $showProdutos->tipo_produto;
                            $marcaP = $showProdutos->marca_produto;
                            $nomeP = $showProdutos->nome_produto;
                            $tamP = $showProdutos->tamanho_produto;
                            $descP = $showProdutos->descricao_produto;
                            $precoCP =$showProdutos->preco_compra_produto;
                            $precoVP = $showProdutos->preco_venda_produto;
                            $qtdP = $showProdutos->quantidade_produto;
                            $fotoP = $showProdutos->foto_produto;
                            $promoP = $showProdutos->promocao_produto;
          
                        }//Fim while
                    }else{
                        echo "ERRO!!";
                    }
                } catch (PDOException $erro) {
                    echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
                }*/
            ?>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Código de cupom">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Aplicar</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Resumo do Carrinho</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>R$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Frete</h6>
                            <h6 class="font-weight-medium">R$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>R$160</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Encaminhar Compra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->