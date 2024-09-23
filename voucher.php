<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
        }

        h1 {
            color: black;
            margin-bottom: 5px;
            text-align: center;
            padding-top: 20px;
        }

        div.voucher {
            background-color: #d2f5a3;
            height: 200px;
            width: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        div.voucher h2 {
            margin: 0;
            color: black;
        }

        .back-button {
            background-color: blue; /* Cor do botão */
            color: white; /* Cor do texto */
            border: none; /* Remove bordas */
            border-radius: 5px; /* Bordas arredondadas */
            padding: 10px 20px; /* Espaçamento interno */
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
            margin-top: 20px; /* Espaço acima do botão */
            font-size: 16px; /* Tamanho da fonte */
        }
    </style>
</head>
<body>
    <h1>Voucher</h1>

    <?php 
    error_reporting(E_ERROR);
    
    if(isset($_POST["submit"]) && !empty($_POST["nome_"]) && !empty($_POST["cpf_"])){
        include_once('conexao.php');
        $nome_ = $_POST["nome_"];
        $cpf_ = $_POST["cpf_"];

        $sql_consulta = "SELECT * FROM dados WHERE nome = '$nome_' AND cpf = '$cpf_'" ;
        $result = $conn -> query($sql_consulta);

        if(mysqli_num_rows($result) < 1){
            echo "<h2>Login não encontrado, voltando para a página inicial</h2>";
        }
        else {
            $view_ = mysqli_fetch_array($result);
            echo "<div class='voucher'>";
            echo "<h2>$view_[voucher]</h2>";
            echo "</div>";
        }
    }
    else {
        header("Location: index.php");
    }
    ?>

    <button class="back-button" onClick="history.go(-1); return false;">Voltar</button>
</body>
</html>
