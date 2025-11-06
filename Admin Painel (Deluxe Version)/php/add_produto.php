<?php
include('conexao.php'); // arquivo com a conexão ao banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $imagem = $_FILES['imagem']['name'];

    // salvar imagem em uma pasta local (ex: "uploads")
    $destino = 'uploads/' . basename($imagem);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $destino);

    // inserir no banco
    $sql = "INSERT INTO produtos (nome, imagem, preco, quantidade) 
            VALUES ('$nome', '$imagem', '$preco', '$quantidade')";
    mysqli_query($conexao, $sql);

    header('Location: listar_produtos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Adicionar Produto</h3>
         <input type="text" placeholder="Digite nome do Produto" name="product_name" class="box">
         <input type="number" placeholder="Insira o valor do Produto" name="product_price" class="box">
         <input type="number" placeholder="Coloque a quantidade" name="product_qtd" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="Adicionar Produto">
      </form>
   </div>

</div>



