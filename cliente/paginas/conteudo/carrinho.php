
<?php include_once("../../config/conexao.php");?>
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


    <!-- Início Carrinho -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <form action="" method="post">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead style="background-color:#000000;color:#f9f6f6;">
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
                            echo '<div class="alert alert-light"><strong>Carrinho vazio: &nbsp;</strong><a href="home.php?pagina=shop">Volte para o catálogo e adicione produtos!</a></div>';
                        }else{

                            //Sessão que vai armazenar todos os dados p/ cadastrar no BD
                            $_SESSION['dados'] = array();


                            
                            foreach($_SESSION['itens'] as $idProduto => $quantidade){

                                //verificação da quantidade
                                if($quantidade < 1){
                                    $_SESSION['itens'][$idProduto] = 1;
                                    $quantidade = 1;
                                    
                                }

                                $select = $conect->prepare("SELECT * FROM tb_produto WHERE id_produto=?");
                                $select->bindParam(1,$idProduto);
                                $select->execute();
                                $produtos = $select->fetchAll();
                                @$total = $quantidade * $produtos[0]["preco_venda_produto"];



                               
    

                            
                                array_push(

                                    $_SESSION['dados'],

                                    @array(
                                        'id_produto' => $idProduto,
                                        'produto' => $produtos[0]["nome_produto"],
                                        'quantidade' => $quantidade,//$produtos[0]["quantidade"],
                                        'preco' => $produtos[0]["preco_venda_produto"],
                                        'total' => $total
                                        
                                    )
                                );
     
                        ?> 
                                <!-- Carrinho HTML -->
                                <tr>
                                    <!-- <td><?php //echo $produtos[0]["id_produto"]?></td> -->
                                    <td><?php echo @$produtos[0]["nome_produto"]?></td>
                                    <td>R$<?php echo number_format($produtos[0]["preco_venda_produto"],2, ",", ".")?></td>


                                    <!-- Quantidade de produtos -->

                                    <td>
                                        <div class="input-group quantity mx-auto" style="width: 100px;">

                                            <!-- Botão menos - -->
                                            <a href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $produtos[0]["id_produto"]?>&idMenos=<?php echo $produtos[0]["id_produto"]?>">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-sm btn-minus" style="background-color:#DF0805;color:#f9f6f6;">
                                                    <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                            </a>    

                                           
                                            <input type="text" id="inputQuantidade" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $quantidade;?>">
                                            <!--
                                                <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value=" <?php echo $quantidade;//$produtos[0]["quantidade"]?>">

                                            Botão mais + -->
                                            <a href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $produtos[0]["id_produto"]?>">

                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-sm btn-plus" style="background-color:#DF0805;color:#f9f6f6;">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>

                        
                                            </a>


                                        </div>
                                    </td>
                                    

                                  
                                    <td>
                                    
                                        R$<?php echo number_format($total,2, ",", ".")?>

                                    </td>
                                
                                    
                                    <td>
                                        <a href="?pagina=remover&remover=carrinho&id=<?php echo $idProduto?>" class="remover">
                                            <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
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

                            //Informações complemantares
                            
                            //$idCliente = 4;
                            $telefone = 5585992902871;
                            $telefone2 = 5585987338264;
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
                            <h5>R$ <?php echo number_format($totalCarrinho,2, ",", ".");?></h5>
                        </div>

                        <a href="home.php?pagina=pedido" style="text-decoration: none;" onclick="return confirm('Deseja enviar o pedido?')">
                            <button class="btn btn-block font-weight-bold my-3 py-3" style="background-color:#DF0805;border:#DF0805;color:#F9F6F6;">Encaminhar Compra</button>
                        </a>
                    </div>
                 
                  


                </div>
            </div>
        </div>
    </div>
    <!-- Fim Carrinho -->

  
