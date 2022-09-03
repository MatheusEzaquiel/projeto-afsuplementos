<?php include_once("../includes/header.php");?>

<body>
    <!-- Navbar Start -->
    
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!--Formulário de Login-->
            <div class="col-lg-3">
                <!--Coluna direita-->
            </div>
            

            
            <div class="col-lg-6">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Adicione um novo produto</span></h5>
                    
                    <div class="bg-light p-30 mb-5">
                    <form action="" method="post">
                        <div class="row">
                    
                            <div class="col-md-6 form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" placeholder="Nome do produto" name="nome-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Marca</label>
                                <input class="form-control" type="text" placeholder="Marca do produto" name="marca-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tipo</label>
                                <select class="custom-select" name="tipo-produto">
                                <option value="po" selected>em pó</option>
                                    <option value="bebida">bebida</option>
                                    <option value="grao">grão</option>
                                    <option value="pilula">pílula</option>
                                    <option value="pilula">barra</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tamanho</label>
                                <input class="form-control" type="text" placeholder="1000 Kg/L" name="tamanho-produto">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Descricão</label>
                                <textarea class="form-control" type="text" placeholder="Características do produto" name="descricao-produto"> </textarea>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Preço de compra</label>
                                <input class="form-control" type="number" placeholder="R$ 0,00" name="preco-compra-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Preço de venda</label>
                                <input class="form-control" type="number" placeholder="R$ 0,00" name="preco-venda-produto">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Quantidade</label>
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="0" name="qtd-produto">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Imagem do Produto</label>
                                <input class="form-control" type="file" name="foto-produto">
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <button type="submit" name="btn-cadastro" class="btn btn-block btn-primary font-weight-bold py-3 ">Cadastrar no estoque</button>
                            </div>
                            
                        </div>
                    </form>
                    <?php
                        include_once("../../config/conexao.php");
                        if(isset($_POST["btn-cadastro"])){
                            $nomeProdt = $_POST["nome-produto"];
                            $marcaProdt = $_POST["marca-produto"];
                            $tipoProdt = $_POST["tipo-produto"];
                            $tamanhoProdt = $_POST["tamanho-produto"];
                            $descricaoProdt = $_POST["descricao-produto"];
                            $precoCompraProdt = $_POST["preco-compra-produto"];
                            $precoVendaProdt = $_POST["preco-venda-produto"];
                            $qtdProdt = $_POST["qtd-produto"];
                            $fotoProdt = "foto-teste";//$_POST["foto-produto"];

                            $cadastroProdt = "INSERT INTO tb_produto(tipo_produto,marca_produto,nome_produto,tamanho_produto,descricao_produto,preco_compra_produto,preco_venda_produto,quantidade_produto,foto_produto) VALUES(:tipoProdt,:marcaProdt,:nomeProdt,:tamanhoProdt,:descricaoProdt,:precoCompProdt,:precoVenProdt,:qtdProdt,:fotoProdt)";
                            
                            try{
                                $resultCadProdt = $conect->prepare($cadastroProdt);
                                $resultCadProdt->bindParam(":tipoProdt",$tipoProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":marcaProdt",$marcaProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":nomeProdt",$nomeProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":tamanhoProdt",$tamanhoProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":descricaoProdt",$descricaoProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":precoCompProdt",$precoCompraProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":precoVenProdt",$precoVendaProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":qtdProdt",$qtdProdt,PDO::PARAM_STR);
                                $resultCadProdt->bindParam(":fotoProdt",$fotoProdt,PDO::PARAM_STR);

                                $resultCadProdt->execute();
                                $contCadProdt = $resultCadProdt->rowCount();
                                if($contCadProdt > 0){
                                    echo "<div class='alert alert-success' role='alert'>
                                            Produto Cadastrado com sucesso!
                                        </div>";
                                    
                                    echo "<script>
                                            setTimeout(function() {
                                                window.location.replace('http://localhost/af-suplementos/estoque/pages/cadastro-produtos.php');
                                            }, 2000)
                                        </script>";
                                    
                                        
                                }
                            }catch(PDOException $erro){
                                echo "ERRO DE PDO (CADASTRO)".$erro->getMessage();
                            }
                                
                        }
                        

                        
                    ?>
                </div>
            </div>
            <!-- FIM - Formulário de Login-->
            <div class="col-lg-3">
                <!--Coluna direita-->
            </div>
        </div>
    </div>
    <!-- Checkout End -->


     <!-- Footer -->
     <?php include_once("../includes/footer.php");?>
