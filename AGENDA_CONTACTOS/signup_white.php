<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registar - Agenda de Contactos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f7fa;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .signup-container {
      background-color: #ffffff;
      padding: 40px 30px;
      border: 1px solid #dcdcdc;
      border-radius: 12px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    h2 {
      text-align: center;
      color: #2a4e9c;
      margin-bottom: 30px;
    }

    .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    .form-group input {
      width: 100%;
      padding: 12px 40px 12px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #fafafa;
      font-size: 14px;
      color: #333;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #2a4e9c;
      outline: none;
    }

    .form-group i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #2a4e9c;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #2a4e9c;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #1f3f87;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 13px;
      color: #888;
    }
  </style>
</head>
<?php 
   require "conexao.php";
   if(isset($_POST['submit'])){
      $response = registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password']);
   }
?>
<body>

  <div class="signup-container">
    <h2>Criar Conta</h2>
    <form method="POST" action="registar_utilizador.php">
      <div class="form-group">
        <input type="text" name="primeiro_nome" placeholder="Primeiro Nome" required />
        <i class="fas fa-user"></i>
      </div>
      <div class="form-group">
        <input type="text" name="ultimo_nome" placeholder="Último Nome" required />
        <i class="fas fa-user"></i>
      </div>
      <div class="form-group">
        <input type="text" name="contacto" placeholder="Contacto" required />
        <i class="fas fa-phone"></i>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email" required />
        <i class="fas fa-envelope"></i>
      </div>
      <div class="form-group">
        <input type="password" name="senha" placeholder="Palavra-passe" required />
        <i class="fas fa-lock"></i>
      </div>
    </form>
    <a href='http://localhost/dashboard/14479/Agenda/paginaprincipal'><button>Entrar</button></a>
    
    <div class="footer">
      Já tens conta? <a href="login_white.php" style="color: #2a4e9c;">Entrar</a>
    </div>
  </div>

</body>
</html>
