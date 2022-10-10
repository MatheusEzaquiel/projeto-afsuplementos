<?php
include('../../../config/conexao.php');

if(isset($_GET["delP"])){
	$id = $_GET["delP"];
	
	$delete = "DELETE FROM tb_carrinho WHERE id_pedido=:id";

	try{

		$result = $conect->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		//Retorno dinâmico a página de relatório
		$contar = $result->rowCount();

		if($contar > 0){
			header("Location: ../home.php?pagina=carrinho");
		}else{
			echo "<script>
					setTimeout(function() {
						window.location.replace('http://localhost/af-suplementos/cliente/paginas/home.php?pagina=index');
					}, 1000)
				</script>";
		}
	}catch(PDOException $erro){
        echo "<strong>ERRO DE DELETE: </strong>".$erro->getMessage();
    }
    
}

?>