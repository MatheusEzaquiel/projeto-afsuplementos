<?php
    ob_start();
    session_start();
    if(isset($_SESSION['loginUser']) && (isset($_SESSION['senhaUser']))){
        echo"<script>
            setTimeout(
                function() {
                    window.location.replace('cliente/paginas/home.php?pagina=index');
                }, 2000)
            </script>";
            exit;
    }
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <title>Admin | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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
    <!-- Login do google -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-1 px-xl-5" style="background-color:#000000;">
            
            <div class="col-lg-6 text-center text-lg-right">
                
                
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5 d-none d-lg-flex" style="background-color: #000000;">
            <div class="col-lg-6">
                <a href="estoque/paginas/index.php?pagina=produtos" class="text-decoration-none">
                    <span class="h1 text-uppercase px-2" style="background-color: #000000;color:#DF0805;">AF</span>
                    <span class="h1 text-uppercase px-2 ml-n1" style="background-color: #DF0805;color:#000000;">Suplementos</span>
                </a>
            </div>
           
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5" style="background-color: #000000;">
           
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0" style="background-color:#000000;">
                    <a href="#" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase px-2" style="background-color:#000000;color:3DF0805;">AF</span>
                        <span class="h1 text-uppercase px-2 ml-n1" style="background-color:#DF0805;color:#000000;">Suplementos</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        
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
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Seção de Login</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <form action="" method="post" enctype="multipart/form-data">
                                <img src="img/avatar/avatar-man-3.png" width="100px" class="pb-3" style="box-sizing:border-box;margin-left:45%;height:6em;width:5em;">
                                <div class="col-md-7 form-group input-group">
                                    <label style="padding-right:0.8em;">Usuário</label>  
                                    <input name="usuario" class="form-control" type="text" placeholder="Inserir usuário">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 form-group input-group">
                                    <label style="padding-right:1.5em;">Senha</label>
                                    <input name="senha" class="form-control" type="password" placeholder="Inserir senha">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <button name="btnLogin" value="Entrar" type="submit" class="btn btn-block font-weight-bold py-3" style="margin-left: 9rem;background-color:#DF0805;color:#f9f6f6;border-radius:3px;">Entrar</button>
                                </div>
                            </form>
                            <?php
                             include_once('config/conexao.php');
                             if(isset($_GET['acao'])){
                                $acao = $_GET['acao'];
                                if($acao=='negado'){
                                    echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>Erro ao acessar o sistema!</strong> Efetue o login.</div>';
                                }else if($acao == 'sair'){
                                    echo '<div class="alert alert-warning">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>Você saiu da agenda eletrônica :(</strong> Esperamos sua volta!.</div>';
                                }
                             }
                             if(isset($_POST['btnLogin'])){
                                $usuario = filter_input(INPUT_POST, 'usuario', FILTER_DEFAULT);
                                $senha = base64_encode(filter_input(INPUT_POST, 'senha', FILTER_DEFAULT));
                                $select = "SELECT * FROM tb_admin WHERE nome_admin=:nomeAdmin AND senha_admin=:senhaAdmin";
                                try{
                                    $resultLogin = $conect->prepare($select);
                                    $resultLogin->bindParam(':nomeAdmin',$usuario, PDO::PARAM_STR);
                                    $resultLogin->bindParam(':senhaAdmin',$senha, PDO::PARAM_STR);
                                    $resultLogin->execute();

                                    $verificar = $resultLogin->rowCount();
                                    if($verificar>0){
                                        $usuario = $_POST['usuario'];
                                        $senha = $_POST['senha'];
                                        //CRIAR SESSÃO
                                        $_SESSION['nomeAdmin'] = $usuario;
                                        $_SESSION['senhaAdmin'] = $senha;
                                        echo'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">x</button><strong>Logado com sucesso!</strong>Você será redirecionado para a loja!</div>';
                                        echo"<script>
                                        setTimeout(
                                            function() {
                                            window.location.replace('estoque/paginas/index.php?pagina=produtos');
                                            }, 2000)
                                        </script>";
                                    }else{
                                        echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>ERRO!</strong> Login ou senha incorretos, digite outro login.</div>';
                                    }
                                    
                                    }catch(PDOException $e){
                                        echo "ERRO DE LOGIN DO PDO :".$e ->getMessage();

                                    }

                                }
                            ?>
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
            <div class="col-lg-6 col-md-12 mb-5 pr-3 pr-xl-5" style="color: #F9F6F6;">
                <h5 class="text-uppercase mb-4" style="color: #F9F6F6;">Sobre a página</h5>
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
        </div>
    </div>
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="
    
    lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>