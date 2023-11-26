<?php
// Verifica se os dados foram recebidos corretamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados enviados pelo formulário de registro
    $email = $_POST['E-mail'];
    $senha = $_POST['Senha'];
    $nome = $_POST['Nome'];
    $dataNascimento = $_POST['Datanascimento'];
    $estado = $_POST['campo_estado'];
    $endereco = $_POST['endereço'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['campo_contato'];

    // Concatena os dados em uma string
    $dados = "E-mail: $email\nSenha: $senha\nNome: $nome\nData de Nascimento: $dataNascimento\nEstado: $estado\nEndereço: $endereco\nNúmero: $numero\nComplemento: $complemento\nTelefone: $telefone\n\n";

    // Caminho do arquivo onde os dados serão salvos
    $caminhoArquivo = 'dados_registrados.txt';

    // Abre o arquivo (ou cria se não existir) para escrita
    $arquivo = fopen($caminhoArquivo, 'a');

    // Escreve os dados no arquivo
    if ($arquivo) {
        fwrite($arquivo, $dados);
        fclose($arquivo);
        echo "Dados registrados com sucesso!";
    } else {
        echo "Erro ao abrir o arquivo.";
    }
} else {
    echo "Erro: Método não suportado.";
}
?>
