


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
                            <img class="position-absolute w-100 h-100" src="../../img/amostra-1.jpg" style="object-fit: cover;">
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
                            <img class="position-absolute w-100 h-100" src="../../img/amostra-6.jpg" style="object-fit: cover;">
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
                            <img class="position-absolute w-100 h-100" src="../../img/amostra-3.jpg" style="object-fit: cover;">
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
            <div class="col-lg-4">
                <!-- PHP 1/2 -->
                <?php

                    include_once("../../config/conexao.php");
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
                    <img style="width: 700px; height:500px;" class="img-fluid" src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo $showProdutos->nome_produto;?></h6>
                        <h3 class="text-white mb-3">Produto em promoção</h3>
                        <a href="home.php?pagina=detalhes&idDetail=<?php echo $showProdutos->id_produto;?>" class="btn " style="background-color:#DF0805;border: #DF0805 1px solid;color: #F9F6F6;">Comprar Agora</a>
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
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
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
                <a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=5585992902871&text= Olá, venho diretamente do site">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume  m-0 mr-3" style="color:#DF0805;"></h1>
                    <h5 class="font-weight-semi-bold m-0">Suporte por WhatsApp</h5>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Produtos Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Promoções</span></h2>
        <div class="row px-xl-5">
            <div class="col">

                <div class="owl-carousel related-carousel">
                    <?php
                        include_once("../../config/conexao.php");
                        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY preco_venda_produto ASC";
                        
                        try{
                            $resultSelProdutos = $conect->prepare($selectProdutos);
                            $resultSelProdutos->execute();
                            $contSelProdutos = $resultSelProdutos->rowCount();

                            if($contSelProdutos > 0){
                                while($showProdutos = $resultSelProdutos->FETCH(PDO::FETCH_OBJ)){

                                    $idProduto          = $showProdutos->id_produto;
                                    $tipoProduto        = $showProdutos->tipo_produto;
                                    $marcaProduto       = $showProdutos->marca_produto;
                                    $nomeProduto        = $showProdutos->nome_produto;
                                    $tamanhoProduto     = $showProdutos->tamanho_produto;
                                    $descricaoProduto   = $showProdutos->descricao_produto;
                                    $precoVendaP        = $showProdutos->preco_venda_produto;
                                    $qtdProduto         = $showProdutos->quantidade_produto;
                                    $fotoProduto        = $showProdutos->foto_produto;
                                    
                    ?>

                    <form action="" method="post">
                        <!-- Primeira linha -->
                        <div class="product-item bg-light mb-4">
                                            
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                        
                                <div class="product-action">
                                    <!-- Botão enviar p/ carrinho e detalhes-->
                                    <a class="btn btn-outline-dark btn-square" href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $idProduto?>" name="btn-carrinho<?php echo $showProdutos->id_produto;?>"><i class="fa fa-shopping-cart"></i></button>
                                    <a class="btn btn-outline-dark btn-square" href="home.php?pagina=detalhes&idDetail=<?php echo $showProdutos->id_produto;?>"><i class="fa fa-search"></i></a>
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

                        <!-- Segunda linha -->
                        <div class="product-item bg-light mb-4">

                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                                
                                <div class="product-action">
                                    <!-- Botão enviar p/ carrinho e detalhes-->
                                    <a class="btn btn-outline-dark btn-square" href="home.php?pagina=carrinho&add=carrinho&id=<?php echo $idProduto?>" name="btn-carrinho<?php echo $showProdutos->id_produto;?>"><i class="fa fa-shopping-cart"></i></button>
                                    <a class="btn btn-outline-dark btn-square" href="home.php?pagina=detalhes&idDetail=<?php echo $showProdutos->id_produto;?>"><i class="fa fa-search"></i></a>
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
                                echo "Sem promoções no momento";
                            }
                        } catch (PDOException $erro) {
                            echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <!-- Produtos End -->
    


    <!-- Categorias Start -->
    <div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categorias</span></h2>
  <?php

    include_once("../../config/conexao.php");

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
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="../../img/po-01.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Em pó</h6>
          <small class="text-body"><?php echo $po_qtd;?> Produtos</small></div>
      </div>
      </a></div>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=2">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="../../img/bebida-01.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Bebidas</h6>
          <small class="text-body"><?php echo $bebida_qtd;?> Produtos</small></div>
      </div>
      </a></div>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=3">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="../../img/pilula-01.png" alt="website template image"></div>
        <div class="flex-fill pl-3">
          <h6>Pílulas</h6>
          <small class="text-body"><?php echo $pilula_qtd;?> Produtos</small></div>
      </div>
      </a></div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="home.php?pagina=shop&TipoProduto=4">
      <div class="cat-item img-zoom d-flex align-items-center mb-4">
        <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="../../img/barra-1.png" alt="website template image"></div>
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
                    include_once("../../config/conexao.php");
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
                    <img class="img-fluid" src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo $showProdutos->nome_produto;?></h6>
                        <h3 class="text-white mb-3">Produto em promoção</h3>
                        <a href="home.php?pagina=shop" class="btn" style="background-color:#DF0805;border: #DF0805 1px solid;color: #F9F6F6;">Comprar Agora</a>
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
