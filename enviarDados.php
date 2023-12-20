<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
        integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
    
    <title>Cadastro de Pets</title>
</head>
<body>


<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $especie= $_POST['especie'];
    $genero = $_POST['genero'];
    $porte = $_POST['porte'];
    $situacao = $_POST['situacao'];
    $dataocorrido = $_POST['dataocorrido'];
    $nomepet = $_POST['nomepet'];
    $cor = $_POST['cor'];
    $idade = $_POST['idade'];
    $raca = $_POST['raca'];
    $observacao = $_POST['observacao'];
    $dono = $_POST['dono'];
    $celular =  $_POST['celular'];
       

    try {
        // Preparar a consulta usando instrução preparada
        $inserir = $conexao->prepare("INSERT INTO PeludosPerdidos (especie, genero, porte, situacao, dataocorrido, nomepet, cor, idade, raca, observacao, dono, celular)
                                         VALUES (:especie, :genero, :porte, :situacao, :dataocorrido, :nomepet, :cor, :idade, :raca, :observacao, :dono, :celular)");

        // Vincular parâmetros à instrução preparada
        $inserir->bindValue(':especie', $especie);
        $inserir->bindValue(':genero', $genero);
        $inserir->bindValue(':porte', $porte);
        $inserir->bindValue(':situacao', $situacao);
        $inserir->bindValue(':dataocorrido', $dataocorrido);
        $inserir->bindValue(':nomepet', $nomepet);
        $inserir->bindValue(':cor', $cor);
        $inserir->bindValue(':idade', $idade);
        $inserir->bindValue(':raca', $raca);
        $inserir->bindValue(':observacao',$observacao);
        $inserir->bindValue(':dono', $dono);
        $inserir->bindValue(':celular', $celular);


        
         // Executar a consulta
        if ($inserir->execute()) {
            echo "Dados incluídos com sucesso!<br />" ;
        } else {
            echo "Erro ao inserir os dados: " . $inserir->errorInfo()[2];
        }
        
        
        // Fechar a instrução preparada
        $inserir = null;
    } catch(PDOException $e) {
        echo "Erro ao inserir os dados: " . $e->getMessage();
    }
}

// Fechar a conexão
$conexao = null;
?>

</body>

</html>
