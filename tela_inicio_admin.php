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
    <link rel="StyleSheet" href="estilo_inicio_admin.css">
</head>
<body>
    <header class="cima">
       <p>🏋🏽 LIFT WEIGHTS - HOME 🏋🏽</p>
       <br>
       <p>BEM-VINDO ADMINISTRADOR</p>
        <div class="dropdown" id="esconder">
            <button><img src="adm.png" id="perfil"></button>
            <div>
                <a href="##">ADMIN - O BRABO</a>
                <a href="tela_site.html">Sair</a>
            </div>
        </div>
    </header>
</body>
<body class="second-body">
    <div class="container">
        <div class="card">
            <div class="content">
                <br><br><br><br><br><br><br>
                <h2>01</h2>
                <h3>EQUIPAMENTO</h3>
                <p>CADASTRAR EQUIPAMENTOS NÃO REGISTRADOS</p>
                <br><br>
                <a href="tela_equipamento.php">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br><br>
                <h2>02</h2>
                <h3>CADASTRO DE TREINOS</h3>
                <p>ADICIONAR NOVOS TREINOS PARA USUÁRIOS</p>
                <br>
                <a href="tela_cadastro_treinos.php">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br>
                <h2>03</h2>
                <h3>TELA ADMIN</h3>
                <p>LISTAR USUARIOS CADASTRADOS E CONECTADOS</p>
                <br> <br>
                <a href="tela_Admin.php">Mais informações</a>
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