<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Inseridos no Banco de Dados</title>
</head>
<body>

<?php
// Configurações de conexão com o banco de dados (use as configurações adequadas)
$host = "localhost";
$usuario = "root";
$senha = "123";
$banco = "CadPet";

try {
    // Conectar ao banco de dados usando PDO
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta ao banco de dados
    $consulta = $conexao->query("SELECT * FROM PeludosPerdidos ");
    
    // Exibir os dados
    echo "<h2>Dados Inseridos no Banco de Dados</h2>";
    echo "<ul>";

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>especie: " . $linha['Espécie'] . ", Gênero: " . $linha['genero'] . ", Porte: " . $linha['porte'] .
        ", Situação: " . $linha['situacao'] . ", Data Ocorrido: " . $linha['dataocorrido'] .", Nome Pet: " . $linha['nomepet'] .
        ", cor: " . $linha['cor'] .", Idade: " . $linha['idade'] . ", Raça: " . $linha['raca'] .
        ", Observação: " . $linha['observacao'] . ", Dono: " . $linha['dono'] . ", Celular: " . $linha['celular'] ."</li>";
    }

    echo "</ul>";
} catch (PDOException $e) {
    echo "Erro ao obter os dados: " . $e->getMessage();
}
?>