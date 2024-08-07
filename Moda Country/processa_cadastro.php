<?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "moda_country";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";

// Exemplo de como executar uma consulta
$sql = "SELECT id, nome, preco FROM produtos";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // Saída de dados para cada linha
    while ($linha = $resultado->fetch_assoc()) {
        echo "id: " . $linha["id"] . " - Nome: " . $linha["nome"] . " - Preço: " . $linha["preco"] . "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
