<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <title>Comentar</title>
</head>
<body>
     <div class="topo">
        <h1>Deixe seu recado</h1>
        <p class="subtitulo">Compartilhe suas mensagens com todos seus colegas</p>
    </div>
    <div class="mensagem-box">
<form method="POST" action="mural.php">
    <div class="inputs">
    <label class="texto t1">Nome:</label>
    <input type="text" name="nome" required class="nome" >

    <br><br>

    <label class="texto">Mensagem:</label>
    <textarea name="mensagem" rows="4" cols="40" required class="mensagem"></textarea>

</div>
   
    <br><br>
    <div class="botoes">
            <input type="submit" value="Enviar" class="btn">
</div>

</form>
    </div>
 
</body>

</html>