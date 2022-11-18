<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>AF Suplementos | Estoque</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Jquery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" 
        integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" 
        crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5" style="background-color:#000000;">
            <div class="col-lg-3 d-none d-lg-block">
               <h6>logo</h6>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0" style="background-color:#000000;">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Mlti</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                       
                    </a>
                    <div class="navbar-nav ml-auto py-0 d-block d-lg-none">  
                            <div class="nav-item dropdown text-decoration-none">
                                <a href="#" class="nav-link btn px-0 ml-3" style="color:#F9F6F6;" data-toggle="dropdown"> 
                                <i class="fa fa-bell" style="color:#DF0805;"></i>
                                </a>
                                    <div class="dropdown-menu rounded-0 border-0 m-0">
                                        <div style="background-color:white;">
                                        <?php
                                            include_once("../../config/conexao.php");
                                            $selectProdutos = "SELECT * FROM tb_produto";

                                            try {
                                                $resultSelProdutos = $conect->prepare($selectProdutos);
                                                $resultSelProdutos->execute();
                                                $contSelProdutos = $resultSelProdutos->rowCount();

                                                if($contSelProdutos > 0){
                                                    while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                                        
                                                        $idProduto         = $showProdutos->id_produto;
                                                        $tipoProduto       = $showProdutos->tipo_produto;
                                                        $marcaProduto      = $showProdutos->marca_produto;
                                                        $nomeProduto       = $showProdutos->nome_produto;
                                                        $tamanhoProduto    = $showProdutos->tamanho_produto;
                                                        $descricaoProduto  = $showProdutos->descricao_produto;
                                                        $precoCompraP      = $showProdutos->preco_compra_produto;
                                                        $precoVendaP       = $showProdutos->preco_venda_produto;
                                                        $qtdProduto        = $showProdutos->quantidade_produto;
                                                        $fotoProduto       = $showProdutos->foto_produto;
                                                        $validadeProduto   = $showProdutos->validade_produto;
                                                        $promocaoProduto   = $showProdutos->promocao_produto;
                                        
                                                                    /* Verificação de validade */
            
                                                        $dateAntiga = date_create($validadeProduto);
                                                        //$dateAtual = date_create('2022-11-14');
                                                        $dateAtual = date_create();

                                                        $diasDeVencimento = date_diff($dateAtual, $dateAntiga);
                                                        
                                                        /*
                                                            -> $diasDeVencimento é um obj
                                                            -> o atributo days sempre retorna um inteiro positivo [$diasDeVencimento->days]
                                                            -> já o atributo define se o número é negativo ou positivo
                                                            -> Se "invert" retorna 0 (número negativo) ou seja, produto vencido  [$diasDeVencimento->invert]
                                                            -> Se retorna 1 (número positivo) ou seja, produto não vencido
                                                        */

                                                        //Como o atributo invert define se o número é negativo ou não, usa-se ele p/ modificar o valor de dias
                                                        if($diasDeVencimento->invert == 1){

                                                            $qtdDias = $diasDeVencimento->days * (-1);
                                                            //quantidade de dias que passaram do vencimento (negativo)

                                                        }else{

                                                            $qtdDias = $diasDeVencimento->days * 1;
                                                            //quantidade de dias que estão do vencimento (positivo)

                                                        }

                                                        //Verifica se há produtos vencidos ou próximos (em 10 dias) do vencimento
                                                        if($qtdDias > 0 && $qtdDias < 10){

                                                            echo '  <div class="alert alert-warning" role="alert">
                                                                        <h6>Produto próximo do vencimento!</h6>
                                                                        <small>Restam '.$qtdDias.' dias para o produto '.$nomeProduto.' de código [ '.$idProduto.' ] se vencer</small> 
                                                                    </div>';
                                                                
                                                        }else if($qtdDias < 0){
                                                            
                                                            echo '  <div class="alert alert-danger" role="alert">
                                                                        <h6>Produto vencido!</h6>
                                                                        <small>O produto '.$nomeProduto.' de código [ '.$idProduto.' ] se venceu a '. $qtdDias * -1 .' dias</small>
                                                                    </div>';

                                                        }
                                                        

                                                    }//Fim while
                                                        
                                                    
                                                }//Fim if contSelProdutos


                                            } catch (PDOException $erro) {
                                                echo "ERRO DE PDO (SELECT) -> ".$erro->getMessage();
                                            }   


                                        ?>
                                            <form action="">
                                                
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <div class="navbar-nav ml-auto py-0 d-block d-lg-none">  
                        <div class="nav-item dropdown text-decoration-none ">
                            <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                                    <a href="../../login-cliente.php" class="dropdown-item" style="color:#F9F6F6;">Fazer login</a>
                                    <a href="checkout.html" class="dropdown-item" style="color:#F9F6F6;">Sair</a>
                                </div>
                            </div>
                        </div>
                        
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php?pagina=produtos" class="nav-item nav-link" style="color: #F9F6F6;">Lista de Produtos</a>
                            <a href="index.php?pagina=produtos-desativados" class="nav-item nav-link" style="color: #F9F6F6;">Produtos Desativados</a>
                            <a href="index.php?pagina=cadastro-produtos" class="nav-item nav-link" style="color: #F9F6F6;">Cadastro de Produtos</a> 
                            <a href="index.php?pagina=promocoes" class="nav-item nav-link" style="color: #F9F6F6;">Promoções</a>
                            <a href="index.php?pagina=pedidos" class="nav-item nav-link" style="color: #F9F6F6;">Pedidos</a>
                            
                            <!--
                            <a href="index.php?pagina=clientes" class="nav-item nav-link" style="color: #F9F6F6;">Clientes</a>
                            -->
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">  
                            <div class="nav-item dropdown text-decoration-none">
                                <a href="#" class="nav-link btn px-0 ml-3" style="color:#F9F6F6;" data-toggle="dropdown"> 
                                <i class="fa fa-bell" style="color:#DF0805;"></i>
                                </a>
                                    <div class="dropdown-menu rounded-0 border-0 m-0">
                                        <div style="background-color:white;">
                                        <?php
                                            include_once("../../config/conexao.php");
                                            $selectProdutos = "SELECT * FROM tb_produto";

                                            try {
                                                $resultSelProdutos = $conect->prepare($selectProdutos);
                                                $resultSelProdutos->execute();
                                                $contSelProdutos = $resultSelProdutos->rowCount();

                                                if($contSelProdutos > 0){
                                                    while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                                        
                                                        $idProduto         = $showProdutos->id_produto;
                                                        $tipoProduto       = $showProdutos->tipo_produto;
                                                        $marcaProduto      = $showProdutos->marca_produto;
                                                        $nomeProduto       = $showProdutos->nome_produto;
                                                        $tamanhoProduto    = $showProdutos->tamanho_produto;
                                                        $descricaoProduto  = $showProdutos->descricao_produto;
                                                        $precoCompraP      = $showProdutos->preco_compra_produto;
                                                        $precoVendaP       = $showProdutos->preco_venda_produto;
                                                        $qtdProduto        = $showProdutos->quantidade_produto;
                                                        $fotoProduto       = $showProdutos->foto_produto;
                                                        $validadeProduto   = $showProdutos->validade_produto;
                                                        $promocaoProduto   = $showProdutos->promocao_produto;
                                        
                                                                    /* Verificação de validade */
            
                                                        $dateAntiga = date_create($validadeProduto);
                                                        //$dateAtual = date_create('2022-11-14');
                                                        $dateAtual = date_create();

                                                        $diasDeVencimento = date_diff($dateAtual, $dateAntiga);
                                                        
                                                        /*
                                                            -> $diasDeVencimento é um obj
                                                            -> o atributo days sempre retorna um inteiro positivo [$diasDeVencimento->days]
                                                            -> já o atributo define se o número é negativo ou positivo
                                                            -> Se "invert" retorna 0 (número negativo) ou seja, produto vencido  [$diasDeVencimento->invert]
                                                            -> Se retorna 1 (número positivo) ou seja, produto não vencido
                                                        */

                                                        //Como o atributo invert define se o número é negativo ou não, usa-se ele p/ modificar o valor de dias
                                                        if($diasDeVencimento->invert == 1){

                                                            $qtdDias = $diasDeVencimento->days * (-1);
                                                            //quantidade de dias que passaram do vencimento (negativo)

                                                        }else{

                                                            $qtdDias = $diasDeVencimento->days * 1;
                                                            //quantidade de dias que estão do vencimento (positivo)

                                                        }

                                                        //Verifica se há produtos vencidos ou próximos (em 10 dias) do vencimento
                                                        if($qtdDias > 0 && $qtdDias < 10){

                                                            echo '  <div class="alert alert-warning" role="alert">
                                                                        <h6>Produto próximo do vencimento!</h6>
                                                                        <small>Restam '.$qtdDias.' dias para o produto '.$nomeProduto.' de código [ '.$idProduto.' ] se vencer</small> 
                                                                    </div>';
                                                                
                                                        }else if($qtdDias < 0){
                                                            
                                                            echo '  <div class="alert alert-danger" role="alert">
                                                                        <h6>Produto vencido!</h6>
                                                                        <small>O produto '.$nomeProduto.' de código [ '.$idProduto.' ] se venceu a '. $qtdDias * -1 .' dias</small>
                                                                    </div>';

                                                        }
                                                        

                                                    }//Fim while
                                                        
                                                    
                                                }//Fim if contSelProdutos


                                            } catch (PDOException $erro) {
                                                echo "ERRO DE PDO (SELECT) -> ".$erro->getMessage();
                                            }   


                                        ?>
                                            <form action="">
                                                
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                          
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" style="color:#F9F6F6;" data-toggle="dropdown">Admin <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                                    <a href="cart.html" class="dropdown-item active">Sua conta</a>
                                    <a href="checkout.html" class="dropdown-item">Sair</a>
                                </div>
                            </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->