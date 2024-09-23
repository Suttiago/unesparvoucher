<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://www.unespar.edu.br/a_reitoria/administracao/administracao-superior/assessoria-comunicacao/logo-branca-unespar-para-usar-sobre-imagens-ou-fundos-escuros-verdes-ou-azuis.png" alt="Unespar" width="30" height="30" class="d-inline-block align-text-top">
            Voucher
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Início</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="h3 text-center">Voucher</h1>
    <form method="post" action="voucher.php">
        <div class="form-group" >
            <label for="nome_" style="font-size: 20px;">Nome: </label>
            <input type="text" class="form-control" name="nome_" id="nome_" placeholder="Digite seu nome" style="height: 50px;"   >
        </div>
        <div class="form-group">
            <label for="cpf_" style="font-size: 20px;">CPF (Somente números): </label>
            <input type="text" class="form-control" name="cpf_" id="cpf_" placeholder="xxxxxxxxxxx" style="height: 50px;">
        </div>
        <div class="form-group">
            <label for="datanasc_" style="font-size: 20px;">Data de nascimento: </label>
            <input type="date" class="form-control" name="datanasc_" id="datanasc_" style="height: 50px;">
        </div>
        <br>
        <button type="submit" name="submit" value="enviar" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
