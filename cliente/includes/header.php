<?php
    
    //Caso o cliente não esteja logado, redirecione
    ob_start();
    @session_start(); 

    if(!isset($_SESSION['loginUser']) && (!isset($_SESSION['senhaUser']))){

        /*
            echo"<script>
            setTimeout(
                function() {
                    window.location.replace('../../home.php?acao=negado');
                }, 1000)
            </script>";
        */

        header("Location: ../../home.php?acao=negado");
            exit;


    }
 

    include_once('sair.php');



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
    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        </div>
    </div>
    <!-- Topbar End -->

    
    <?php

    include_once("../../config/conexao.php");

    $emailLogado = $_SESSION['loginUser'];
    $senhaLogado = base64_encode($_SESSION['senhaUser']);

  


    
    $selectCliente = "SELECT * FROM tb_cliente WHERE email_cliente = :emailClienteLogado AND senha_cliente = :senhaClienteLogado";
    
    try {
        $resultCliente = $conect->prepare($selectCliente);
        $resultCliente->bindParam(":emailClienteLogado",$emailLogado,PDO::PARAM_STR);
        $resultCliente->bindParam(":senhaClienteLogado",$senhaLogado,PDO::PARAM_STR);
        $resultCliente->execute();

        $contCliente = $resultCliente->rowCount();
        

        if($contCliente > 0){
            while($clienteLogado = $resultCliente->FETCH(PDO::FETCH_OBJ)){

                $idCliente = $clienteLogado->id_cliente;
                $nomeCliente = $clienteLogado->nome_cliente;
                $emailCliente = $clienteLogado->email_cliente;
                $senhaCliente = $clienteLogado->senha_cliente;
                $foneCliente = $clienteLogado->telefone_cliente;




            }

           

        }else{
            echo "Não há dados com esse id!";
        }

    } catch (PDOException $erro) {
        echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
    }   
    
    ?>


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
                        <a href="home.php?pagina=index" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
                        <a href="home.php?pagina=shop" class="nav-item nav-link" style="color: #F9F6F6;">Catálogo</a>
                        <a href="home.php?pagina=contato" class="nav-item nav-link active" style="color: #F9F6F6;">Contato</a>
                    </div>
                    <div class="nav-item d-block d-lg-none pl-5">
                        <a href="home.php?pagina=carrinho" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart" style="color:#DF0805;"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown text-decoration-none d-block d-lg-none">
                        <a href="#" class="nav-link pl-5" style="color:#F9F6F6;" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu rounded-0 border-0 m-0" style="background-color:#DF0805;">
                            <a href="../../login-cliente.php" class="dropdown-item" style="color:#F9F6F6;">Fazer login</a>
                            <a href="../paginas/conteudo/home.php?pagina=sair" class="dropdown-item" style="color:#F9F6F6;">Sair</a>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-3">
                            <a href="home.php?pagina=index" class="nav-item nav-link active" style="color: #F9F6F6;">Home</a>
                            <a href="home.php?pagina=shop" class="nav-item nav-link" style="color: #F9F6F6;">Catálogo</a>
                            <a href="home.php?pagina=contato" class="nav-item nav-link active" style="color: #F9F6F6;">Contato</a>
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
    