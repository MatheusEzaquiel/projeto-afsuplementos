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


    <!-- Cart Start -->
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
                                <th>Total</th>
                                <th>Adicionar</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                        <?php

                        if(!isset($_SESSION['itens'])){
                            $_SESSION['itens'] = array();
                        }

                        if(isset($_GET['add']) && $_GET['add'] == "carrinho"){

                            /*Adiciona ao carrinho*/
                            $idProduto = $_GET['id'];

                            
                            if(!isset($_SESSION['itens'][$idProduto])){
                                $_SESSION['itens'][$idProduto] = 1;
                            }else{
                                $_SESSION['itens'][$idProduto] += 1;
                            }


                        }

                        /*Exibe o carrinho*/
                        if(count($_SESSION['itens']) == 0){
                            echo 'Carrinho vazio <br><a href="index.php?pagina=shop">Adicionar itens</a>';
                        }else{

                            //Sessão que vai armazenar todos os dados p/ cadastrar no BD
                            $_SESSION['dados'] = array();


                            foreach($_SESSION['itens'] as $idProduto => $quantidade){

                                $select = $conect->prepare("SELECT * FROM tb_produto WHERE id_produto=?");
                                $select->bindParam(1,$idProduto);
                                $select->execute();
                                $produtos = $select->fetchAll();
                                $total = $quantidade * $produtos[0]["preco_venda_produto"];

                                
                            
                                array_push(

                                    $_SESSION['dados'],

                                    array(
                                        'id_produto' => $idProduto,
                                        'quantidade' => $quantidade,//$produtos[0]["quantidade"],
                                        'preco' => $produtos[0]["preco_venda_produto"],
                                        'total' => $total
                                    )
                                );
     
                        ?>
                                <tr>
                                    <!-- <td><?php //echo $produtos[0]["id_produto"]?></td> -->
                                    <td><?php echo $produtos[0]["nome_produto"]?></td>
                                    <td><?php echo $produtos[0]["preco_venda_produto"]?></td>
                                    <td><?php echo $quantidade;//$produtos[0]["quantidade"]?></td>
                                    <td><?php echo $total?></td>
                                    <td><a href="index.php?pagina=carrinho&add=carrinho&id=<?php echo $produtos[0]["id_produto"]?>">+</a></td>

                                    
                                    <td>
                                        <a href="?pagina=remover&remover=carrinho&id=<?php echo $idProduto?>" class="remover">
                                            Remover
                                        </a>
                                    </td>
                                </tr>
                            
                                    
                        <?php

                            }

                            echo '<a href="conteudo/finalizar.php">
                                    <div class="btnFinalizar">
                                        Finalizar pedido
                                    </div>
                                </a>';

                            
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
                            <h5>Total</h5>
                            <h5>R$ 0,00</h5>
                        </div>
                        <a href="conteudo/finalizar.php">
                        <button class="btn btn-block font-weight-bold my-3 py-3" style="background-color:#DF0805;border:#DF0805;color:#F9F6F6;">Encaminhar Compra</button>
                        </a>
                    </div>
                    
                    <button id="btnPopup">Mostrar</button>
                    <dialog id="popup">
                        ok
                    </dialog>

                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <script>
        let btn = document.getElementById("btnPopup")
        btn.addEventListener("click",popUp)

        function popUp(){
            alert("Tem certeza que deseja enviar o pedido?")
        }

        
    </script>