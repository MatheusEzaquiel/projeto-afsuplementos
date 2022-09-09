<?php
ob_start();
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
    header("Location:/af-suplementos/index.php");
    exit;
}else{

}

?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <title>Estoque | Login</title>
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
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            
            <div class="col-lg-6 text-center text-lg-right">
                
                
            </div>
        </div>
        <div class="row align-items-center bg-dark py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-6">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">AF</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Suplementos</span>
                </a>
            </div>
           
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
           
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0" style="background-color:#000000;">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase px-2" style="background-color:#000000;color:3DF0805;">AF</span>
                        <span class="h1 text-uppercase px-2 ml-n1" style="background-color:#DF0805;color:#000000;">Suplementos</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
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
                            <form action="" method="post">
                                    <img src="/img/cat-1.jpg" width="100px" style="margin-left: 50%;">
                                <div class="col-md-6 form-group input-group">
                                    <label>E-mail</label> 
                                    <input name="email" class="form-control" type="email" placeholder="exemplo@email.com">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group input-group">
                                    <label>Senha</label>
                                <input name="senha" class="form-control" type="password" placeholder="Inserir senha">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newaccount">
                                    <label class="custom-control-label" for="newaccount">Lembre-se de mim</label> 
                                </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <button name="btnLogin" type="submit" class="btn btn-block font-weight-bold py-3" style="margin-left: 9rem;background-color:#DF0805;color:#f9f6f6;">Entrar</button>
                                </div>
                            </form>
                            <?php
                            include_once('config/conexao.php');
                            if(isset($_POST['btnLogin'])){
                                // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
                                if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
                                    echo "<script>
                                    setTimeout(function() {
                                        window.location.replace('http://localhost/af-suplementos/login-cliente.php');
                                    }, 1000)
                                </script>"; exit;   
                                }

                                $email = $_POST['email'];
                                $senha = $_POST['senha'];
                                
                                // Validação do usuário/senha digitados
                                $sql = "SELECT `id_cliente`, `nome_cliente`, `nivel_cliente` FROM `tb_cliente` WHERE (`email_cliente` = '".$email ."') AND (`senha_cliente` = '". base64_encode($senha) ."') AND (`ativo_cliente` = 1) LIMIT 1";
                                $query = mysql_query($sql);
                                if (mysql_num_rows($query) != 1) {
                                    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
                                    echo "Login inválido!"; exit;
                                } else {
                                    // Salva os dados encontados na variável $resultado
                                    $resultado = mysql_fetch_assoc($query);
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
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-6 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Sobre a página</h5>
                <p class="mb-4">Este é um sistema de gerenciamento de estoque personalizado para a adesão, edição e remoção de produtos.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Rua XXX, Pacajus-CE, Brasil</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-8 mb-5">
                       <!--Coluna do centro-->
                        
                    </div>

                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Siga-nos em nossas redes sociais</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Último bloco - Direitos reservados-->
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. Todos os direitos reservado a AF | Suplementos.
                </p>
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