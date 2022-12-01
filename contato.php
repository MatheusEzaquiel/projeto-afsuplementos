
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
                    </div>
                    <div class="navbar-item d-block d-lg-none d-flex justify-content-between">
                        <a href="index.php" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
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
                        <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Entrar <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                            <a href="index-login.php" class="dropdown-item" style="color:#F9F6F6;">Fazer login</a>
                            <a href="cadastro-cliente.php" class="dropdown-item" style="color:#F9F6F6;">Cadastrar-se</a>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

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
                                <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                                    <a href="home.php?pagina=perfil" class="dropdown-item" style="color:#F9F6F6;">Sua conta</a>
                                    <a href="?sair" class="dropdown-item" style="color:#F9F6F6;">Sair</a>
                                </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header End -->






    <script>
        $('input[name="mobile-number"]').mask('(00) 0000 0000');
    </script>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <span class="breadcrumb-item active">Contato</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->








    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contate-nos</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                   

                    <form action="" method="post">
                        <div class="control-group">
                            <input type="tel" class="form-control" id="name" name="nome" placeholder="Seu Nome"
                                required="required" data-validation-required-message="Por favor insira seu nome" />
                            <p class="help-block text-danger"></p>
                        </div>
                       
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" name="mensagem" placeholder="Mensagem"
                                required="required"
                                data-validation-required-message="Por favor insira sua mensagem"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                           
                            <button class="btn py-2 px-4" style="background-color:#DF0805;color:#f9f6f6;border-radius:3px;" type="submit" id="sendMessageButton" name="btnEnviarMensagem">
                            Enviar Mensagem
                            </button>
                            <!-- https://api.whatsapp.com/send?phone=5585987338264&text=teste%20amigao -->
                        </div>
                    </form>

                    <?php 
                        if(isset($_POST['btnEnviarMensagem'])){

                            //telefone AFsuplementos 
                            $telefoneAF = 5585992589768;

                            $nome = $_POST['nome'];
                            $mensagem = $_POST['mensagem'];
            

                            //link de envio ao Whatsapp - início
                            echo '<script> window.location.href = "https://api.whatsapp.com/send?phone=';
                            echo $telefoneAF.'&text===== MENSAGEM DE CONTATO  ===';

                            echo '%0ACliente: '.$nome;
                            echo '%0A '.$mensagem;

                        //link de envio ao Whatsapp - início
                        echo '" </script>';
                        }
                    ?>
                </div>
            </div>

            <div class="col-lg-5 mb-5">

                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.227486446334!2d-38.4777393851287!3d-4.175632446779501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b8b9ed0a2bffff%3A0x3e632462d2dc6bc1!2sBIO%20-%20CROSS%20%7C%20T.%20FUNCIONAL!5e0!3m2!1spt-BR!2sbr!4v1665509419496!5m2!1spt-BR!2sbr"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-3" style="color:#DF0805;"></i>Rua Maria Queiroz 107 - Buriti</p>
                    <p class="mb-2"><i class="fa fa-envelope mr-3" style="color:#DF0805;"></i>afsuplementosemodafitness@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt mr-3" style="color:#DF0805;"></i>+55 85 99108-5837</p>
                </div>

            </div>

        </div>
    </div>
    <!-- Contact End -->

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
                            <a class="text-secondary mb-2" href="index-login.php"><i class="fa fa-angle-right mr-2"></i>Login</a>
                            <a class="text-secondary mb-2" href="cadastro-cliente.php"><i class="fa fa-angle-right mr-2"></i>Cadastro</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-uppercase mt-4 mb-3" style="color: #F9F6F6;">Nossos contatos</h6>
                        <div class="d-flex">
                            <a class="btn btn-square" style="background-color: #DF0805;border: solid 1px #DF0805;color: #F9F6F6;" href="https://www.instagram.com/af_suplementos_/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square ml-3" style="background-color: #DF0805;border: solid 1px #DF0805; color: #F9F6F6;" href="https://api.whatsapp.com/send?phone=5585987338264&text=Olá!%20venho%20diretamento%20do%20site
                            ">
                                <i class="fab fa-whatsapp"></i>
                            </a>
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
<!-- Footer End -->
