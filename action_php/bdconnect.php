<?php
$server = "127.0.0.1";
$user = "root";
$password= "";
$dbname = "empresa";

$connect = new mysqli ( $server , $user , $password , $dbname );

if ( $connect -> connect_error ) {
	die ( "conexao falhou:" . $connect -> connect_error );

}
else {
	
}
?>
