<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Mensagem de sucesso</title>
</head>
<body>
    <h1 class="text-center fw-bold mb-4 mt-5" style="color: #6a0dad; font-size: 2.5rem; text-align:center">
        Sucesso ao inserir o filme <?= htmlspecialchars($_GET['nome']); ?>!
    </h1>
    <img src="../assets/confirmation.svg" class="img-fluid border" alt="Confirmation Image" style="width: 350px; height: auto;">
        <div class="info border rounded p-4 bg-light mt-4">
            <h3 class="text-primary">Informações do Filme</h3>
            <p><strong>Ano de lançamento:</strong> <?= htmlspecialchars($_GET['ano']); ?></p>
            <p><strong>Nota:</strong> <?= htmlspecialchars($_GET['nota']); ?></p>
            <p><strong>Gênero:</strong> <?= htmlspecialchars($_GET['genero']); ?></p>
        </div>
</body>
</html>
