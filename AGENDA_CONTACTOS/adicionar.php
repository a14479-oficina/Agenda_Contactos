<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    
    $conn = new mysqli('sql205.alojamento-gratis.com', 'dbname=ljmn_38672856_agendacontatos_2i', 'ljmn_38672856', '6342074260234G3');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Inserir contacto
    $sql = "INSERT INTO contactos (nome, telefone) VALUES ('$nome', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Contacto adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="adicionar.php">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" required><br><br>

    
</form>
    <a href="paginaprincipal.php">
        <button>Guardar Contacto</button>
    </a>
