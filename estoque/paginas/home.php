<?php
    include_once("../includes/header.php");

    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
        switch ($pagina) {
            case $pagina == 'produtos':
                    include_once("conteudo/lista-produtos.php");
                break;
            case $pagina == 'produtos-desativados':
                    include_once("conteudo/produtos-inativados.php");
                break;
            case $pagina == 'cadastro-produtos':
                    include_once("conteudo/cadastro-produtos.php");
                break;
            case $pagina == 'conteudo/info-pedidos.php':
                    include_once("conteudo/info-pedidos.php");
                break;
            case $pagina == 'conteudo/promocoes.php':
                    include_once("conteudo/promocoes.php");
            default:
                include_once("conteudo/lista-produtos.php");
                break;
        }   
    }

    /*
    //conteúdo
    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
        if($pagina == 'produtos'){
            include_once("conteudo/lista-produtos.php");
        }else if($pagina == 'produtos-desativados'){
            include_once("conteudo/produtos-inativados.php");
        }else if($pagina == 'cadastro-produtos'){
            include_once("conteudo/cadastro-produtos.php");
        }else if($pagina == 'pedidos'){
            include_once("conteudo/info-pedidos.php");
        }else if($pagina == 'promocoes'){
            include_once("conteudo/promocoes.php");
        }else if($pagina == 'clientes'){
            include_once("conteudo/info-clientes.php");
        }
    }else{
        include_once("conteudo/lista-produtos.php");
    }
    */

    include_once("../includes/footer.php");
?>