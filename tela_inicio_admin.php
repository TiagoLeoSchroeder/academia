<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: tela3_Logar.html");
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
    <link rel="StyleSheet" href="estilo_Inicio_admin.css">
</head>
<body>
    <header class="cima">
       <p>🏋🏽 LIFT WEIGHTS - HOME 🏋🏽</p>
       <br>
       <p>BEM-VINDO ADMINISTRADOR</p>
        <div class="dropdown" id="esconder">
            <button><img src="chad.jpg" id="perfil"></button>
            <div>
                <a href="tela_Perfil_Admin.html">Perfil</a>
                <a href="tela_Configuracoes_admin.html">Configurações</a>
                <a href="tela_Admin.php">Lista do Admin</a>
                <a href="tela_site.html">Sair</a>
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
                <a href="tela4.1 - Treinos.html">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br><br><br><br>
                <h2>02</h2>
                <h3>SOBRE O SITE</h3>
                <p>SOBRE O NOSSO SITE DE ATIVIDADES FÍSICAS</p>
                <br>
                <a href="tela10_Informacao.html">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br>
                <h2>03</h2>
                <h3>SUPORTE AO CLIENTE</h3>
                <p>CASO QUEIRA MANDAR ALGUM E-MAIL</p>
                <br> <br>
                <a href="tela5_Contato.html">Mais informações</a>
            </div>
        </div> 
    </div>
   
    <script type="text/javascript" src="vanilla-tilt.babel.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        });
    </script>
</body>
</html>