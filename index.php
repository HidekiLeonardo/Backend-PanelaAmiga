<?php
// Verifica se os dados foram recebidos corretamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados enviados pelo formulário
    $email = $_POST['E-mail'];
    $senha = $_POST['Senha'];
    $nome = $_POST['Nome'];
    $dataNascimento = $_POST['Datanascimento'];
    $estado = $_POST['campo_estado'];
    $endereco = $_POST['endereço'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['campo_contato'];

    // Aqui você pode realizar a lógica de processamento com os dados recebidos
    // Por exemplo, salvar no banco de dados, enviar por e-mail, etc.

    // Responde com uma mensagem de confirmação (simulada)
    $response = "Dados recebidos com sucesso!\nE-mail: $email\nSenha: $senha\nNome: $nome\nData de Nascimento: $dataNascimento\nEstado: $estado\nEndereço: $endereco\nNúmero: $numero\nComplemento: $complemento\nTelefone: $telefone";
    echo $response;
} else {
    echo "Erro: Método não suportado.";
}
?>