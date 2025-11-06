<?php

//nesse arquivo, através de um formulário html, coletamos os dados de login do administrador que está querendo acessar o sistema.
//Uma vez feito isso, enviamos via método post desse formulário, os dados para o arquivo processa_login.php
//No final do arquivo html, capturamos e escrevemos um possível erro que possa ter havido no login do usuário que foi processado (e enviado) no arquivo processa_login.php


session_start();

// Se a variável de sessão com a mensagem de erro estiver definida
if(isset($_SESSION['mensagem_erro'])) {
    echo '<p>' . $_SESSION['mensagem_erro'] . '</p>'; // Exibe a mensagem de erro
    unset($_SESSION['mensagem_erro']); // Descarta a variável de sessão
}
?>

<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<div class="container">
  <div class="login-box" id="loginBox">
    <img src="../assets/img/Logo Suki.svg" alt="Logo_Suki.png" class="logo">

    <h2>Login</h2>
    <form id="loginForm">
      <input type="email" id="email" placeholder="Email" required />
      <input type="password" id="password" placeholder="Senha" required />
      <select id="role" required>
        <option value="" disabled selected>Selecione o tipo de usuário</option>
        <option value="user">Usuário</option>
        <option value="admin">Administrador</option>
      </select>
      <button type="submit">Entrar</button>
    </form>
    <p id="errorMsg" class="error"></p>
  </div>

  <div class="welcome-box" id="welcomeBox" style="display:none;">
    <h2>Bem-vindo, <span id="userEmail"></span></h2>
    <p>Você está logado como <strong><span id="userRole"></span></strong></p>
    <button id="logoutBtn">Sair</button>
  </div>
</div>

</body>

        
        <?php 
        ////Capturamos e escrevemos um possível erro que possa ter havido no login do usuário que foi processado (e enviado) no arquivo processa_login.php
            if (isset($_GET['erro'])) {
                echo '<p style="color: red;">Nome de usuário ou senha incorretos!</p>';
            }
        ?>
</html>