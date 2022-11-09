<style>
    
    h3{
        font-size: 10px;
    }
    .nota-pedidos{
        width: 155px;
        height: 150px;
        background-color: yellow;
        padding: 15px;
        margin: 5px;
    }
    .container-pedidos{
        display:flex;
    }
</style>

<h1>Informações sobre o pedido</h1>

<div class="container-pedidos">
<?php
    $todosPedidos= [];
    $idCliente = 4;

    include_once("../../config/conexao.php");

    $selectPedido = 
    "SELECT *
    FROM tb_pedido 
    INNER JOIN tb_cliente ON tb_pedido.fk_cliente_pedido = tb_cliente.id_cliente
    INNER JOIN tb_produto ON tb_pedido.fk_produto_pedido = tb_produto.id_produto
    WHERE tb_pedido.estado_pedido = 0 AND tb_cliente.id_cliente = :idCliente" ;
                            
                        
                            
    try {
        $resultSelPedido = $conect->prepare($selectPedido);
        $resultSelPedido->bindParam(':idCliente',$idCliente,PDO::PARAM_STR);
        $resultSelPedido->execute();
        $contSelect = $resultSelPedido->rowCount();

        if($contSelect > 0){
            while($pedido = $resultSelPedido->FETCH(PDO::FETCH_OBJ)){
                $idPedido = $pedido->id_pedido;
                $cliente = $pedido->nome_cliente;
                $produto = $pedido->nome_produto;
                $idProdutoPedido = $pedido->fk_produto_pedido;
                $qtdProduto = $pedido->quantidade_produto_pedido;
                $precoProduto = $pedido->preco_venda_produto;
                $totalPedido = $pedido->total_pedido;
                $dataPedido = $pedido->data_pedido;
                $estadoPedido = $pedido->estado_pedido;
                $qtdProdutoEstoque = $pedido->quantidade_produto;
                                    
?>

<div class="nota-pedidos">

<h3>Id do Pedido <?php echo $idPedido;?></h3>
<h3>Cliente:  <?php echo $cliente;?></h3>
<h3>Produto:  <?php echo $produto;?></h3>
<h3>Preço produto: R$<?php echo $precoProduto;?> x  <?php echo $qtdProduto;?></h3>
<h3>Subtotal: R$ <?php echo $totalPedido;?></h3>

</div>  





<?php    
                $pedidos = ["idPedido"=>$idPedido, "cliente"=>$cliente, "produto"=>$produto, "preco"=>$precoProduto, "quantidade"=>$qtdProduto, "subtotal"=>$totalPedido];
                //$todosPedidos = $pedidos;
                //print_r($pedidos);

                array_push($todosPedidos,$pedidos);
                
               

                /*
                    $variavel = 
                        array(
                            array1()
                            array2()
                            array3()
                            ...
                        )
                    )

                */



                

            }//Fim while

            /*
            echo '<pre>';
            print_r($todosPedidos);
            echo '</pre>';
            */

            

        }//Fim if contSelect
      
    } catch (PDOException $erro) {
        echo "ERRO DE PDO (SELECT) -> ".$erro->getMessage();
    }   


    $idCliente = 4;
    $telefone = 5585992902871;
    $telefone2 = 5585987338264;

    //Preço total dos pedidos
    $somaPedidos = "SELECT SUM(total_pedido) AS 'total' FROM tb_pedido WHERE fk_cliente_pedido = :idCliente AND estado_pedido = 0";
    $resultSoma = $conect->prepare($somaPedidos);
    $resultSoma->bindParam(':idCliente',$idCliente,PDO::PARAM_STR);
    $resultSoma->execute();

   
    if($resultSoma->rowCount() > 0){
        while($total = $resultSoma->FETCH()){
            $total['total'];


            echo "<h2>TOTAL A PAGAR: R$".$total['total']."</h2>";
      

   
            
            

          
            
?>


</div>


<a name="linkWhatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $telefone2?>&text==== INFORMAÇÕES DO PEDIDO ===

<?php 


for($i = 0; $i < count($todosPedidos); $i = $i + 1 ){
    echo '%0AID PEDIDO: '.$todosPedidos[$i]['idPedido'];
    echo '%0ACLIENTE: '.$todosPedidos[$i]['cliente'];
    echo '%0APRODUTO: '.$todosPedidos[$i]['produto'];
    echo '%0APRECO: '.$todosPedidos[$i]['preco'];
    echo '%0AQUANTIDADE: '.$todosPedidos[$i]['quantidade'];
    echo '%0ASUBTOTAL: '.$todosPedidos[$i]['subtotal'];
    echo '%0A';


}
echo '%0A TOTAL: R$'.$total['total'];

/*
echo
'%0A%0AID DO PEDIDO: '.$pedidos['idPedido'].
'%0ACLIENTE: '. $pedidos['cliente'].
'%0APRODUTO: '.$pedidos['produto'].
'%0APREÇO: R$'.$pedidos['preco'].
'%0AQTD: '.$pedidos['quantidade'].
'%0ASUBTOTAL: R$'.$pedidos['subtotal'].
'*/

            

?> 




"><button name="btnEnviarWhatsapp">CONFIRMAR PEDIDO</button></a>





<?php
  }
}

if(isset($_GET['btnEnviarWhatsapp'])){
    $pedidoCancelado = 50;
    $idPedido = 2;

    $updatePedido = "UPDATE tb_pedido SET estado_pedido=:estadoPed";
    $resultUpdatePedido = $conect->prepare($updatePedido);
    $resultUpdatePedido->bindParam(':estadoPed',$pedidoCancelado,PDO::PARAM_STR);
    $resultUpdatePedido->execute();
        
    //echo '<script> window.location.reload();</script>';
}




?>
