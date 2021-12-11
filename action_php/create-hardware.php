<?php

require_once 'bdconnect.php';

if($_POST){
	$nome_hardware = $_POST['nome_hardware'];
	$preco_hardware = $_POST['preco_hardware'];
	
	$sql = "INSERT INTO hardware (nome_hardware,preco_hardware) VALUES ('$nome_hardware', '$preco_hardware')";

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
	<title></title>
</head>



<body>
	<a href='../create-cliente.html'><button type='button'>Voltar</button></a>
</body>
</html>