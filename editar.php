
<?php

if(!empty($_GET['id']))
{

include_once('config.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuario WHERE id = $id";

$result = $con->query($sqlSelect);

if ($result->num_rows > 0) 
{
    while($dados = mysqli_fetch_assoc($result))
    {
        $nome = $dados['nome'];
        $senha = $dados['senha'];
        $email = $dados['email'];
        $fone = $dados['fone'];
        $sexo = $dados['sexo'];
        $nasc = $dados['nasc'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $end = $dados['endereco'];

    }

}
else
{
    header('Location: sistema.php');

}


}
else
{
    header('Location: sistema.php');
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
<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="update.php" method ="POST">

            <fieldset>
                <legend><b>Formulário de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="nome" id="nome" value ="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>

                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" class="inputUser" name="senha" id="senha" value ="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Criar senha</label>

                </div>
                <br><br>
                  <div class="inputBox">
                    <input type="text" class="inputUser" name="email" id="email" value ="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>

                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="tel" class="inputUser" name="fone" id="fone" value ="<?php echo $fone ?>" required>
                    <label for="fone" class="labelInput">Telefone</label>

                </div>
               

                <p>Sexo:</p>
                <input type="radio" name="sexo" id="feminino" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>
                
                <input type="radio" name="sexo" id="masculino" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                
                <input type="radio" name="sexo" id="outro" value="outro" <?php echo ($sexo == 'outro') ? 'checked'  : '' ?>  required>
                <label for="outro">Outro</label>
                <br>
                <br><br>
                
                <div class="inputBox">
                    <label for="data"><b>Data de Nascimento:</b></label>
                    <br><br>
                    <input type="date" class="inputUser" name="nasc" id="nasc" value ="<?php echo $nasc ?>" required>   
                </div>
                <br><br>
                <div class="inputBox">
                   
                    <input type="text" class="inputUser" name="cidade" id="cidade" value ="<?php echo $cidade ?>" required> 
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="estado" id="estado" value ="<?php echo $estado ?>" required>  
                    <label for="estado" class="labelInput">Estado</label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="endereco" id="endereco" value ="<?php echo $end ?>" required>
                    <label for="text" class="labelInput">Endereço</label>   
                </div>
                <br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Atualizar" name="update" id="update">
            </fieldset>



        </form>
    </div>
</body>
</html>