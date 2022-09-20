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
<<<<<<< HEAD
            case $pagina == 'compra':
=======
            case $pagina == 'cliente';
                    include_once("conteudo/cliente.php");
                break;
            case $pagina == 'compra.php':
>>>>>>> 4fcdd8dc976e755674aa10f07c1a21364b8edb2a
                    include_once("conteudo/compra.php");
                    break;
            case $pagina == 'detalhes':
                    include_once("conteudo/detalhes.php");
            default:
                include_once("conteudo/index.php");
                break;
        }   
    }

    include_once("../includes/footer.php");
?>