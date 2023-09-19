<?php
// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "cadastro_usuarios");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Receber dados do formulário
$cpf = $_POST["cpf"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$email = $_POST["email"];
$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (cpf, senha, email, nome, data_nascimento) VALUES ('$cpf', '$senha', '$email', '$nome', '$data_nascimento')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro no cadastro: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
