<?php
$servidor = 'localhost';
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
