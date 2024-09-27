<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Consultar Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Código de Barra</th>
                <th>Imagem</th>
                <th>Setor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexão com o banco
            $conn = new mysqli('localhost', 'root', '', 'prova_banco');
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM produto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['marca'] . "</td>";
                    echo "<td>" . $row['preco'] . "</td>";
                    echo "<td>" . $row['descricao'] . "</td>";
                    echo "<td>" . $row['codigo_barra'] . "</td>";
                    echo "<td><img src='img/" . $row['imagem'] . "' width='50'></td>";
                    echo "<td>" . $row['setor'] . "</td>";
                    echo "<td>
                            <a href='editar.php?id=" . $row['id'] . "'>Editar</a> |
                            <a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Nenhum produto encontrado.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
