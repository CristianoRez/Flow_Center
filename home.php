<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Center</title>
    <link rel="stylesheet" type="text/css" href="layout.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="carrossel.js" defer></script>
    <script src="abalateral.js" defer></script>
   
</head>
<body>
    <div class="header" id="header">
        <div class="logo_header">
            <img src="flow.png" class="imgheader" alt="logo.header">
        </div>
        <div class="navigation_header">
            <a href="#">Ajuda</a>
                <hr class="bnMlHn">
            <a href="perfil.php">
            <?php   
                include_once('config.php');
                    $logado = $_SESSION['email'];
                    $query = "SELECT nome FROM usuario WHERE email = '" . $logado . "'";;
                    $result = mysqli_query($conexao, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row["nome"];
                            }
                        } else 
                        {
                            echo "Anonimo";
                        } 
            ?></a>
                <hr class="bnMlHn">
            <a href="sair.php">Sair</a>
        </div>
    </div>
    <div class="header2" id="header2">
        <div class="logo_header2">
            <h1>Flow Center</h1>
        </div>
        <div class="navigation_header2" id="navigation_header2">
            <button onclick="toggleSidebar()" class="icbotcab">
                <img src="fechar.svg" alt="Fechar">
            </button>
            <a href="#">Profissionais</a>
            <a href="#">Artistas</a>
            <a href="#">Famosos</a>
            
        </div>
        <div class="caixadepesquisa">
                <input type="text" class="textodepesquisa" placeholder="Buscar">
                <a href="#" class="botaodepesquisa">
                    <img src="lupa.svg" alt="Lupa de pesquisa">
                </a>
            </div>
            <button onclick="toggleSidebar()" class="icbotcab">
                <img src="mais.svg" alt="Mais">
            </button>    
    </div>
    <div tabindex="0" onclick="fecharbarralateral()" class="content" id="content">
    <div class="header3" id="header3">
            <div class="carrossel">
                <div class="container" id="img">
                    <img src="addinsider.png" class="imgadd">
                </div>
            </div>
    </div>
    <div class="bodyvideo">
    <div class="caixadevideo">
        <iframe src="https://www.youtube.com/embed/qOer7KEMHIo" class="video">
        </iframe>
    <br>
        <div class="caixadenome">
            <h2>LUCAS INULTENSÍLIOS</h2>
        </div>
    </div>
    <div class="caixadevideo">
        
    </div>
    <div class="caixadevideo">
        
    </div>
    <div class="caixadevideo">
    </div>
    <div class="caixadevideo">
        
    </div>
    <div class="caixadevideo">
        
    </div>
        
   
</div>
</div>
</body>
</html>
