<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PeludosePerdidos</title>
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
</head>
<body>
    <header class="cabeçalho">
        <img class="logo" src="img/logopet.png" alt="PeludosePerdidos">
        <h1>Cadastro</h1>
    </header>
    <header>
        <strong>
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="perdidos.php">Pets Perdidos</a></li>
                <li><a href="adoção.php">Pets para Adoção</a></li>                                
                <li><a href="sobrenos.php">Sobre Nós</a></li>
              </ul>
            </nav>
        </strong>
    </header>   
    <form class="meuFormulario" method='POST' action='enviarDados.php'>
        <div class="container"> 
            <h2>CADASTRO DO PET</h2>
            <br>
            <label for="especie">Espécie</label>
              <select id="especie" name="especie" required>
                <option value=""></option>
                <option value="Cão">Cão</option>
                <option value="Gato">Gato</option>
              </select>
            <label for="genero">Gênero</label>  
              <select id="genero" name="genero" required>
                <option value=""></option>
                <option value="macho">Macho</option>
                <option value="femea">Fêmea</option>
              </select>
            <label for="porte">Porte</label>  
              <select id="porte" name="porte" required>
                <option value=""></option>
                <option value="pequeno">Pequeno</option>
                <option value="medio">Médio</option>
                <option value="grande">Grande</option>
              </select>
            <label for="situação">Situação</label>
              <select id="situação" name="situacao" required>
                <option value=""></option>
                <option value="adoção">adoção</option>
                <option value="perdido">perdido</option>
              </select>
              <label for="data">Data do Ocorrido:</label>
              <input type='date' id='data' name='dataocorrido'>
              <br><br>
            <label for="nome">Nome:</label>
              <input type='text' id='nome' name='nomepet' required>
            <label for="cor">Cor:</label>
               <input type='cor' id='cor' name='cor' required> 
            <label for="idade">Idade:</label>
              <input type='idade' id='idade' name='idade' required>
            <label for="raca">Raça:</label>
              <input type='raca' id='raca' name='raca' required>
              <br><br>                       
            <label for="dono">Dono:</label>
              <input type='text' id='dono' name='dono' required>
              <label for="celular">WhatsApp:</label>
              <input type="tel" id="celular" name="celular" required>
              <br><br>
              <label for="observacao">Observação:</label>
               <textarea id="msg" name="observacao" rows="4" ></textarea>
              <br><br>
              <input id="reset" type="reset" value="Limpar">
              <input id="enviar" type="submit" value="Enviar">              
        </div>
        <img id="petsinicio" src="img/petinicio1.png" alt="cachorros e gatos">
    </form>
           
    <footer>
        <p>ⒸTODOS OS DIREITOS RESERVADOS.</p>
    </footer>
</body>
</html>