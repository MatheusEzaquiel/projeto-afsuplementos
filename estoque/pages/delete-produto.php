<?php
    include_once("../../config/conexao.php");

    if(isset($_GET['idProduto'])){
        $idProduto = $_GET['idProduto'];

        $delProduto = "DELETE FROM tb_produto WHERE id_produto = :idProdt";

        try{
            $resultDelP = $conect->prepare($delProduto);
            $resultDelP->bindValue(":idProdt",$idProduto, PDO::PARAM_INT);
            $resultDelP->execute();

            $contResult = $resultDelP->rowCount();
            if($contResult > 0){
                echo "Produto Deletado";
                header("Location: lista-produtos.php");
            }
        }catch(PDOException $erro){
            echo "Erro de PDO(DELETE) = ".$erro->getMessage();
        }
    }
    
    ?>