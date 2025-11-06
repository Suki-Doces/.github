<?php
$currentPage = 'pedidos';
$pageTitle = 'Pedidos';
include 'header.php';
include 'sidebar.php';
?>
<?php
// Tenta incluir uma conexão com o banco (arquivo `db.php` opcional)
$useSample = true; // fallback para dados de exemplo
if (file_exists(__DIR__ . '/db.php')) {
    include __DIR__ . '/db.php'; // espera-se que crie $conn (mysqli)
    if (isset($conn) && $conn instanceof mysqli) {
        $sql = "SELECT id, nome, telefone, valor_total, status FROM pedidos ORDER BY id DESC";
        $resultado = $conn->query($sql);
        if ($resultado && $resultado->num_rows > 0) {
            $useSample = false;
        }
    }
}

?>

<main class="main-content">
    <div class="container">
        <div class="tbl_container">
            <div class="header-container">
                <h2>Gerenciamento de Pedidos</h2>
                <button class="btn-new">
                    <img src="./plus.svg" alt="">
                    Adicionar Novo Pedido
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
                    <?php
                    if (!$useSample && isset($resultado) && $resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td data-Lable='ID'>#" . htmlspecialchars($row['id']) . "</td>";
                            echo "<td data-Lable='Nome'>" . htmlspecialchars($row['nome']) . "</td>";
                            echo "<td data-Lable='Telefone'>" . htmlspecialchars($row['telefone']) . "</td>";
                            echo "<td data-Lable='Valor'>" . htmlspecialchars($row['valor_total']) . "</td>";
                            echo "<td data-Lable='Status'>";
                            if ($row['status'] == 'Ativo') {
                                echo "<img src='./Ellipse 223.svg' alt=''> Ativo";
                            } else {
                                echo "<img src='./Ellipse 223 (1).svg' alt=''> Inativo";
                            }
                            echo "</td>";
                            echo "<td data-Lable='Editar'>";
                            echo "<button class='btn-edit'><img src='./edit-contained.svg' alt=''></button>";
                            echo "</td>";
                            echo "<td data-Lable='Deletar'>";
                            echo "<button class='btn-trash'><img src='./Frame (1).svg' alt=''></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        // liberando resultado
                        $resultado->free();
                    } else {
                        // Dados de exemplo caso não haja conexão/resultado
                        $sample = [
                            ['id' => '0001','nome'=>'João Pedro','telefone'=>'(11) 97965-2943','valor_total'=>'450.00','status'=>'Ativo'],
                            ['id' => '0002','nome'=>'Douglas Luiz','telefone'=>'(13) 98489-8175','valor_total'=>'330.00','status'=>'Ativo'],
                            ['id' => '0003','nome'=>'Carlos Miguel','telefone'=>'(11) 99466-5272','valor_total'=>'450.00','status'=>'Ativo'],
                            ['id' => '0004','nome'=>'Bruno Zago','telefone'=>'(11) 98014-6562','valor_total'=>'255.50','status'=>'Ativo'],
                            ['id' => '0005','nome'=>'Daniel Lopes','telefone'=>'(11) 97626-4608','valor_total'=>'250.00','status'=>'Inativo']
                        ];
                        foreach ($sample as $row) {
                            echo "<tr>";
                            echo "<td data-Lable='ID'>#" . $row['id'] . "</td>";
                            echo "<td data-Lable='Nome'>" . $row['nome'] . "</td>";
                            echo "<td data-Lable='Telefone'>" . $row['telefone'] . "</td>";
                            echo "<td data-Lable='Valor'>" . $row['valor_total'] . "</td>";
                            echo "<td data-Lable='Status'>";
                            if ($row['status'] == 'Ativo') {
                                echo "<img src='./Ellipse 223.svg' alt=''> Ativo";
                            } else {
                                echo "<img src='./Ellipse 223 (1).svg' alt=''> Inativo";
                            }
                            echo "</td>";
                            echo "<td data-Lable='Editar'>";
                            echo "<button class='btn-edit'><img src='./edit-contained.svg' alt=''></button>";
                            echo "</td>";
                            echo "<td data-Lable='Deletar'>";
                            echo "<button class='btn-trash'><img src='./Frame (1).svg' alt=''></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    // fecha conexão se existir
                    if (isset($conn) && $conn instanceof mysqli) {
                        $conn->close();
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>