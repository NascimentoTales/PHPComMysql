<?php

// $localHost = "localhost";
// $user = "root";
// $password = "36327300";
// $banco = "bdames";

// $conn = new mysqli($localHost, $user, $password, $banco);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//   echo "Connected successfully";


$banco = new mysqli("localhost", "root", "36327300", "bd_games");
    
if ($banco->connect_errno) {
    
    echo"<p> Encontrei um error $banco->errno -->$banco->connect_error</p>";
    die();
}else{
    // echo"<p>Conectado</p>";
}
$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");

// $busca = $banco->query("SELECT j.cod, j.nome, g.genero, p.produtora, j.descricao, j.nota, j.capa FROM jogos j JOIN generos g ON j.genero = g.cod JOIN produtoras p ON j.produtora = p.cod");



?>
