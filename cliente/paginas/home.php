<?php
    include_once("../includes/header.php");

    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
        switch ($pagina) {
            case $pagina == 'index':
                    include_once("conteudo/index.php");
                break;
            case $pagina == 'shop': //catálogo
                    include_once("conteudo/shop.php");
                break;
            case $pagina == 'promocao':
                    include_once("conteudo/promocao.php");
                break;
            case $pagina == 'carrinho':
                    include_once("conteudo/carrinho.php");
                break;
            case $pagina == 'cliente';
                    include_once("conteudo/cliente.php");
                break;
            case $pagina == 'compra.php':
                    include_once("conteudo/compra.php");
            default:
                include_once("conteudo/index.php");
                break;
        }   
    }

    include_once("../includes/footer.php");
?>