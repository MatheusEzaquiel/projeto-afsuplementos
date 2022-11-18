

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php?pagina=index">Home</a>
                    <a class="breadcrumb-item text-dark" href="">Catálogo</a>
                    <span class="breadcrumb-item active">Detalhes do produto</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <?php
                include_once('../../config/conexao.php');
                $id=$_GET['idDetail'];
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
                            <img class="w-100 h-100" src="../../imgs/produtos/<?php echo $FotoProd;?>" alt="Image">
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

                    <h3 class="font-weight-semi-bold mb-4">$<?php echo $precoProd; ?></h3>
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
                        <a class="btn px-3" href="index.php?pagina=carrinho&add=carrinho&id=<?php echo $produto['id_produto']?>" style="background-color:#DF0805;color:#F9F6F6;border-radius:3px;border:solid 1px #DF0805;"><i class="fa fa-shopping-cart mr-1"></i> Adicionar ao carrinho</a>
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
                    include_once("../../config/conexao.php");
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
                        <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="../../imgs/produtos/<?php echo $showProdutos->foto_produto;?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                                        //Carrinho
                                        if(isset($_POST["btn-carrinho$showProdutos->id_produto"])){
                                            $showProdutos->id_produto;
                                            
                                            $idCliente = 4;
                                            $precoPed = 0; //$precoProdt * $prodtQtd;
                                            $estadoP = 0;

                                            $cadCarrinho = "INSERT INTO tb_carrinho(cliente_pedido,produto_pedido,preco_pedido,estado_pedido) VALUES(:clientePed,:produtoPed,:precoPed,:estadoPed)";
                                            
                                            try{
                                                $resultCadCar = $conect->prepare($cadCarrinho);
                                                $resultCadCar->bindParam(':clientePed',$idCliente,PDO::PARAM_STR);
                                                $resultCadCar->bindParam(':produtoPed',$showProdutos->id_produto,PDO::PARAM_STR);
                                                $resultCadCar->bindParam(':precoPed',$precoPed,PDO::PARAM_STR);
                                                $resultCadCar->bindParam(':estadoPed',$estadoP,PDO::PARAM_STR);
                                                $resultCadCar->execute();

                                                $contPedido = $resultCadCar->rowCount();
                                                if($contPedido > 0){
                                                    echo "<script>alert('${nomeP} enviado para o carrinho')</script>";
                                                }else{
                                                    echo "<script>alert('[Erro] Tente novamente!')</script>";
                                                }

                                            }catch(PDOException	$erro){
                                                echo "ERRO DE CADASTRO [PDO] Carrinho = ".$erro->getMessage();
                                            }
                                            
                                        }
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