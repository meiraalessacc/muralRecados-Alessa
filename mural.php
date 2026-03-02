<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Mural</title>
</head>
<body>

    <div class="topo">
        <h1>Veja o que os outros alunos estão dizendo</h1>
        <p class="subtitulo">Um espaço para compartilhar mensagens</p>
    </div>

<?php
include "conexao.php";


if(isset($_POST["nome"]) && isset($_POST["mensagem"])){
    $nome = $_POST["nome"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO recados (nome,mensagem) VALUES('$nome','$mensagem')";

    if($conexao->query($sql) != TRUE){
        echo "<p>Erro: ".$conexao->error."</p>";
    }
}


$sql = "SELECT * FROM recados ORDER BY id DESC";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo '<div class="mural-f">';
    while ($linha = $resultado->fetch_assoc()) {
        echo '<div class="mural-mensagem">';
        echo '<p class="usuario"><strong>Usuário: ' . $linha["nome"]. '</strong></p>';
        echo '<p class="recado"><strong>Mensagem: </strong>' . $linha["mensagem"] . '</p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p class="vazio">Ainda não há mensagens. Seja a primeira pessoa a escrever.</p>';
}
?>

</body>
</html>