
<?php include_once("../../config/conexao.php");?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item text-dark">Carrinho de compras</span>
                    <span class="breadcrumb-item active">Finalizar pedido</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Início Carrinho -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <form action="" method="post">
                    <table class='table table-light table-borderless table-hover text-center mb-0'>
                        <thead style='background-color:#000000;color:#f9f6f6;'>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Preço Unit.</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class='align-middle'>
                <?php
                    include_once("../../config/conexao.php");

                    /*
                    echo '<pre>';
                    print_r($_SESSION['dados']);
                    echo'</pre>';
                    */

                    //array que guardará os subtotais para somá-los posteriormente e o que contém o preço final
                    $arrTotalCarrinho = [];

                    foreach($_SESSION['dados'] as $produtos){
                        echo"
                            <tr>
                                <td>".$produtos['id_produto']."</td>
                                <td>".$produtos['produto']."</td>
                                <td>".$produtos['preco']."</td>
                                <td>".$produtos['quantidade']."</td>
                                <td>".$produtos['total']."</td>
                            </tr>";

                        //Insere todos os subtotais em um array
                        array_push($arrTotalCarrinho, $produtos['total']);
                    }     
                        //Soma todos os subtotais
                        $totalCarrinho = array_sum($arrTotalCarrinho);
                        //echo "<h5 class='m-5 pl-5' style='color:#404040;font-family: Poppins, sans-serif;'>TOTAL:   R$".$totalCarrinho."</h5>";
                ?>
                        </tbody>
                    </table>
            </div>

            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Resumo do Carrinho</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total:</h5>
                            <h5>R$ <?php echo $totalCarrinho;?></h5>
                        </div>
                        <a href="home.php?pagina=pedido" style="text-decoration: none;" onclick="return confirm('Deseja enviar o pedido?')">
                            <button type="submit" name="btnFinalizarPedido" class="btn btn-block font-weight-bold my-3 py-3" style="background-color:#DF0805;border:#DF0805;color:#F9F6F6;">Finalizar Pedido</button>
                        </a>
                    </div>
                </div>
            </div>
                </form>
                <?php

    if(isset($_POST['btnFinalizarPedido'])){

        //Verifica se há pedidos, se não, redireciona
        if($_SESSION['dados'] == []){
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../home.php?pagina=carrinho"/>';
        }else{
            

            //Cliente exemplo
            //$cliente = 4;
            $idCliente;
            $telefone = 5585992902871;
            
            //Sessão que carrega os produtos pedidos
            foreach($_SESSION['dados'] as $produtos){

                $conexao = new PDO('mysql:host=localhost;dbname=af_suplementos',"root", "");



                
                $idProduto = $produtos['id_produto'];

                //echo $idProduto;
                
                //Select da quantidade de produtos no estoque  
                $select = $conect->prepare("SELECT * FROM tb_produto WHERE id_produto=?");
                $select->bindParam(1,$idProduto);
                $select->execute();
                $produtoEstoque = $select->fetchAll();



                //Verificação de quantidade de produtos no estoque com o pedido

                $novaQtd = $produtoEstoque[0]["quantidade_produto"] - $produtos['quantidade'];
                $qtdEstoque = $produtoEstoque[0]["quantidade_produto"];


                if($novaQtd < 0){
                    echo "<h1>ERRO!</h1>
                        <h2>O número de pedidos ultrapassou a quantidade disponível em estoque</h2>";
                    
                    echo "<h2>Quantidade disponível: $qtdEstoque</h2>";
                        
                }else{
                    
                    //echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../home.php?pagina=pedidotxt"/>';

                    //echo "antes: ".$produtos['id_produto'];

                    //Cadastro de pedidos
                    $insert = $conexao->prepare("INSERT INTO tb_pedido (fk_cliente_pedido, fk_produto_pedido, quantidade_produto_pedido, preco_produto, total_pedido) VALUES(:clientePed, :prodPed, :qtdProd, :precoProd, :totalPed)");

                    $insert->bindParam(":clientePed", $idCliente);
                    $insert->bindParam(":prodPed", $produtos['id_produto']);
                    $insert->bindParam(":qtdProd", $produtos['quantidade']);
                    $insert->bindParam(":precoProd", $produtos['preco']);
                    $insert->bindParam(":totalPed", $produtos['total']);
                    $insert->execute();


                    if($insert->rowCount() > 0){
                        $msg = "pedido teste";
                        
                        //link de envio ao Whatsapp - início
                        echo '<script> window.location.href = "https://api.whatsapp.com/send?phone=5585992902871&text===== INFORMAÇÕES DO PEDIDO ===';

                        //link de envio ao Whatsapp - mensagem
                        foreach($_SESSION['dados'] as $pedido){

                            echo '%0APRODUTO: '.$pedido['id_produto'];
                            echo '%0ANOME DO PRODUTO: '.$pedido['produto'];
                            echo '%0APRECO: R$'.$pedido['preco'];
                            echo '%0AQUANTIDADE: '.$pedido['quantidade'];
                            echo '%0ASUBTOTAL: R$'.$pedido['total'];
                            echo '%0A%0A';
                            
                    
                        }
                        
                        echo 'TOTAL DA COMPRA: R$'.$totalCarrinho;

                        //link de envio ao Whatsapp - início
                        echo '" </script>';
                        
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       //esvaziar carrinho
                       $_SESSION['dados'] = [];
                    }
                    
                    
                
                }





                
            }//fim foreach

            

            

            $_SESSION['itens'] = array();
        }

    }
?>
    


        </div>
    </div>

    <!-- Fim Carrinho -->


  
