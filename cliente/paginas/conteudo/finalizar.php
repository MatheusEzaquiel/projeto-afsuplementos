<?php
	session_start();

	

	echo "<pre>";
	var_dump($_SESSION['dados']);
	echo "</pre>";

	//Cliente exempli
	$cliente = 4;
	

	foreach($_SESSION['dados'] as $produtos){

		$conexao = new PDO('mysql:host=localhost;dbname=af_suplementos',"root", "thaina");

		//$insert = $conexao->prepare("INSERT INTO tb_pedido () VALUES(NULL, ?, ?, ?,?, ?)");
		$insert = $conexao->prepare("INSERT INTO tb_pedido (fk_cliente_pedido, fk_produto_pedido, quantidade_produto, preco_produto, total_pedido) VALUES(:clientePed, :prodPed, :qtdProd, :precoProd, :totalPed)");

		$insert->bindParam(":clientePed", $cliente);
		$insert->bindParam(":prodPed", $produtos['id_produto']);
		$insert->bindParam(":qtdProd", $produtos['quantidade']);
		$insert->bindParam(":precoProd", $produtos['preco']);
		$insert->bindParam(":totalPed", $produtos['total']);
		$insert->execute();

	}

	

	if($insert->rowCount() > 0){
			echo "Pedido finalizado";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?pagina=carrinho"/>';
	}

	$_SESSION['itens'] = array();

?>