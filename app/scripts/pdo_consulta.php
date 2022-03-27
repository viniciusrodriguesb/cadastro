<?php
//conexão com o banco de dados
require_once("conecta.php");
     
$query = $conecta->prepare("SELECT * FROM tb_produtos");
$query->execute();

//Trantando o resultado da consulta
//fetchALL - é como se ele estivesse fatiando a tabela
$resultado = $query->fetchALL(PDO::FETCH_ASSOC);

foreach($resultado as $index){
    echo ("
        <table width='100%' border='1px'>
        <tr>
        ");
    foreach($index as $key => $value){
        echo "<td>" .  $value ."</td>";
}
    echo ("
        </tr>
        </table>
        ");
}
?>