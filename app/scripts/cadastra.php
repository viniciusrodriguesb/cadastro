<?php
//Conexão com o banco de dados
require_once("conecta.php");

//A função isset verifica se uma variável ou array esta vazio
if($_POST["EAN_GTIN"] && $_POST["descricao"] && $_POST["categoria"] && $_POST["marca"] && $_POST["Preco_Venda"] && $_POST["Preco_Custo"] && $_POST["estoque"]){

$ean_gtin = $_POST["EAN_GTIN"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco_venda = $_POST["Preco_Venda"];
$preco_custo = $_POST["Preco_Custo"];
$estoque = $_POST["estoque"];

//Montando a query
$query = $conecta->prepare("INSERT INTO tb_produtos(EAN_GTIN,descricao,categoria,marca,Preco_Venda,Preco_Custo,estoque)VALUES (:EAN_GTIN, :DESCRICAO, :CATEGORIA, :MARCA, :PRECO_VENDA, :PRECO_CUSTO, :ESTOQUE)");

$query->execute(array(
    ':EAN_GTIN' => $ean_gtin,
    ':DESCRICAO' => $descricao,
    ':CATEGORIA' => $categoria,
    ':MARCA' => $marca,
    ':PRECO_VENDA' => $preco_venda,
    ':PRECO_CUSTO' => $preco_custo,
    ':ESTOQUE' => $estoque
));
     echo "Será que cadastrou?";
}else{
    header("Location: http://localhost/php/projeto_cadastro/");
} 
?>