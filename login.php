<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Tela de Login</title>

</head>
<a href="home.php">Voltar</a>
<body>
    <div class="tela">
        <form action="testlogin.php" method="POST">

        
        <h1>Login</h1>
        <input type="text" name="email" id="email" placeholder="Digite seu email..." required>
        <br><br>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha..." required>
        <br><br>
        <input type="submit" name="submit" value="Enviar" class="inputSubmit">
    
    </form>
    </div>
</body>
</html>