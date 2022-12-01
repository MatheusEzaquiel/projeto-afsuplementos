<!-- Header -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>AF Suplementos</title>
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

    <!-- Jquery Carrinho -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-30" style="background-color: #000000;">
        <div class="row px-xl-5"  style="height: 6em;">
            <div class="col-lg-3 d-none d-lg-block">
                <h6>logo</h6>
            </div>
            <div class="col-lg-9" style="height: 4em;">
                <nav class="navbar navbar-expand-lg mr-auto" style="background-color: #000000;">
                    <div class="navbar-item d-block d-lg-none d-flex justify-content-between">
                    <a href="#" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase px-2" style="background-color:#000000;color:3DF0805;">AF</span>
                        <span class="h1 text-uppercase px-2 ml-n1" style="background-color:#DF0805;color:#000000;">Suplementos</span>
                    </a>

                    <!-- Navbar Mobile -->
                    </div>
                    <div class="navbar-item d-block d-lg-none d-flex justify-content-between">
                        <a href="index.php" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
                        <a href="shop.php" class="nav-item nav-link" style="color: #F9F6F6;">Catálogo</a>
                        <a href="contato.php" class="nav-item nav-link active" style="color: #F9F6F6;">Contato</a>
                    </div>
                    <div class="nav-item d-block d-lg-none pl-5">
                        <a href="home.php?pagina=carrinho" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart" style="color:#DF0805;"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown text-decoration-none d-block d-lg-none">
                        <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Entrar <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                            <a href="index-login.php" class="dropdown-item" style="color:#F9F6F6;">Fazer login</a>
                            <a href="cadastro-cliente.php" class="dropdown-item" style="color:#F9F6F6;">Cadastrar-se</a>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Mobile End-->

                    <!-- Navbar Desktop -->
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-3">
                            <a href="index.php" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
                            <a href="shop.php" class="nav-item nav-link" style="color: #F9F6F6;">Catálogo</a>
                            <a href="contato.php" class="nav-item nav-link active" style="color: #F9F6F6;">Contato</a>
                        </div>

                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="home.php?pagina=carrinho" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart" style="color:#DF0805;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>

                        <div class="nav-item dropdown">
                                <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Entrar <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                            <a href="index-login.php" class="dropdown-item" style="color:#F9F6F6;">Fazer login</a>
                            <a href="cadastro-cliente.php" class="dropdown-item" style="color:#F9F6F6;">Cadastrar-se</a>
                                </div>
                        </div>
                    </div>
                    <!-- Navbar Desktop End-->

                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop.php">Catálogo</a>
                    <span class="breadcrumb-item active" href="#">Lista de produtos</span>
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
                                            <a class="dropdown-item" href="shop.php?TipoProduto=0">Todos</a>
                                            <a class="dropdown-item" href="shop.php?TipoProduto=1">Em pó</a>
                                            <a class="dropdown-item" href="shop.php?TipoProduto=2">Bebidas</a>
                                            <a class="dropdown-item" href="shop.php?TipoProduto=3">Pílulas</a>
                                            <a class="dropdown-item" href="shop.php?TipoProduto=4">Barrinhas</a>
                                            <a class="dropdown-item" href="shop.php?TipoProduto=5">Roupas</a>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Preço</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="shop.php?filtroPreco=0">Qualquer preço</a>
                                            <a class="dropdown-item" href="shop.php?filtroPreco=1">Menor que $50</a>
                                            <a class="dropdown-item" href="shop.php?filtroPreco=2">$50 - $100</a>
                                            <a class="dropdown-item" href="shop.php?filtroPreco=3">$100 - $200</a>
                                            <a class="dropdown-item" href="shop.php?filtroPreco=4">Maior que $200</a>
                                        </div>
                                    </div>

                                
                                   
                                    


                                </div>
                            </div>
                        </div>
                        
                        <!-- EXIBIR PRODUTOS -->
                        <?php

                            include_once("config/conexao.php");

                            $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1";

                            //filtro de produtos
                            include("cliente/paginas/conteudo/filtro-shop/filtro.php");

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
                                        <img  style="width: 700px; height:500px;" class="img-fluid w-100" src="imgs/produtos/<?php echo $produto['foto_produto'];?>" alt="foto-produto">
                                        
                                        <div class="product-action">
                                            <!-- Botão enviar p/ carrinho -->
                                            <a class="btn btn-outline-dark btn-square" href="index-login.php?acao=login1v" name="btn-carrinho<?php echo $idProduto;?>"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="detalhes.php?idDetail=<?php echo $produto['id_produto']?>"><i class="fa fa-search"></i></a>
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
                                            window.location.replace('shop.php');
                                            }, 2000)
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

<!-- Footer Start -->
    <div class="container-fluid text-secondary mt-5 pt-5" style="background-color: #000000;">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class=" text-uppercase mb-4" style="color: #F9F6F6;">Sobre nós</h5>
                <p class="mb-4" style="color: #F9F6F6;">Nosso objetivo é fornecer itens necessários para proporcionar melhor desempenho em seus treinos, como roupas, suplementos e acessórios. De alta qualidade e preço justo!</p>
                <p class="mb-2" style="color: #F9F6F6;"><i class="fa fa-map-marker-alt  mr-3" style="color: #DF0805;"></i>Rua Maria Queiroz 107 - Buriti</p>
                <p class="mb-2" style="color: #F9F6F6;"><i class="fa fa-envelope  mr-3" style="color: #DF0805;"></i>afsuplementosemodafitness@gmail.com</p>
                <p class="mb-0" style="color: #F9F6F6;"><i class="fa fa-phone-alt  mr-3" style="color: #DF0805;"></i>+55 85 99108-5837</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-uppercase mb-4" style="color: #F9F6F6;">Compra rápida</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php" style="color: #F9F6F6;"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="shop.php" style="color: #F9F6F6;"><i class="fa fa-angle-right mr-2"></i>Catálogo</a>
                            <a class="text-secondary mb-2" href="contato.php" style="color: #F9F6F6;"><i class="fa fa-angle-right mr-2"></i>Contato</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Minha conta</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index-login.php"><i class="fa fa-angle-right mr-2"></i>Login</a>
                            <a class="text-secondary mb-2" href="cadastro-cliente.php"><i class="fa fa-angle-right mr-2"></i>Cadastro</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-uppercase mt-4 mb-3" style="color: #F9F6F6;">Nossos contatos</h6>
                        <div class="d-flex">
                            <a class="btn btn-square" style="background-color: #DF0805;border: solid 1px #DF0805;color: #F9F6F6;" href="https://www.instagram.com/af_suplementos_/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square ml-3" style="background-color: #DF0805;border: solid 1px #DF0805; color: #F9F6F6;" href="https://api.whatsapp.com/send?phone=5585987338264&text=Olá!%20venho%20diretamento%20do%20site
                            ">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">

            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn  back-to-top" style="background-color: #DF0805;color:#F9F6F6;"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</html>
<!-- Footer End -->
