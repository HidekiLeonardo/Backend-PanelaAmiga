<?php
include_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['E-mail']) ? $_POST['E-mail'] : '';
    $senha = isset($_POST['Senha']) ? $_POST['Senha'] : '';
    $nome = isset($_POST['Nome']) ? $_POST['Nome'] : '';
    $dataNascimento = isset($_POST['Datanascimento']) ? $_POST['Datanascimento'] : '';
    $estado = isset($_POST['campo_estado']) ? $_POST['campo_estado'] : '';
    $endereco = isset($_POST['endereço']) ? $_POST['endereço'] : '';
    $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
    $complemento = isset($_POST['complemento']) ? $_POST['complemento'] : '';
    $telefone = isset($_POST['campo_contato']) ? $_POST['campo_contato'] : '';

    $sql = "INSERT INTO userPanelaAmiga (email, senha, nome, data_nascimento, estado, endereco, numero, complemento, telefone)
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
