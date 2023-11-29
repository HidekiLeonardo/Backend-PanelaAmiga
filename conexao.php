<?php
$servidor = '127.0.0.1';
$nomeUsuario = 'root';
$senha = '';
$nomeBanco = 'bdpanelaamiga';

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$nomeBanco", $nomeUsuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
