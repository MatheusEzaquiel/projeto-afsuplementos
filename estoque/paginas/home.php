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
    }else{
        include_once("conteudo/lista-produtos.php"); 
    }


    include_once("../includes/footer.php");
?>