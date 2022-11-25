
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
                        <a href="shop.php" class="nav-item nav-link" style="color: #F9F6F6;">Fazer login</a>
                        <a href="contato.php" class="nav-item nav-link active" style="color: #F9F6F6;">Cadastrar-se</a>
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
                                    <a href="index-login.php" class="dropdown-item" style="color:#F9F6F6;">Fazer log-in</a>
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
    


    <!-- Conteúdo Start-->
    <!-- Carousel Start -->
    
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/amostra-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Probiótica</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Somos pioneiros! Desde 1986 a PROBIÓTICA investe em um processo contínuo de pesquisa e inovação em colaboração com nutricionistas, médicos, treinadores e atletas.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="home.php?pagina=shop">
                                      Comprar agora</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/amostra-6.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Integralmédica</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                    Integralmédica tem os melhores suplementos para aumentar a sua performance e resultado.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="home.php?pagina=shop">Comprar agora</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/amostra-3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Max Titanium</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Na Max Titanium temos suplementos para aumentar sua performance!</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="home.php?pagina=shop">Comprar agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promoções do início -->
            <div class="col-lg-4">
                <!-- PHP 1/2 -->
                <?php
                
                    include_once("config/conexao.php");
                    
                    $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND promocao_produto > 0 ORDER BY RAND() LIMIT 2";
                        try {
                        $resultSelProdutos = $conect->prepare($selectProdutos);
                        $resultSelProdutos->execute();
                        $contSelProdutos = $resultSelProdutos->rowCount();

                        if($contSelProdutos > 0){
                            while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                                $idProduto = $showProdutos->id_produto;
                                                $showProdutos->tipo_produto;
                                                $showProdutos->marca_produto;
                                                $nomeP = $showProdutos->nome_produto;
                                                $showProdutos->tamanho_produto;
                                                $showProdutos->descricao_produto;
                                                $showProdutos->preco_compra_produto;
                                                $showProdutos->preco_venda_produto;
                                                $showProdutos->quantidade_produto;
                                                $showProdutos->foto_produto;
                                                $showProdutos->promocao_produto;
                ?>
                <form action="" method="post">

                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo $showProdutos->nome_produto;?></h6>
                        <h3 class="text-white mb-3">Produto em promoção</h3>
                        <a href="detalhes.php?idDetail=<?php echo $showProdutos->id_produto;?>" class="btn " style="background-color:#DF0805;border: #DF0805 1px solid;color: #F9F6F6;">Comprar Agora</a>
                    </div>
                </div>

                </form>
                
                <!-- PHP 2/2 -->
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
            <!-- Promoções do início End-->

        </div>
    </div>
    <!-- Carousel End -->


    <!-- Cards Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check  m-0 mr-3" style="color:#DF0805;"></h1>
                    <h5 class="font-weight-semi-bold m-0">Produto de Qualidade</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                <div class="d-flex align-items-center bg-light" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast m-0 mr-2" style="color:#DF0805;"></h1>
                    <h5 class="font-weight-semi-bold m-0 pl-2">Fazemos<br>entregas &nbsp;&nbsp;&nbsp;</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-comments-dollar m-0 mr-3" style="color:#DF0805;"></h1>
                    <h5 class="font-weight-semi-bold m-0">Pague à vista, Pix ou Cartão</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume  m-0 mr-3" style="color:#DF0805;"></h1>
                    <h5 class="font-weight-semi-bold m-0">Suporte por WhatsApp</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards End -->


    <!-- Produtos em Promoções Start -->
    <div class="container-fluid py-5">
  <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Promoções</span></h2>
  <div class="row px-xl-5">
    <div class="col">
      <div class="owl-carousel related-carousel">
      <?php
      
          include_once("config/conexao.php");
          $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND promocao_produto > 0  ORDER BY preco_venda_produto ASC";
            try {
              $resultSelProdutos = $conect->prepare($selectProdutos);
              $resultSelProdutos->execute();
              $contSelProdutos = $resultSelProdutos->rowCount();

              if($contSelProdutos > 0){
                while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                      $idProduto = $showProdutos->id_produto;
                                      $showProdutos->tipo_produto;
                                      $showProdutos->marca_produto;
                                      $nomeP = $showProdutos->nome_produto;
                                      $showProdutos->tamanho_produto;
                                      $showProdutos->descricao_produto;
                                      $showProdutos->preco_compra_produto;
                                      $showProdutos->preco_venda_produto;
                                      $showProdutos->quantidade_produto;
                                      $showProdutos->foto_produto;
                                      $showProdutos->promocao_produto;
        
           ?>

        <form action="" method="post">

          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
              <div class="product-action">

                <!-- Botão enviar p/ carrinho-->
                <a class="btn btn-outline-dark btn-square" href="index-login.php?acao=login1v" ><i class="fa fa-shopping-cart"></i></button></a>

                <!-- Botão enviar p/ ver detalhes-->
                <a class="btn btn-outline-dark btn-square" href="detalhes.php?idDetail=<?php echo $showProdutos->id_produto;?>"><i class="fa fa-search"></i></a>

              </div>
            </div>

            <div class="text-center py-4">
              <a style="font-weight: 900;" class="h6 text-decoration-none text-truncate" href="home.php?pagina=detalhes&idDetail=<?php echo $showProdutos->id_produto;?>"><?php echo $showProdutos->nome_produto;?></a>
              <br><small><?php echo $showProdutos->marca_produto;?></small> |
              <small><?php echo $showProdutos->tamanho_produto;?></small>
              <div class="d-flex align-items-center justify-content-center mt-2">
                <h5 style="color:green">R$<?php echo str_replace('.' , ',', $showProdutos->preco_venda_produto);?></h5><h6 class="text-muted ml-2"></h6>
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
    <!-- Promoções End -->


    <!-- Produtos Start -->
    <div class="container-fluid py-5">
  <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Produtos</span></h2>
  <div class="row px-xl-5">
    <div class="col">
      <div class="owl-carousel related-carousel">
        <?php


          $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY preco_venda_produto ASC";
            try {
              $resultSelProdutos = $conect->prepare($selectProdutos);
              $resultSelProdutos->execute();
              $contSelProdutos = $resultSelProdutos->rowCount();

              if($contSelProdutos > 0){
                while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                    $idProduto = $showProdutos->id_produto;
                    $showProdutos->tipo_produto;
                    $showProdutos->marca_produto;
                    $nomeP = $showProdutos->nome_produto;
                    $showProdutos->tamanho_produto;
                    $showProdutos->descricao_produto;
                    $showProdutos->preco_compra_produto;
                    $showProdutos->preco_venda_produto;
                    $showProdutos->quantidade_produto;
                    $showProdutos->foto_produto;
                    $showProdutos->promocao_produto;


        ?>
        <form action="" method="post">

            <div class="product-item bg-light mb-4">

            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
             
                
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href="index-login.php?acao=login1v" name="btn-carrinho<?php echo $idProduto;?>"><i class="fa fa-shopping-cart"></i></a>
                    <!--<button type="submit" class="btn btn-outline-dark btn-square" name="btn-carrinho<?php echo $showProdutos->id_produto;?>"><i class="fa fa-shopping-cart"></i></button>-->
                    <a class="btn btn-outline-dark btn-square" href="detalhes.php?idDetail=<?php echo $showProdutos->id_produto;?>"><i class="fa fa-search"></i></a>
                </div>

                </div>

                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="detalhes.php?idDetail=<?php echo $showProdutos->id_produto;?>"><?php echo $showProdutos->nome_produto;?></a>
                    <br><small><?php echo $showProdutos->marca_produto;?></small> |
                    <small><?php echo $showProdutos->tamanho_produto;?></small>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5 style="color:green">R$<?php echo str_replace('.' , ',', $showProdutos->preco_venda_produto);?></h5><h6 class="text-muted ml-2"></h6>
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
</div>
    <!-- Products End -->


    <!-- Categorias Start -->
    <div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categorias</span></h2>
  <?php


    //em pó
    $selectPo = "SELECT * FROM tb_produto WHERE tipo_produto = 1";
    $resultPo = $conect->prepare($selectPo);
    $resultPo->execute();
    $po_qtd = $resultPo->rowCount();

    //bebidas
    $selectBebida = "SELECT * FROM tb_produto WHERE tipo_produto = 2";
    $resultBebida = $conect->prepare($selectBebida);
    $resultBebida->execute();
    $bebida_qtd = $resultBebida->rowCount();

    //pilulas
    $selectPilula = "SELECT * FROM tb_produto WHERE tipo_produto = 3";
    $resultPilula = $conect->prepare($selectPilula);
    $resultPilula->execute();
    $pilula_qtd = $resultPilula->rowCount();

    //barrinhas
    $selectBarrinha = "SELECT * FROM tb_produto WHERE tipo_produto = 4";
    $resultBarrinha = $conect->prepare($selectBarrinha);
    $resultBarrinha->execute();
    $barrinha_qtd = $resultBarrinha->rowCount();
    

  ?>

  <form action="" method="POST">
  <div class="row px-xl-5 pb-3">
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=1">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="img/po-01.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Em pó</h6>
          <small class="text-body"><?php echo $po_qtd;?> Produtos</small></div>
      </div>
      </a></div>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=2">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="img/bebida-01.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Bebidas</h6>
          <small class="text-body"><?php echo $bebida_qtd;?> Produtos</small></div>
      </div>
      </a></div>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=3">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="img/pilula-01.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Pílulas</h6>
          <small class="text-body"><?php echo $pilula_qtd;?> Produtos</small></div>
      </div>
      </a></div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=4">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="img/barra-1.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Barrinhas</h6>
          <small class="text-body"><?php echo $barrinha_qtd;?> Produtos</small></div>
      </div>
      </a></div>
    </form>
  </div>
</div>
    <!-- Categorias End -->

    <!-- Vendor Start -->
    <!-- PHP 1/2 -->
                    <!-- PHP 1/2 -->
                    <?php

                  
                    $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND promocao_produto > 0 ORDER BY RAND() LIMIT 1";
                        try {
                        $resultSelProdutos = $conect->prepare($selectProdutos);
                        $resultSelProdutos->execute();
                        $contSelProdutos = $resultSelProdutos->rowCount();

                        if($contSelProdutos > 0){
                            while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){
                                                $showProdutos->id_produto;
                                                $showProdutos->tipo_produto;
                                                $showProdutos->marca_produto;
                                                $showProdutos->nome_produto;
                                                $showProdutos->tamanho_produto;
                                                $showProdutos->descricao_produto;
                                                $showProdutos->preco_compra_produto;
                                                $showProdutos->preco_venda_produto;
                                                $showProdutos->quantidade_produto;
                                                $showProdutos->foto_produto;
                                                $showProdutos->promocao_produto;
                   
                ?>
    <form action="" method="post">
    <div class="container-fluid py-5 pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-12">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo $showProdutos->nome_produto;?></h6>
                        <h3 class="text-white mb-3">Produto em promoção</h3>
                        <a href="" class="btn" style="background-color:#DF0805;border: #DF0805 1px solid;color: #F9F6F6;">Comprar Agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- PHP 2/2 -->
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
    <!-- Vendor End -->

    <!-- Conteúdo Start-->

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
