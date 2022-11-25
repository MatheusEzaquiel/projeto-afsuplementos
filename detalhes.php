<!-- Header -->

<?php
    
    /*
    //Caso o cliente não esteja logado, redirecione
    ob_start();
    @session_start(); 

    if(!isset($_SESSION['loginUser']) && (!isset($_SESSION['senhaUser']))){


        header("Location: ../../home.php?acao=negado");
            exit;


    }
 

    include_once('sair.php');

   */

?>

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

    
    <?php
    /*

    //$emailLogado = $_SESSION['loginUser'];
    //$senhaLogado = base64_encode($_SESSION['senhaUser']);

  


    
    $selectCliente = "SELECT * FROM tb_cliente WHERE email_cliente = :emailClienteLogado AND senha_cliente = :senhaClienteLogado";
    
    try {
        $resultCliente = $conect->prepare($selectCliente);
        $resultCliente->bindParam(":emailClienteLogado",$emailLogado,PDO::PARAM_STR);
        $resultCliente->bindParam(":senhaClienteLogado",$senhaLogado,PDO::PARAM_STR);
        $resultCliente->execute();

        $contCliente = $resultCliente->rowCount();
        

        if($contCliente > 0){
            while($clienteLogado = $resultCliente->FETCH(PDO::FETCH_OBJ)){

                $idCliente = $clienteLogado->id_cliente;
                $nomeCliente = $clienteLogado->nome_cliente;
                $emailCliente = $clienteLogado->email_cliente;
                $senhaCliente = $clienteLogado->senha_cliente;
                $foneCliente = $clienteLogado->telefone_cliente;




            }

           

        }else{
            echo "Não há dados com esse id!";
        }

    } catch (PDOException $erro) {
        echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
    }   
    
    */
    ?>


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
                        <a href="index2.php" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
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
                        <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                            <a href="../../login-cliente.php" class="dropdown-item" style="color:#F9F6F6;">Fazer login</a>
                            <a href="../paginas/conteudo/home.php?pagina=sair" class="dropdown-item" style="color:#F9F6F6;">Sair</a>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Mobile End-->

                    <!-- Navbar Desktop -->
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-3">
                            <a href="index2.php" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
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
                                <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                                    <a href="home.php?pagina=perfil" class="dropdown-item" style="color:#F9F6F6;">Sua conta</a>
                                    <a href="?sair" class="dropdown-item" style="color:#F9F6F6;">Sair</a>
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
                    <a class="breadcrumb-item text-dark" href="home.php?pagina=index">Home</a>
                    <a class="breadcrumb-item text-dark" href="">Catálogo</a>
                    <span class="breadcrumb-item active">Detalhes do produto</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <?php
                include_once('config/conexao.php');
                $id = $_GET['idDetail'];
                $select = "SELECT * FROM tb_produto WHERE id_produto=:id";
                try{
                    $resultSel = $conect->prepare($select);
                    $resultSel->bindParam(':id',$id,PDO::PARAM_INT);
                    $resultSel->execute();

                    $contar=$resultSel->rowCount();
                    if($contar>0){
                        while($show = $resultSel->FETCH(PDO::FETCH_OBJ)){
                            $idCont = $show->id_produto;
                            $nomeProd = $show->nome_produto;
                            $precoProd = $show->preco_venda_produto;
                            $descProd = $show->descricao_produto;
                            $marcaProd = $show->marca_produto;
                            $TamProd = $show->tamanho_produto;
                            $FotoProd = $show->foto_produto;
                            $PromoProd = $show->promocao_produto;
                        }  
                    }else{
                        echo '<div class="alert alert-danger">
                        Houve um erro no display no produto!</div>';
                    }
                }catch(PDOException $e){
                  echo '<div class="alert alert-danger">
                  <strong>ERRO DE SELECT NO PDO: </strong>
                  </div>'.$e->getMessage();
                }
                

              ?>
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="imgs/produtos/<?php echo $FotoProd;?>" alt="Image">
                        </div>
                    </div>
                    <!--
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                    -->
                </div>
            </div>
            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $nomeProd; ?></h3>
                    <h5 class="font-weight-semi-bold mb-4"><?php echo $marcaProd; ?></h5>

                    <h3 class="font-weight-semi-bold mb-4">R$<?php echo  str_replace('.' , ',', $precoProd); ?></h3>
                    <p class="mb-4"><?php echo $descProd; ?></p>
                    <!--
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Sabores:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Chocolate</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">Morango</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Neutro</label>
                            </div>

                        </form>
                    </div>
            -->
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus" style="background-color:#DF0805;border:solid 1px #DF0805;">
                                    <i class="fa fa-minus" style="color:#F9F6F6;"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus" style="background-color:#DF0805;border:solid 1px #DF0805;">
                                    <i class="fa fa-plus" style="color:#F9F6F6;"></i>
                                </button>
                            </div>
                        </div>
                        <a class="btn px-3" href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $idCont?>" style="background-color:#DF0805;color:#F9F6F6;border-radius:3px;border:solid 1px #DF0805;"><i class="fa fa-shopping-cart mr-1"></i> Adicionar ao carrinho</a>
                    </div>

                   
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Descrição</a>
                        <!--<a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Tabela Nutricional</a>-->
                        <!--<a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Rewiews (0)</a>-->
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Descrição do Produto</h4>
                            <p> <?php echo $descProd; ?>
                            <p>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "Product Name"</h4>
                                    <div class="media mb-4">
                                        <img src="../../img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    
    </div><div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Você também pode gostar</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                <?php
                    include_once("config/conexao.php");
                    $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY preco_venda_produto ASC";
                        try {
                        $resultSelProdutos = $conect->prepare($selectProdutos);
                        $resultSelProdutos->execute();
                        $contSelProdutos = $resultSelProdutos->rowCount();

                        if($contSelProdutos > 0){
                            while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                                $showProdutos->id_produto;
                                                $showProdutos->tipo_produto;
                                                $showProdutos->marca_produto;
                                                $nomeProduto = $showProdutos->nome_produto;
                                                $tamanhoProduto = $showProdutos->tamanho_produto;
                                                $showProdutos->descricao_produto;
                                                $showProdutos->preco_compra_produto;
                                                $precoVendaP = $showProdutos->preco_venda_produto;
                                                $showProdutos->quantidade_produto;
                                                $fotoProduto = $showProdutos->foto_produto;
                                                $showProdutos->promocao_produto;
        ?>
                    <form action="" method="post">
                        <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="imgs/produtos/<?php echo $fotoProduto;?>" alt="foto-produto-<?php echo $nomeProduto?>">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href=""><?php echo $nomeProduto?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>R$<?php echo str_replace('.' , ',', $precoVendaP)?></h5><h6 class="text-muted ml-2"><del>123.00</del></h6>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                              
                                    }//Fim while
                                }else{
                                    echo "ERRO!!";
                                }
                            } catch (PDOException $erro) {
                                echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
                            }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


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
                            <a class="text-secondary mb-2" href="../../login-cliente.php"><i class="fa fa-angle-right mr-2"></i>Login</a>
                            <a class="text-secondary mb-2" href="../../cadastro-cliente.php"><i class="fa fa-angle-right mr-2"></i>Cadastro</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-uppercase mt-4 mb-3" style="color: #F9F6F6;">Nossos contatos</h6>
                        <div class="d-flex">
                            <a class="btn btn-square" style="background-color: #DF0805;border: solid 1px #DF0805;color: #F9F6F6;" href="https://www.instagram.com/af_suplementos_/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square ml-3" style="background-color: #DF0805;border: solid 1px #DF0805; color: #F9F6F6;" href="https://api.whatsapp.com/send?phone=5585987338264&text=teste%20amigao
                            "><i class="fab fa-whatsapp"></i></a>
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
