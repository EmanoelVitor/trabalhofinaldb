<?php

require_once 'bdconnect.php';

if($_POST){
	$nome_jogo = $_POST['nome_jogo'];
	$preco_jogo = $_POST['preco_jogo'];
    $categoria = $_POST['categoria'];
    $fk_cliente_id_cliente = $_POST['fk_cliente_id_cliente'];
	
	$sql = "INSERT INTO cliente (nome_jogo,preco_jogo, categoria, fk_cliente_id_cliente) VALUES ('$nome_jogo', '$preco_jogo', '$categoria', '$fk_cliente_id_cliente')";

	if($connect->query($sql) === TRUE){
		echo "<p> Novo registro inserido</p>";
		
	}
	else {
		echo "Erro " . $sql . '  ' .$connect->connect_error; 
	}

	$connect->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove</title>
</head>



<body>
	<a href='../index.html'><button type='button'>Voltar</button></a>
</body>
</html>