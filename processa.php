<?php
// Conexão com MySQL
$host = "localhost";
$user = "seu_usuario";
$pass = "sua_senha";
$db   = "nome_do_banco";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// Exemplo de insert ou select
// $_POST["usuario"] --> valor enviado via formulário ou AJAX
if(isset($_POST["usuario"])) {
  $usuario = $_POST["usuario"];
  
  // Exemplo de inserção
  $sql = "INSERT INTO usuarios (nome) VALUES (?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $usuario);
  if($stmt->execute()){
    echo "Usuário inserido com sucesso!";
  } else {
    echo "Erro: " . $conn->error;
  }
}

$conn->close();
?>
