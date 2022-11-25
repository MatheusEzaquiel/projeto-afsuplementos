
    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Perfil usuário-->

            <div class="col-lg-3"></div>

            
            <div class="col-lg-6">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Atualizar informações de Perfil</span></h5>
                    
                    <div class="bg-light p-30 mb-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                    
                            <div class="col-md-6 form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" value="<?php echo  $nomeCliente;?>" name="nome-cliente">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" value="<?php echo $emailCliente;?>" name="email-cliente">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Senha</label>
                                <input class="form-control" type="text" value="<?php echo base64_decode($senhaCliente);?>" name="senha-cliente">
                            </div>


                            <div class="col-md-6 form-group">
                                <label>Telefone</label>
                                <input class="form-control" type="text" value="<?php echo $foneCliente;?>" name="telefone-cliente">
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <button type="submit" name="btnUpdateCliente" class="btn btn-block font-weight-bold py-3 " style="background-color:#DF0805;color:#f9f6f6;">Atualizar</button>
                            </div>
                            
                        </div>
                    </form>
<?php

    //update
    include_once("../../config/conexao.php");

    if(isset($_POST["btnUpdateCliente"])){
        $nomeC = $_POST["nome-cliente"];
        $emailC = $_POST["email-cliente"];
        $senhaC = base64_encode($_POST["senha-cliente"]);
        $foneC = $_POST["telefone-cliente"];

        
        /*
        //Update de img
        if(!empty($_FILES['foto-produto']['name'])){
        
            $extensaoImg = pathinfo($_FILES['foto-produto']['name'], PATHINFO_EXTENSION); //Remove a extensão da img
            $tipoExtensao = array("jpg","jpeg","JPEG","png","gif");

            if(in_array($extensaoImg, $tipoExtensao)){
                $pasta = "../../imgs/produtos/";
                $temporarioImg = $_FILES['foto-produto']['tmp_name'];
                $novoNomeImg =  uniqid().".$extensaoImg";

                if(move_uploaded_file($temporarioImg, $pasta.$novoNomeImg)){
                }else{
                    echo "Erro! Não foi possível fazer o upload da imagem";
                }

            }else{
                echo "Formato de imagem não inválido! tente outra imagem";
            }
        }else{
            $novoNomeImg = $fotoProduto;
        }
        */

        $updateClienteLogado = "UPDATE tb_cliente SET nome_cliente = :nomeClienteUpdt, email_cliente = :emailClienteUpdt, senha_cliente = :senhaClienteUpdt, telefone_cliente = :foneClienteUpdt WHERE id_cliente = :idClienteUpdt";
        
        try{

            $resultUpdate = $conect->prepare($updateClienteLogado);
            $resultUpdate->bindParam(':idClienteUpdt',$idCliente,PDO::PARAM_INT);
            $resultUpdate->bindParam(':nomeClienteUpdt',$nomeC,PDO::PARAM_STR);
            $resultUpdate->bindParam(':emailClienteUpdt',$emailC,PDO::PARAM_STR);
            $resultUpdate->bindParam(':senhaClienteUpdt',$senhaC,PDO::PARAM_STR);
            $resultUpdate->bindParam(':foneClienteUpdt',$foneC,PDO::PARAM_STR);
            $resultUpdate->execute();


            if($resultUpdate->rowCount() > 0){

                echo "<div class='alert alert-success' role='alert'>
                        Informações atualizadas com sucesso!
                    </div>";
                
                    header("Location: ?sair");
            }

        }catch(PDOException $erro){
            echo "ERRO DE PDO (UPDATE)".$erro->getMessage();
        }

        
            
    }
    

    
?>
                </div>
            </div>
            <!-- FIM - Perfil usuário-->

            <div class="col-lg-3"></div>
        </div>
    </div>
    <!-- Checkout End -->


    <div style="width:100%; height:140px;"></div>

