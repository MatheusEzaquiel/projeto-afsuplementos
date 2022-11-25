
<?php
/*

Filtro tipo do produto
0 -> Todos
1 -> Em pó
2 -> Bebidas
3 -> Pílulas
4 -> Barrinhas

*/

 #Filtro de produtos
 if(isset($_GET["filtro"])){

    $filtro = $_GET["filtro"];

    if($filtro == 1){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY id_produto DESC";
    }else if($filtro == 2){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY preco_venda_produto ASC";
    }else if($filtro == 3){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND promocao_produto != 0";
    }else{
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1";
    }

}

#Filtro por tipo de produto
if(isset($_GET["TipoProduto"])){

    $tipoP = $_GET["TipoProduto"];

    if($tipoP == 0){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY id_produto DESC";

    }else if($tipoP == 1){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND tipo_produto = 1";

    }else if($tipoP == 2){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND tipo_produto = 2";
    }
    else if($tipoP == 3){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND tipo_produto = 3";

    }else if($tipoP == 4){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND tipo_produto = 4";
    }else{
        echo "Tipo de produto inexistente";
    }

}

#Filtro por preço
if(isset($_GET["filtroPreco"])){

    $filtroPreco = $_GET["filtroPreco"];

    if($filtroPreco == 0){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY id_produto DESC";

    }else if($filtroPreco == 1){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto < 50 ORDER BY preco_venda_produto DESC";

    }else if($filtroPreco == 2){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto < 100  AND preco_venda_produto >= 50 ORDER BY preco_venda_produto DESC";

    }
    else if($filtroPreco == 3){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto < 200  AND preco_venda_produto >= 100 ORDER BY preco_venda_produto DESC";

    }else if($filtroPreco == 4){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto > 200 ORDER BY preco_venda_produto DESC";
    }else{
        echo "Tipo de produto inexistente";
    }

}
#Filtro por preço
if(isset($_GET["filtroPreco"])){

    $filtroPreco = $_GET["filtroPreco"];

    if($filtroPreco == 0){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 ORDER BY id_produto DESC";

    }else if($filtroPreco == 1){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto < 50 ORDER BY preco_venda_produto DESC";

    }else if($filtroPreco == 2){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto < 100  AND preco_venda_produto >= 50 ORDER BY preco_venda_produto DESC";

    }
    else if($filtroPreco == 3){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto < 200  AND preco_venda_produto >= 100 ORDER BY preco_venda_produto DESC";

    }else if($filtroPreco == 4){
        $selectProdutos = "SELECT * FROM tb_produto WHERE disponibilidade_produto = 1 AND preco_venda_produto > 200 ORDER BY preco_venda_produto DESC";
    }else{
        echo "Tipo de produto inexistente";
    }

}


?>