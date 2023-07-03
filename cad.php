
<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$genero = $_POST['genero'];
$data = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$end = $_POST['end'];

$result = mysqli_query($con,"INSERT INTO usuario(nome, senha, email, fone, sexo, nasc, cidade, estado, end) VALUES('$nome','$senha', '$email', '$fone', '$genero', '$data', '$cidade', '$estado', '$end')");
header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário | RCJ</title>
</head>

<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="cad.php" method ="POST">

            <fieldset>
                <legend><b>Formulário de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="nome" id="nome" required>
                    <label for="nome" class="labelInput">Nome completo</label>

                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" class="inputUser" name="senha" id="senha" required>
                    <label for="senha" class="labelInput">Criar senha</label>

                </div>
                <br><br>
                  <div class="inputBox">
                    <input type="text" class="inputUser" name="email" id="email" required>
                    <label for="email" class="labelInput">Email</label>

                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="tel" class="inputUser" name="fone" id="fone" required>
                    <label for="fone" class="labelInput">Telefone</label>

                </div>
               

                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br><br>
                <div class="inputBox">
                    <label for="data"><b>Data de Nascimento:</b></label>
                    <br><br>
                    <input type="date" class="inputUser" name="data" id="data" required>   
                </div>
                <br><br>
                <div class="inputBox">
                   
                    <input type="text" class="inputUser" name="cidade" id="cidade" required> 
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="estado" id="estado" required>  
                    <label for="estado" class="labelInput">Estado</label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="end" id="end" required>
                    <label for="text" class="labelInput">Endereço</label>   
                </div>
                <br><br>
            <input type="submit" value="Enviar" name="submit" id="submit">
            </fieldset>



        </form>
    </div>
</body>
</html>