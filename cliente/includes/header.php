<?php
    /*
    ob_start();
    session_start();
    if(isset($_SESSION['loginUser']) && (!isset($_SESSION['senhaUser']))){
        echo"<script>
            setTimeout(
                function() {
                    window.location.replace('../paginas/conteudo/home.php?pagina=shop');
                }, 2000)
            </script>";
            exit;
    }
    include_once('../sair.php');
    */

session_start();

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
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/functions.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- CSS DO OUTRO SITE -->
    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
                    <!--
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">About</a>
                    <a class="text-body mr-3" href="">Contato</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Sign in</button>
                            <button class="dropdown-item" type="button">Sign up</button>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                lembre de colocar o png da logo
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
-->

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-30" style="background-color: #000000;">
        <div class="row px-xl-5"  style="height: 6em;">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between w-100" style="background-color:#DF0805;height: 100%;padding-left:2em;" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class=" m-0" style="color: #F9F6F6;"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                    <i class="fa fa-angle-down" style="color:#F9F6F6;"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="" class="nav-item nav-link">Em pó</a>
                        <a href="" class="nav-item nav-link">Bebidas</a>
                        <a href="" class="nav-item nav-link">Grão</a>
                        <a href="" class="nav-item nav-link">Pílulas</a>
                        <a href="" class="nav-item nav-link">Barrinhas</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9" style="height: 4em;">
                <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0" style="background-color: #000000;margin-top: 0.7em;margin-right: 3em;">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">AF</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1"> Suplementos</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-3">
                            <a href="index.php?pagina=index" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
                            <a href="index.php?pagina=shop" class="nav-item nav-link" style="color: #F9F6F6;">Catálogo</a>
                            <a href="index.php?pagina=contato" class="nav-item nav-link active" style="color: #F9F6F6;">Contato</a>
                            <div class="nav-item dropdown">
                                <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                                    <a href="index.php?pagina=carrinho" class="dropdown-item" style="color: #F9F6F6;">Shopping Cart</a>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-6 text-left" style="margin-left:4em;">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Pesquisar por produtos">
                                            <div class="input-group-append">
                                                <span class="input-group-text text-primary" style="background-color:#DF0805;border:0.3em solid #DF0805;">
                                                    <i class="fa fa-search" style="color:#f9f6f6;"></i>
                                                </span>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart" style="color:#DF0805;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="index.php?pagina=carrinho" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart" style="color:#DF0805;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a class="btn d-flex align-items-center justify-content-between w-100" style="background-color:#DF0805;height: 100%;" data-toggle="collapse" href="#sair-login" style="height: 65px; padding: 0 30px;">
                                <i class="fas fa-sign-out-alt" style="color:#F9F6F6;"></i>
                            </a>
                            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="sair-login" style="z-index: 999;">
                                <div class="navbar-nav w-25">
                                    <a href="../../login-cliente.php" class="nav-item nav-link">Fazer login</a>
                                    <a href="?sair" class="nav-item nav-link">Sair da conta</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    