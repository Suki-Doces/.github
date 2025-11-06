<?php
include('conexao.php');
$resultado = mysqli_query($conn, "SELECT * FROM produtos ORDER BY data_criacao DESC");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
  <style>
    body { font-family: Arial; margin: 40px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background: #f5f5f5; }
    img { width: 80px; height: 80px; object-fit: cover; }
    a { text-decoration: none; color: #007bff; }
  </style>
</head>
<body>
  <h2>Produtos Cadastrados</h2>
  <a href="adicionar_produto.php">+ Adicionar Novo Produto</a>
  <br><br>
  <table>
    <tr>
      <th>ID</th>
      <th>Imagem</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Data de Criação</th>
    </tr>

    <?php while ($produto = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?= $produto['id'] ?></td>
        <td><img src="uploads/<?= $produto['imagem'] ?>" alt=""></td>
        <td><?= $produto['nome'] ?></td>
        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['data_criacao'] ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
