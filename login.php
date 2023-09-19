<?php
// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "cadastro_usuarios");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Receber dados do formulário
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

// Verificar se o CPF e a senha correspondem a um usuário no banco de dados
$sql = "SELECT * FROM usuarios WHERE cpf = '$cpf'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row["senha"])) {
        session_start();
        $_SESSION["cpf"] = $cpf;
        header("Location: dashboard.php"); // Redirecionar para a página de dashboard
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "CPF não encontrado.";
}

// Fechar a conexão
$conn->close();
?>
