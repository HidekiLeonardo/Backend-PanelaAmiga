<?php
include_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['E-mail'];
    $senha = $_POST['Senha'];
    $nome = $_POST['Nome'];
    $dataNascimento = $_POST['Datanascimento'];
    $estado = $_POST['campo_estado'];
    $endereco = $_POST['endereço'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['campo_contato'];

    
    $sql = "INSERT INTO userpanelaamiga (email, senha, nome, data_nascimento, estado, endereco, numero, complemento, telefone)
            VALUES (:email, :senha, :nome, :dataNascimento, :estado, :endereco, :numero, :complemento, :telefone)";
    $stmt = $conexao->prepare($sql);

    try {
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':complemento', $complemento);
        $stmt->bindParam(':telefone', $telefone);

        $stmt->execute();
        echo "Dados registrados com sucesso!";
    } catch (PDOException $e) {
        echo "Erro na inserção: " . $e->getMessage();
    }
} else {
    echo "Erro: Método não suportado.";
}
?>
