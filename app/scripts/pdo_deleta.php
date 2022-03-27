<?php
//conexão com o banco de dados
require_once("conecta.php");

//VARIÁVEL PARA EXCLUSÃO
$id = 3;

$query = $conecta->prepare("DELETE FROM tb_produtos WHERE IdProduto = :ID");
$query->bindParam(":ID",$id);
$query->execute();

header("Location: http://localhost/php/projeto_cadastro/pdo_consulta.php");
?>