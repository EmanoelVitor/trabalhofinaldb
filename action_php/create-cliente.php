<?php

require_once 'bdconnect.php';

if($_POST){
	$nome_cliente = $_POST['nome_cliente'];
	$cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
	
	$sql = "INSERT INTO cliente (nome_cliente,cpf, email, endereco) VALUES ('$nome_cliente', '$cpf', '$email', '$endereco')";

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
	<a href='../create-cliente.html'><button type='button'>Voltar</button></a>
</body>
</html>