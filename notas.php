<?php
$aluno = $_POST ['aluno'];
$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];

$linha = $aluno . " | " . $nota1 . " | " . $nota2 . " | " . PHP_EOL;

file_put_contents('notas.txt', $linha, FILE_APPEND);

header('location: table.php');
exit;
?>