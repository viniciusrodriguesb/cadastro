<?php
//Conexão com o Banco de Dados
require_once("conecta.php");

$id = 4;
$ean_gtin = '444444';
$descricao = 'fanta';
$categoria = 'bebida';
$marca = 'coca';
$preco_venda = '15';
$preco_custo = '8';
$estoque = '50';

$query = $conecta->prepare("UPDATE tb_produtos SET EAN_GTIN = :EAN_GTIN, descricao = :DESCRICAO, categoria = :CATEGORIA, marca = :MARCA, Preco_Venda = :PRECO_VENDA, Preco_Custo = :PRECO_CUSTO, estoque = :ESTOQUE WHERE IdProduto = :ID");

$query->execute(array(
    ':EAN_GTIN'=>$ean_gtin,
    ':DESCRICAO'=>$descricao,
    ':CATEGORIA'=>$categoria,
    ':MARCA'=>$marca,
    ':PRECO_VENDA'=>$preco_venda,
    ':PRECO_CUSTO'=>$preco_custo,
    ':ESTOQUE'=>$estoque,
    ':ID'=>$id
));
?>