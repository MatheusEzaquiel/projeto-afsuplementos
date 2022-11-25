<?php
    include_once("../includes/header.php");

    try{

        if(isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
            switch ($pagina) {

                case $pagina == 'home':
                    include_once("conteudo/home.php");
                break;

                case $pagina == 'produtos':
                        include_once("conteudo/lista-produtos.php");
                    break;

                case $pagina == 'produtos-desativados':
                        include_once("conteudo/produtos-inativados.php");
                    break;

                case $pagina == 'cadastro-produtos':
                        include_once("conteudo/cadastro-produtos.php");
                    break;

                case $pagina == 'edicaoProduto':
                    include_once("conteudo/edicao-produto.php");
                break;

                case $pagina == 'pedidos':
                    include_once("conteudo/info-pedidos.php");
                break;


                case $pagina == 'perfil':
                    include_once("conteudo/perfil-admin.php");
                break;
            
            
                /*
                
                case $pagina == 'promocoes':
                    include_once("conteudo/promocoes.php");
                    break;
                
                */
                
                default:
                    include_once("conteudo/lista-produtos.php");
                    break;
            }   
        }else{
            include_once("conteudo/lista-produtos.php"); 
        }
    } catch (PDOException $erro) {
        echo "ERRO DE PDO SELECT -> ".$erro->getMessage();
    }

    include_once("../includes/footer.php");
?>