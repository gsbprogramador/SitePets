<?php
// Configurações para conexão com o banco de dados sis_academico
// Utilizado PHP 7.4.33  pacote Wampserver 3.3.0  
// Pode utilizar também conexão mysqli, o arquivo cadastro_aluno.html deve ser adaptado. 


$host = "localhost";
$usuario = "id21656736_cadastro";
$senha = "Micl.1308";
$banco = "id21656736_cadpet";

try {
    /* Conexão com o banco de dados utilizando PDO
	
	   O PDO (PHP Data Objects) define uma interface de conexão a banco de dados leve
       e consistente para PHP. Há a possibilidade de utilização de diversos drivers de
	   conexão que implementam a interface do PDO para vários tipos de bancos de dados.
*/
	
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    // Habilitar exceções para erros de PDO
	
   // Define o atributo ERRMODE do objeto de conexão PDO para ERRMODE_EXCEPTION.
   // Isso configura o modo de tratamento de erros do PDO para lançar exceções em caso de erros SQL.
   // Isso é útil para capturar exceções e lidar com erros de maneira mais eficaz durante a execução do código.
   // Quando ocorrer um erro SQL, o PDO lançará uma exceção do tipo PDOException com detalhes do erro.
   // Isso permite que o código capture e lide com erros de forma mais estruturada e informativa.
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   
} catch(PDOException $e) {
    // Tratar erros de conexão
    die('Não foi possível conectar ao banco de dados. Erro detectado: ' . $e->getMessage());
}

/*
Este código está dentro de um bloco `try...catch` e é responsável por lidar com erros que possam ocorrer durante a 
conexão com o banco de dados usando PDO (PHP Data Objects). Vamos explicar cada parte:

1. `try { ... }`: Este é o bloco "tentar". O código dentro deste bloco é executado e qualquer exceção que ocorrer
será "capturada" pelo bloco `catch`.

2. `catch(PDOException $e) { ... }`: Este é o bloco "capturar". Ele é executado quando uma exceção do tipo `PDOException`
é lançada dentro do bloco `try`. `$e` é uma variável que representa a exceção capturada.

3. `// Tratar erros de conexão`: Este é um comentário que indica o propósito do bloco `catch`, que é tratar erros relacionados
à conexão com o banco de dados.

4. `die('Não foi possível conectar ao banco de dados. Erro detectado: ' . $e->getMessage());`: Esta linha imprime uma mensagem 
de erro na página e encerra a execução do script com a função `die()`. A mensagem de erro contém informações sobre o problema de 
conexão com o banco de dados. O `.$e->getMessage()` obtém a mensagem de erro específica que foi lançada na exceção capturada, e ela
 será exibida junto com a mensagem geral de erro.

Em resumo, este bloco `catch` é usado para capturar exceções relacionadas à conexão com o banco de dados usando PDO. Se ocorrer um
erro durante a conexão, a mensagem de erro será exibida na página, ajudando a identificar e diagnosticar problemas na conexão com o 
banco de dados. Isso é útil para depuração e tratamento de erros em seu aplicativo.

*/


?>