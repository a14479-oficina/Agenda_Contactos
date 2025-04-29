<?php
session_start();
include 'conexao.php'; 

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica se o utilizador existe
$sql = "SELECT * FROM utilizadores WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $dados = $result->fetch_assoc();

    // Verifica a senha 
    if (password_verify($senha, $dados['senha'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: paginaprincipal.html"); // página principal do sistema
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
?>
