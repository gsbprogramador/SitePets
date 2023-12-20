<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
    <title>PeludosePerdidos</title>
</head>
<body>
    <header class="cabeçalho">
        <img class="logo" src="logopet.png" alt="PeludosePerdidos">
        <h1>Peludos e Perdidos</h1>
    </header>
    <header>
        <strong>
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastro do Pet</a></li>                
                <li><a href="adoção.php">Pets para Adoção</a></li>                                
                <li><a href="sobrenos.php">Sobre Nós</a></li>
              </ul>
            </nav>
        </strong>
    </header>
    
    <footer>
        <p>ⒸTODOS OS DIREITOS RESERVADOS.</p>
    </footer>
    
    
    <?php
// Configurações de conexão com o banco de dados (use as configurações adequadas)
$host = "localhost";
$usuario = "id21656736_cadastro";
$senha = "Micl.1308";
$banco = "id21656736_cadpet";

try {
    // Conectar ao banco de dados usando PDO
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta ao banco de dados
    $consulta = $conexao->query("SELECT * FROM PeludosPerdidos WHERE situacao = 'perdido';");
    
        // Exibir os dados em uma tabela
    echo "<h2>Lista de Pets Perdidos</h2>";
    echo "<table align='center' border='1'>";
    echo "<tr><th>Espécie</th><th>Gênero</th><th>Porte</th><th>Situação</th><th>Data</th><th>Pet</th>
    <th>cor</th><th>Idade</th><th>Raça</th><th>Observação</th><th>Dono</th><th>Telefone</th></tr>";

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $linha['especie'] . "</td>";
        echo "<td>" . $linha['genero'] . "</td>";
        echo "<td>" . $linha['porte'] . "</td>";
        echo "<td>" . $linha['situacao'] . "</td>";
        echo "<td>" . $linha['dataocorrido'] . "</td>";
        echo "<td>" . $linha['nomepet'] . "</td>";
        echo "<td>" . $linha['cor'] . "</td>";
        echo "<td>" . $linha['idade'] . "</td>";
        echo "<td>" . $linha['raca'] . "</td>";
        echo "<td>" . $linha['observacao'] . "</td>";
        echo "<td>" . $linha['dono'] . "</td>";
        echo "<td>" . $linha['celular'] . "</td>";
        echo "</tr>";
    }

echo "</table>";
} catch (PDOException $e) {
    echo "Erro ao obter os dados: " . $e->getMessage();
}
?>
    
    <footer>
        <p>ⒸTODOS OS DIREITOS RESERVADOS.</p>
    </footer>


</body>
</html>
