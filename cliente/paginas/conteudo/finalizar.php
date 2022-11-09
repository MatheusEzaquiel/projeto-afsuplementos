<?php
	session_start();
	include_once("../../../config/conexao.php");
	

	//Verifica se há pedidos, se não, redireciona
	if($_SESSION['dados'] == []){
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?pagina=carrinho"/>';
	}else{
		

		//Cliente exemplo
		$cliente = 4;
		
		//Sessão que carrega os produtos pedidos
		foreach($_SESSION['dados'] as $produtos){

			$conexao = new PDO('mysql:host=localhost;dbname=af_suplementos',"root", "thaina");



			//Select da quantidade de produtos no estoque
			$idProduto = $produtos['id_produto'];

			echo $idProduto;
				
			$select = $conect->prepare("SELECT * FROM tb_produto WHERE id_produto=?");
			$select->bindParam(1,$idProduto);
			$select->execute();
			$produtoEstoque = $select->fetchAll();

			echo " Quantidade deste pedido: ".$produtos['quantidade'];



			//Verificação de quantidade de produtos no estoque com o pedido

			$novaQtd = $produtoEstoque[0]["quantidade_produto"] - $produtos['quantidade'];
			$qtdEstoque = $produtoEstoque[0]["quantidade_produto"];


			if($novaQtd < 0){
				echo "<h1>ERRO!</h1>
					<h2>O número de pedidos ultrapassou a quantidade disponível em estoque</h2>";
				
				echo "<h2>Quantidade disponível: $qtdEstoque</h2>";
					
			}else{
				
				echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?pagina=pedidotxt"/>';

				echo "antes: ".$produtos['id_produto'];

				//Cadastro de pedidos
				$insert = $conexao->prepare("INSERT INTO tb_pedido (fk_cliente_pedido, fk_produto_pedido, quantidade_produto_pedido, preco_produto, total_pedido) VALUES(:clientePed, :prodPed, :qtdProd, :precoProd, :totalPed)");

				$insert->bindParam(":clientePed", $cliente);
				$insert->bindParam(":prodPed", $produtos['id_produto']);
				$insert->bindParam(":qtdProd", $produtos['quantidade']);
				$insert->bindParam(":precoProd", $produtos['preco']);
				$insert->bindParam(":totalPed", $produtos['total']);
				$insert->execute();

				$_SESSION['dados'] = [];
				
			
			}





			
		}

		

		

		$_SESSION['itens'] = array();
	}

?>