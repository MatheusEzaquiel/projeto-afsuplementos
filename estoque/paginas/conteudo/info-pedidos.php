<!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5" style="margin-top:5em;">
            <div class="col-lg-12 table-responsive mb-5">
                <form action="" method="post">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead style="background-color:#000000;color:#F9F6F6;">
                        <tr>
                            <th>Id</th>
                            <th>Cliente</th>
                            <th>Produto</th>
                            <th>Preço do produto</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>Data do pedido</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                        include_once("../../config/conexao.php");

                        $selectPedido = 
                        "SELECT *
                        FROM tb_pedido 
                        INNER JOIN tb_cliente ON tb_pedido.fk_cliente_pedido = tb_cliente.id_cliente
                        INNER JOIN tb_produto ON tb_pedido.fk_produto_pedido = tb_produto.id_produto
                        WHERE tb_pedido.estado_pedido = 0";
                        
                       
                        
                        try {
                            $resultSelPedido = $conect->prepare($selectPedido);
                            $resultSelPedido->execute();
                            $contSelect = $resultSelPedido->rowCount();

                            if($contSelect > 0){
                                while($pedido = $resultSelPedido->FETCH(PDO::FETCH_OBJ)){
                                    $idPedido = $pedido->id_pedido;
                                    $cliente = $pedido->nome_cliente;
                                    $produto = $pedido->nome_produto;
                                    $idProdutoPedido = $pedido->fk_produto_pedido;
                                    $qtdProduto = $pedido->quantidade_produto_pedido;
                                    $precoProduto = $pedido->preco_venda_produto;
                                    $totalPedido = $pedido->total_pedido;
                                    $dataPedido = $pedido->data_pedido;
                                    $estadoPedido = $pedido->estado_pedido;
                                    $qtdProdutoEstoque = $pedido->quantidade_produto;
                                  
                    ?>
                        <tr>

                            <td class="align-middle"><?php echo $idPedido;?></td>
                            <td class="align-middle"><?php echo $cliente;?></td>
                            <td class="align-middle"><?php echo $produto;?></td>
                            
                            <td class="align-middle"><?php echo 'R$'.$precoProduto;?></td>
                            <td class="align-middle"><?php echo $qtdProduto?></td>
                            <td class="align-middle"><?php echo 'R$'.$totalPedido;?></td>
                            <td class="align-middle"><?php echo $dataPedido;?></td>
                            
                            <td class="align-middle">
                                <a href="#">
                                    <button class="btn btn-sm btn-danger" name="btnCancelarPedido<?php echo $idPedido; ?>" onclick="return confirm('Cancelar pedido? <?php echo $idPedido;?>')" >
                                        Cancelar
                                    </button>
                                </a>
                            
                                <a href="">
                                    <button class="btn btn-sm btn-info" name="btnConfirmarPedido<?php echo $idPedido; ?>" onclick="return confirm('Confirmar pedido? <?php echo $idPedido;?>')" >
                                        Confirmar
                                    </button>
                                </a>
                            </td> 

                        </tr>

                    <?php       
                                /*  Altera o estado de disponibilidade do produto
                                    0 -> Pedido não confirmado
                                    1 -> Pedido confirmado
                                    2 -> pedido cancelado
                                */

                                //1 -> Pedido confirmado
                                if(isset($_POST["btnConfirmarPedido$idPedido"])){
                                    
                                    //Pedido confirmado = 1; Pedido não confirmado = 0
                                    $pedidoConfirmado = 1;

                                    $updatePedido = "UPDATE tb_pedido SET estado_pedido=:estadoPed WHERE id_pedido=:idPed";
                                    $resultUpdatePedido = $conect->prepare($updatePedido);
                                    $resultUpdatePedido->bindParam(':idPed',$idPedido,PDO::PARAM_STR);
                                    $resultUpdatePedido->bindParam(':estadoPed',$pedidoConfirmado,PDO::PARAM_STR);
                                    $resultUpdatePedido->execute();

                                
                                  
                                    if($resultUpdatePedido->rowCount() > 0){
                                        echo "<h2>pedido ".$idPedido." confirmado</h2>";

                                        //Produto em estoque - produto do pedido 
                                        $novaQtd = $qtdProdutoEstoque - $qtdProduto;
                                        
                                      

                                        //Atualiza a quantidade de produtos no estoque

                                        $updateEstoque = "UPDATE tb_produto SET quantidade_produto=:qtdProduto WHERE id_produto = :idProduto";
                                        
                                        try{
                                            $resultEstoque = $conect->prepare($updateEstoque);
                                            $resultEstoque->bindParam(":idProduto",$idProdutoPedido,PDO::PARAM_STR);
                                            $resultEstoque->bindParam(":qtdProduto",$novaQtd,PDO::PARAM_STR);
                                            $resultEstoque->execute();
                                
                                            $contEstoque = $resultEstoque->rowCount();
                                            if($contEstoque > 0){
                                                
                                                //echo "<h3>Estoque atualizado!!</h3>";
                                            }else{
                                                echo "não atualizou estoque";
                                            }
                                
                                        }catch(PDOException $erro){
                                            echo "ERRO DE PDO (CADASTRO)".$erro->getMessage();
                                        }
                                        
                                        echo '<script> window.location.reload();</script>';
                                        
                                            
                                    }
                                    
                                    
                                    //echo "<script>window.location.reload();</script>"; 
                                    

                                }

                                //2 -> pedido cancelado
                                if(isset($_POST["btnCancelarPedido$idPedido"])){
                                    
                                    $pedidoCancelado = 2;

                                    $updatePedido = "UPDATE tb_pedido SET estado_pedido=:estadoPed WHERE id_pedido=:idPed";
                                    $resultUpdatePedido = $conect->prepare($updatePedido);
                                    $resultUpdatePedido->bindParam(':idPed',$idPedido,PDO::PARAM_STR);
                                    $resultUpdatePedido->bindParam(':estadoPed',$pedidoCancelado,PDO::PARAM_STR);
                                    $resultUpdatePedido->execute();
                                        
                                    echo '<script> window.location.reload();</script>';

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



    