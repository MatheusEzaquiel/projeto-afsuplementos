    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Carrinho de compras</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <form action="?pagina=deletar" method="get">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Preço</th>
                                <th>Total</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                        <?php
                            //Select dos produtos
                            include_once("../../config/conexao.php");
                            $selCarrinho = "SELECT * FROM tb_carrinho
                            INNER JOIN tb_cliente ON tb_cliente.id_cliente = tb_carrinho.cliente_pedido
                            INNER JOIN tb_produto ON tb_produto.id_produto = tb_carrinho.produto_pedido";
                            
                            
                            try {
                                $resultSelCarrinho = $conect->prepare($selCarrinho);
                                $resultSelCarrinho->execute();
                                $contSelCarrinho = $resultSelCarrinho->rowCount();

                                if($contSelCarrinho > 0){
                                    while($carrinho = $resultSelCarrinho->FETCH(PDO::FETCH_OBJ)){
                                        $idP = $carrinho->id_produto;
                                        $imgP = $carrinho->foto_produto;
                                        $nomeP = $carrinho->nome_produto;
                                        $precoP = $carrinho->preco_venda_produto;
                                        $nomeC = $carrinho->nome_cliente;              
                                    
                        ?>
                            <tr>
                                <td class="align-middle"><img src="../../imgs/produtos/<?php echo $imgP;?>" alt="" style="width: 50px;"></td>
                                <td class="align-middle"><?php echo $nomeP;?></td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                            <input type="text" name="qtdProduto" class="form-control form-control-sm bg-secondary border-0 text-center" value="10">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">R$  <?php echo $precoP;?></td>
                                <td class="align-middle">R$  <?php  $qtdP = 10; echo $precoP * $qtdP;?></td>
                                <!-- Botão Remover -->
                                <td class="align-middle">
                                    <a href="conteudo/deletar.php?delP=<?php echo $idP;?>" class="btn btn-danger" onclick="return confirm('Deseja excluir este produto do carrinho?')">              
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>

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
                </form>
            </div>

            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Código de cupom">
                        <div class="input-group-append">
                            <button class="btn" style="background-color:#DF0805;border:#DF0805;color:#F9F6F6;">Aplicar</button>
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
                        <button class="btn btn-block font-weight-bold my-3 py-3" style="background-color:#DF0805;border:#DF0805;color:#F9F6F6;">Encaminhar Compra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->