<?php

// Dados de conexão com o banco de dados
$host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'bd_vagas';

// Conectando ao banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificando se a conexão foi estabelecida
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Recuperando os dados do formulário
$placa = $_POST['myLabel2'];

$sql = "INSERT INTO tb_vagas (placa) VALUES ('$placa')";

// Executando a consulta e verificando se ocorreu algum erro
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: index.php"); // Redireciona de volta para index.html
    exit(); // Certifica-se de que o script seja encerrado após o redirecionamento
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conn);
    mysqli_close($conn);
}
?>
