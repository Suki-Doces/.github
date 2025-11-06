<?php 

include ('db_conn.php');

$sql = "SELECT * FROM Cliente"; // nome da tabela
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="tbl_container">
            <div class="header-container">
                <h2>Resposinve Table Using HTML and CSS</h2>
                <button class="btn-new">
                    <img src="./plus.svg" alt="">
                    Adicionar Novo Cliente
                </button>
            </div>
            <table class="tbl">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Valor Total</th>
                        <th>Status</th>
                        <th colspan="2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-Lable="ID">#0001</td>
                        <td data-Lable="Nome">João Pedro</td>
                        <td data-Lable="Telefone">(11) 97965-2943</td>
                        <td data-Lable="Valor">450.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar" >
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0002</td>
                        <td data-Lable="Nome">Douglas Luiz</td>
                        <td data-Lable="Telefone">(13) 98489-8175</td>
                        <td data-Lable="Valor">330.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0003</td>
                        <td data-Lable="Nome">Carlos Miguel</td>
                        <td data-Lable="Telefone">(11) 99466-5272</td>
                        <td data-Lable="Valor">450.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0004</td>
                        <td data-Lable="Nome">Bruno Zago</td>
                        <td data-Lable="Telefone">(11) 98014-6562</td>
                        <td data-Lable="Valor">255,50</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0005</td>
                        <td data-Lable="Nome">Daniel Lopes</td>
                        <td data-Lable="Telefone">(11) 97626-4608</td>
                        <td data-Lable="Valor">250.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223 (1).svg" alt="">
                            Inativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0006</td>
                        <td data-Lable="Nome">Alex Russo</td>
                        <td data-Lable="Telefone">(15) 96948-8841</td>
                        <td data-Lable="Valor">110.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0007</td>
                        <td data-Lable="Nome">Eduardo Saverin</td>
                        <td data-Lable="Telefone">(14) 98613-3211</td>
                        <td data-Lable="Valor">122.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223 (1).svg" alt="">
                            Inativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0008</td>
                        <td data-Lable="Nome">Sean Parker</td>
                        <td data-Lable="Telefone">(18) 99962-2927</td>
                        <td data-Lable="Valor">220.75</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0009</td>
                        <td data-Lable="Nome">Pedro Neto</td>
                        <td data-Lable="Telefone">(11) 99957-2722</td>
                        <td data-Lable="Valor">400.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223.svg" alt="">
                            Ativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-Lable="ID">#0010</td>
                        <td data-Lable="Nome">Bruno Fernandes</td>
                        <td data-Lable="Telefone">(13) 99218-1504</td>
                        <td data-Lable="Valor">50.00</td>
                        <td data-Lable="Status">
                            <img src="./Ellipse 223 (1).svg" alt="">
                            Inativo
                        </td>
                        <td data-Lable="Editar">
                            <button class="btn-edit"><img src="./edit-contained.svg" alt=""></button>
                        </td>
                        <td data-Lable="Deletar">
                            <button class="btn-trash"><img src="./Frame (1).svg" alt=""></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>