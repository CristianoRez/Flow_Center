<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')");
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadrastro</title>
    <link rel="stylesheet" href="cad.css">
</head>

<body>
    <div class="box">
        <form action="cad.php" method="POST">
            <fieldset class="cresce">
                <legend><b>Cadastro</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser1" required>
                    <label class="labelinput" for="nome">-Nome completo:</label>
                    </input>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser2" required>
                    <label class="labelinput" for="email">-Email:</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser3" required>
                    <label class="labelinput" for="senha">-Crie sua senha:</label>
                </div><br>
                <div class="divBtn">
                    <input type="submit" name="submit" id="submit" class="cadBtn">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>

