<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agenda de Contactos</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0D0D0D;
      color: #F2F2F2;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #121212;
      padding: 20px 40px;
      border-bottom: 1px solid #D4AF37;
    }

    header h1 {
      color: #D4AF37;
      font-size: 24px;
      margin: 0;
    }

    .header-icons i {
      color: #D4AF37;
      margin-left: 20px;
      font-size: 18px;
      cursor: pointer;
      transition: color 0.3s;
    }

    .header-icons i:hover {
      color: #e6c558;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background-color: #1A1A1A;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 0 12px rgba(212, 175, 55, 0.15);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 16px;
      text-align: left;
      border-bottom: 1px solid #333;
      font-size: 15px;
    }

    th {
      color: #D4AF37;
      font-weight: bold;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    tr:hover {
      background-color: rgba(212, 175, 55, 0.07);
    }

    @media (max-width: 600px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }
      .header-icons {
        margin-top: 10px;
      }
      table, tr, td, th {
        display: block;
        width: 100%;
      }
      th {
        display: none;
      }
      td {
        padding: 12px 0;
        border-bottom: 1px solid #333;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Agenda de Contactos</h1>
    <div class="header-icons">
      <i class="fas fa-user-circle" title="Perfil"></i>
      <i class="fas fa-cog" title="Configurações"></i>
      <i class="fas fa-sign-out-alt" title="Sair"></i>
    </div>
  </header>

  <div class="container">
    <table>
      <thead>
        <tr>
          <th>Telefone</th>
          <th>Nome</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
 <!-- Botão para adicionar um contacto -->
<form action="adicionar.php" method="get">
  <button type="submit" style="background-color: black; color: gold; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px;">
    Adicionar Contacto
  </button>
</form>

       
      </tbody>
    </table>
  </div>

</body>
</html>
