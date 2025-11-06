<?php
include 'add_produto.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

// Upload da imagem
$imagem_nome = $_FILES['imagem']['name'];
$imagem_tmp = $_FILES['imagem']['tmp_name'];
$caminho = "uploads/" . basename($imagem_nome);
move_uploaded_file($imagem_tmp, $caminho);

// Inserir no banco
$sql = "INSERT INTO produtos (nome, descricao, preco, quantidade, imagem)
        VALUES ('$nome', '$descricao', '$preco', '$quantidade', '$caminho')";

if ($conn->query($sql) === TRUE) {
  header("Location: add_produtos.php");
  exit();
} else {
  echo "Erro: " . $conn->error;
}
?>
<?php
require 'add_produto.php';