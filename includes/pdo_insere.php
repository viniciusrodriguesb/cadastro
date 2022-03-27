<?php
    $conect = new PDO("mysql:dbname=db_cadastro;host=localhost", "root", "");

    // Definindo as variáveis 
    $ean_gtin = $_POST["EAN_GTIN"];
        $descricao = $_POST["descricao"];
        $categoria = $_POST["categoria"];
        $marca = $_POST["marca"];
        $preco_venda = $_POST["Preco_Venda"];
        $preco_custo = $_POST["Preco_Custo"];
        $estoque = $_POST["estoque"];

$query = $conecta->prepare("INSERT INTO tb_produtos(EAN_GTIN, descricao, categoria, marca, Preco_Venda, Preco_Custo, estoque) VALUES(EAN_GTIN:, :DESCRICAO, :CATEGORIA, :MARCA, :PRECO_VENDA, :PRECO_CUSTO, :ESTOQUE)");

    //Executar
    $query->execute(array(
        ':EAN_GTIN' => $ean_gtin,
        ':DESCRICAO' => $descricao,
        ':CATEGORIA' => $categoria,
        ':MARCA' => $marca,
        ':PRECO_VENDA' => $preco_venda,
        ':PRECO_CUSTO' => $preco_custo,
        ':ESTOQUE' => $estoque
    ));
    echo "Será que funfou? :[";
?>