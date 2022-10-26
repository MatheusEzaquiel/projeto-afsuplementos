<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Estoque | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
        <div class="row bg-secondary py-1 px-xl-5">
            
            <div class="col-lg-6 text-center text-lg-right">
                
                
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5 d-none d-lg-flex" style="background-color: #000000;">
            <div class="col-lg-6">
                <a href="cliente/paginas/home.php?pagina=index" class="text-decoration-none">
                    <span class="h1 text-uppercase px-2" style="background-color: #000000;color:#DF0805;">AF</span>
                    <span class="h1 text-uppercase px-2 ml-n1" style="background-color: #DF0805;color:#000000;">Suplementos</span>
                </a>
            </div>
           
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-30">
        <div class="row px-xl-5" style="background-color: #000000;">
           
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0" style="background-color: #000000;">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">AF</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Suplementos</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="login-cliente.php" class="nav-item nav-link">Login</a>
                            <a href="cadastro-cliente.php" class="nav-item nav-link">Cadastro</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
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
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cadastro de Usuário</span></h5>
                <div class="bg-light p-30 mb-5">
                    <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Nome</label>
                                    <input name="nome" class="form-control" type="text" placeholder="Insira seu nome">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>E-mail</label>
                                    <input name="email" class="form-control" type="email" placeholder="exemplo@email.com">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Número de telefone</label>
                                    <input name="telefone" class="form-control" type="text" placeholder="(00)0 0000-0000">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Endereço</label>
                                    <input name="endereco" class="form-control" type="text" placeholder="Casa Nº 0  Rua X">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Cidade</label>
                                    <select name="cidade" class="custom-select" required>
                                    <option value="none" >Selecionar</option>
                                        <option value="chorozinho">Chorozinho</option>
                                        <option value="horizonte" >Horizonte</option>
                                        <option value="pacajus" >Pacajus</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="foto">Foto de Usuário</label>
                                    <br>
                                    <input name="foto" type="file" id="exampleInputFile" style="width:8.5em;">
                                    <!--<label class="lbl" for="foto">Envie seu arquivo</label>-->
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Senha</label>
                                <input name="senha" class="form-control" type="password" placeholder="Inserir senha">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Confirme a senha</label>
                                    <input class="form-control" name="confsenha" type="password" placeholder="Confirmar senha">
                                </div>                 
                            </div>
                            <div class="row align-items-center py-4 px-xl-5 d-none d-lg-flex form-group">
                        <button name="btnRegistro" type="sumbit" class="btn btn-block font-weight-bold py-3" style="background-color:#DF0805;color:#f9f6f6;">Efetuar Cadastro</button>
                    </div>
                        </form>
                        <?php
                  include_once('config/conexao.php');
                  if(isset($_POST['btnRegistro'])){
                      $nome = $_POST['nome'];
                      $email = $_POST['email'];
                      $senha = base64_encode($_POST['senha']);
                      $confsenha = base64_encode($_POST['confsenha']);
                      $formatP = array("png","jpg","jpeg","JPG","gif");
                      $cidade = $_POST['cidade'];
                      $endereco = $_POST['endereco'];
                      $telefone = $_POST['telefone'];
                      

                      $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

                      if(in_array($extensao, $formatP)){
                          $pasta = "imgs/user/";
                          $temporario = $_FILES['foto']['tmp_name'];
                          $novoNome = uniqid().".$extensao";
                          if(move_uploaded_file($temporario, $pasta.$novoNome) && $senha == $confsenha){
                              $cadastro = "INSERT INTO tb_cliente (nome_cliente, email_cliente, senha_cliente, foto_cliente,cidade_cliente,endereco_cliente,telefone_cliente) VALUES (:nome,:email,:senha,:foto,:cidade,:endereco,:telefone)";
                      try{
                        $result = $conect->prepare($cadastro);
                        $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                        $result->bindParam(':email',$email,PDO::PARAM_STR);
                        $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                        $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                        $result->bindParam(':cidade',$cidade,PDO::PARAM_STR);
                        $result->bindParam(':endereco',$endereco,PDO::PARAM_STR);
                        $result->bindParam(':telefone',$telefone,PDO::PARAM_STR);
                        $result->execute();

                        $contar = $result->rowCount();
                        if($contar > 0){
                          echo '<div class="container">
                                    <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> OK!</h5>
                                    Cliente cadastrado com sucesso 
                                  </div>
                                </div>';
                                echo "<script>
                                            setTimeout(function() {
                                                window.location.replace('http://localhost/af-suplementos/login-cliente.php');
                                            }, 1000)
                                        </script>";
                        }else{
                          echo '<div class="container">
                                    <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                    Cliente não cadastrado
                                  </div>
                                </div>';
                                echo "<script>
                                            setTimeout(function() {
                                                window.location.replace('http://localhost/af-suplementos/cadastro-cliente.php');
                                            }, 1000)
                                        </script>";
                        }
                      }catch(PDOException $erro){
                        echo "<strong>ERRO DE CADASTRO PDO = </strong>".$erro->getMessage();
                      }
                          }else{
                            echo '<div class="container">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                Confira novamente seu cadastro
                            </div>
                        </div>';
                        echo "<script>
                        setTimeout(function() {
                            window.location.replace('http://localhost/af-suplementos/cadastro-cliente.php');
                        }, 1000)
                    </script>";
                          }

                      }else{
                        echo'<div class="container">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                    Formato inválido
                                </div>
                            </div>';
                            echo "<script>
                                            setTimeout(function() {
                                                window.location.replace('http://localhost/af-suplementos/cadastro-cliente.php');
                                            }, 1000)
                                        </script>";
                      } 
                  }
              ?>
                        
                    
                    <div class="mb-md-0 justify-content-center d-none d-lg-flex form-group">
                        <div class="custom-control custom-checkbox">
                            <br>
                            <strong><a class="link" href="index.php"><p>Voltar ao login</p></a></strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM - Formulário de Login-->
            <div class="col-lg-3">
                <!--Coluna direita-->
            </div>
        </div>
    </div>
    <!-- Checkout End -->

     <!-- Footer Start -->
     <div class="container-fluid text-secondary mt-5 pt-5" style="background-color: #000000;">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-6 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-uppercase mb-4" style="color:#F9F6F6;">Sobre a página</h5>
                <p class="mb-4" style="color: #F9F6F6;">Este é um sistema de gerenciamento de estoque personalizado para a adesão, edição e remoção de produtos.</p>
                <p class="mb-2" style="color: #F9F6F6;"><i class="fa fa-map-marker-alt mr-3" style="color:#DF0805;"></i>Rua Maria Queiroz 107 - Buriti</p>
                <p class="mb-2" style="color: #F9F6F6;"><i class="fa fa-envelope  mr-3" style="color: #DF0805;"></i>afsuplementosemodafitness@gmail.com</p>
                <p class="mb-0" style="color: #F9F6F6;"><i class="fa fa-phone-alt  mr-3" style="color: #DF0805;"></i>+55 85 99108-5837</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-8 mb-5">
                       <!--Coluna do centro-->
                        
                    </div>

                    <div class="col-md-4 mb-5">
                        <h6 class="text-uppercase mt-4 mb-3" style="color: #F9F6F6;">Nossos contatos</h6>
                        <div class="d-flex">
                            <a class="btn btn-square" style="background-color: #DF0805;border: solid 1px #DF0805; color: #F9F6F6;" href="https://www.instagram.com/af_suplementos_/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square ml-3" style="background-color: #DF0805;border: solid 1px #DF0805; color: #F9F6F6;" href="https://wa.me/5585991085837"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Último bloco - Direitos reservados-->
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>
