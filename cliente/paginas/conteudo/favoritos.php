<?php include_once("../../config/conexao.php");?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="home.php?pagina=index">Home</a>
                    <span class="breadcrumb-item active">Produtos Favoritados</span>
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
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Subtotal</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                        <?php
                        //array que guardará os subtotais para somá-los posteriormente e o que contém o preço final
                        $arrayTotalCarrinho = [];
                        $totalCarrinho = 0;


                        if(!isset($_SESSION['itens'])){
                            $_SESSION['itens'] = array();
                        }

                        if(isset($_GET['add']) && $_GET['add'] == "carrinho" && @!$_GET["idMenos"]){

                            /*Adiciona ao carrinho*/
                            $idProduto = $_GET['id'];

                            
                            if(!isset($_SESSION['itens'][$idProduto])){
                                $_SESSION['itens'][$idProduto] = 1;
                            }else{
                                $_SESSION['itens'][$idProduto] += 1;
                            }

                            


                        }else if(isset($_GET['add']) && $_GET['add'] == "carrinho" && $_GET["idMenos"]){
                            /*Adiciona ao carrinho*/
                            $idProduto = $_GET['id'];

                            $_SESSION['itens'][$idProduto] -= 1;
                            

                        }

                        /*Exibe o carrinho*/
                        if(count($_SESSION['itens']) == 0){
                            echo 'Carrinho vazio <br><a href="home.php?pagina=shop">Adicionar itens</a>';
                        }else{

                            //Sessão que vai armazenar todos os dados p/ cadastrar no BD
                            $_SESSION['dados'] = array();


                            
                            foreach($_SESSION['itens'] as $idProduto => $quantidade){

                                $select = $conect->prepare("SELECT * FROM tb_produto WHERE id_produto=?");
                                $select->bindParam(1,$idProduto);
                                $select->execute();
                                $produtos = $select->fetchAll();
                                @$total = $quantidade * $produtos[0]["preco_venda_produto"];



                               
    

                            
                                array_push(

                                    $_SESSION['dados'],

                                    @array(
                                        'id_produto' => $idProduto,
                                        'quantidade' => $quantidade,//$produtos[0]["quantidade"],
                                        'preco' => $produtos[0]["preco_venda_produto"],
                                        'total' => $total
                                    )
                                );
     
                        ?>
                                <tr>
                                    <!-- <td><?php //echo $produtos[0]["id_produto"]?></td> -->
                                    <td><?php echo @$produtos[0]["nome_produto"]?></td>
                                    <td><?php echo @$produtos[0]["preco_venda_produto"]?></td>
                                    <td>
                                        <a href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $produtos[0]["id_produto"]?>&idMenos=<?php echo $produtos[0]["id_produto"]?>">-</a>    
                                        <?php echo $quantidade;//$produtos[0]["quantidade"]?>
                                        <a href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $produtos[0]["id_produto"]?>">+</a>
                                    </td>

                                    <td><?php echo $total?></td>
                                
                                    
                                    <td>
                                        <a href="?pagina=remover&remover=carrinho&id=<?php echo $idProduto?>" class="remover">
                                            Remover
                                        </a>
                                    </td>
                                </tr>
                            
                                    
                        <?php
                                //Insere todos os subtotais em um array
                                array_push($arrayTotalCarrinho, $total);
                                
                                /*
                                echo "<pre>";
                                print_r($totalCarrinho);
                                echo "</pre>";
                                */


                                
                            }//fim foreach
                            
                            
                            //Soma todos os subtotais
                            $totalCarrinho = array_sum($arrayTotalCarrinho);

                            if($totalCarrinho == 0){
                                return $totalCarrinho = "Sem produtos";
                            }
                           
                        
                        }


                        ?>		


                        </tbody>
                    </table>
                </form>
            </div>

            <div class="col-lg-4">
                
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Resumo do Carrinho</span></h5>
                <div class="bg-light p-30 mb-5">
        
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total:</h5>
                            <h5>R$ <?php echo $totalCarrinho;?></h5>
                        </div>

                        <a href="conteudo/finalizar.php" style="text-decoration: none;" onclick="return confirm('Deseja enviar o pedido?<?php echo '#01' ;?>')">
                            <button class="btn btn-block font-weight-bold my-3 py-3" style="background-color:#DF0805;border:#DF0805;color:#F9F6F6;">Encaminhar Compra</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Fim Carrinho -->
