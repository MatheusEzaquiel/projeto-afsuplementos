<?php
    include_once("conteudo/sair.php");
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
            case $pagina == 'compra':
                include_once("conteudo/compra.php");
                break;             
            case $pagina == 'cliente';
                    include_once("conteudo/cliente.php");
                break;
            case $pagina == 'detalhes':
                    include_once("conteudo/detalhes.php");
                break;
            case $pagina == 'shop': //antigo shoppreco
                    include_once("conteudo/shop.php");
                break;
            case $pagina == 'shopnovidade':
                    include_once("conteudo/shopnovidade.php");
                break;
            case $pagina == 'promocao':
                include_once("conteudo/promocao.php");
            break;
            case $pagina == 'contato':
                    include_once("conteudo/contato.php");
                break;
            case $pagina == 'sair':
                    include_once("conteudo/sair.php");
            case $pagina == 'remover':
                include_once("conteudo/remover.php");
                break;
            case $pagina == 'finalizar':
                include_once("conteudo/finalizar.php");
                break;

            //Informações do pedido em texto (só para teste, deletar esse case)
            case $pagina == 'pedidotxt':
                include_once("conteudo/pedido-txt.php");
                break;

                
            default:
                include_once("conteudo/index.php");
                break;
        }   
    }else{
        include_once("conteudo/index.php");
    }

    include_once("../includes/footer.php");
?>