<?php


echo "teste";
require 'conexao.php';
$nome=$_POST['nome'];

$paises=$_POST['country'];
$endereco=$_POST['address'];
$cidades=$_POST['city'];
$email=$_POST['email'];
$contacto=$_POST['contact'];


echo $nome, $endereco,$paises,$cidades,$email,$contacto;
echo "teste";
try
{
	echo "teste";
	echo $sql="insert into customer(name, address,country,city,email,contact) values (:name,:address,:country,:city,:email,:contact)";
	$stmt=$conn->prepare($sql);
	
	$stmt->bindParam(':name', $nome);
	$stmt->bindParam(':address', $endereco);
	$stmt->bindParam(':country', $paises);
	$stmt->bindParam(':city', $cidades);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':contact', $contacto);
	$stmt->execute();
	echo"<script> alert('registado com sucesso');</script>";
	
	
}
catch(PDOException $e)
{
	echo "<script> alert('nao foi possivel efectuar o registo');</script>";
	
	
}	

$conn=null;

?>
