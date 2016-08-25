<?php

//echo "teste";
$hostname="localhost";
$username="root";
$password="";
$dbname="SIMPLONs";

//echo "teste";
try
{


	$conn=new PDO("mysql:host=$hostname; dbname=$dbname", $username, $password);
	echo "teste";
}
catch(PDOException $e)
{
	echo "<script> alert('ocorreu um erro ao conectar com a base de dados');</script>";
}	

?>