<?php
// Configuração do banco de dados
$servidor = 'localhost';
$nomeUsuario = 'root';
$senha = ''; // Coloque a senha do seu banco, se houver
$nomeBanco = 'bdpanelaamiga';

try {
    // Conexão com o banco de dados utilizando PDO
    $conexao = new PDO("mysql:host=$servidor;dbname=$nomeBanco", $nomeUsuario, $senha);

    // Define o modo de erro do PDO como exceção
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

        // Prepara a query SQL para inserção de dados
        $sql = "INSERT INTO userPanelaAmiga (email, senha, nome, data_nascimento, estado, endereco, numero, complemento, telefone)
                VALUES (:email, :senha, :nome, :dataNascimento, :estado, :endereco, :numero, :complemento, :telefone)";
        $stmt = $conexao->prepare($sql);

        // Executa a query, passando os valores dos parâmetros
        $stmt->execute(array(
            ':email' => $email,
            ':senha' => $senha,
            ':nome' => $nome,
            ':dataNascimento' => $dataNascimento,
            ':estado' => $estado,
            ':endereco' => $endereco,
            ':numero' => $numero,
            ':complemento' => $complemento,
            ':telefone' => $telefone
        ));

        // Retorna uma mensagem de sucesso
        echo "Dados registrados com sucesso!";
    } else {
        echo "Erro: Método não suportado.";
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
