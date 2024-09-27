<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $codigo_barra = $_POST['codigo_barra'];
    $setor = $_POST['setor'];
    $imagem = $_FILES['imagem']['name'];

    // Upload da imagem
    $destino_imagem = 'img/' . basename($imagem);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $destino_imagem);

    // Conexão com o banco
    $conn = new mysqli('localhost', 'root', '', 'prova_banco');
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO produto (nome, marca, preco, descricao, codigo_barra, imagem, setor) 
            VALUES ('$nome', '$marca', '$preco', '$descricao', '$codigo_barra', '$imagem', '$setor')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto registrado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}
?>
