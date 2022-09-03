<?php include_once("../includes/header.php");?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Estoque</a>
                    <a class="breadcrumb-item text-dark" href="#">lista de Clientes</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            
            <div class="col-lg-8 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar por Cliente">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Cidade</th>
                            <th>Telefone</th>
                            <th>Número de pedidos</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                            include_once("../../config/conexao.php");
                            $selCliente = "SELECT * FROM tb_cliente";

                            try{

                                $resultSelCliente = $conect->prepare($selCliente);
                                $resultSelCliente->execute();

                                $contSelCliente = $resultSelCliente->rowCount();
                                if($contSelCliente > 0){
                                    while($showCliente = $resultSelCliente->FETCH(PDO::FETCH_OBJ)){
                                        $idCl = $showCliente->id_cliente;
                                        $nomeCl = $showCliente->nome_cliente;
                                        $emailCl = $showCliente->email_cliente;
                                        //$senhaCl = $showCliente->senha_cliente;
                                        //$fotoCl = $showCliente->foto_cliente;
                                        $cidadeCl = $showCliente->cidade_cliente;
                                        //$enderecoCl = $showCliente->endereco_cliente;
                                        $foneCl = $showCliente->telefone_cliente;
                        ?>
                       
                                    <tr>
                                        <td class="align-middle"><?php echo $idCl;?></td>
                                        <td class="align-middle"><?php echo $nomeCl;?></td>
                                        <td class="align-middle"><?php echo $emailCl;?></td>
                                        <td class="align-middle"><?php echo $cidadeCl;?></td>
                                        <td class="align-middle"><?php echo $foneCl;?></td>      
                                        <td class="align-middle">X</td>
                                    </tr>

                        <?php
                                    }
                                }else{
                                    echo "ERRO";
                                }
                            }catch(PDOException $erro){
                                echo "ERRO DE PDO (SELECT) = ".$erro->getMessage();
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <!-- Footer -->
    <?php include_once("../includes/footer.php");?>


    