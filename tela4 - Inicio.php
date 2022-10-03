<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.html");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="StyleSheet" href="estilo3 - Inicio.css">
</head>
<body>
    <header class="cima">
       <p>🏋🏽 LIFT WEIGHTS - HOME 🏋🏽</p> <div class="container-4 btn-outline-secondary" id="current-time" style="font-size: 25px;"><div class="content-4"></div></div>
        <div class="dropdown" id="esconder">
        <?php
    //verifica se o usuario conectado é administrador para mostrar a mensagem.
    if ($_SESSION['is_adm_usuario'] == 1) {
        echo '<p> Você é Administrador! </p>';
    }
    ?>
            <button><img src="chad.jpg" id="perfil"></button>
            <div>
                <a href="tela8 - Perfil.html">PERFIL</a>
                <a href="tela9 - Configuracoes.html" >CONFIGURAÇÕES</a>
                <a href="tela7 - Listagem de treino.html" >LISTA DE TREINOS</a>
                <a href="tela1 - Site.html">SAIR</a>
            </div>
        </div>
    </header>
</body>
<body class="second-body">
    <div class="container">
        <div class="card">
            <div class="content">
                <br><br><br><br>
                <h2>01</h2>
                <h3>TREINOS DE MUSCULAÇÃO</h3>
                <p>TREINOS PERSONALIZADOS PARA VOCÊ FAZER NA CONFORTO DA SUA CASA.</p>
                <br><br>
                <a href="tela11 - musculacao.html">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br><br><br><br>
                <h2>02</h2>
                <h3>SOBRE O SITE</h3>
                <p>SOBRE O NOSSO SITE DE ATIVIDADES FÍSICAS</p>
                <br>
                <a href="tela10 - Informacao.html">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br>
                <h2>03</h2>
                <h3>SUPORTE AO CLIENTE</h3>
                <p>CASO QUEIRA MANDAR ALGUM E-MAIL</p>
                <br> <br>
                <a href="tela5 - Contato.html">Mais informações</a>
            </div>
        </div> 
    </div>
    <script type="text/javascript" src="vanilla-tilt.babel.js"></script>
    <script>
        document.getElementById('current-time').innerHTML = Date();
    </script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 0.5,
        });
    </script>
</body>
</html>