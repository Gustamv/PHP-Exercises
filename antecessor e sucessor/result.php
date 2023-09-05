<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
    <h1>Resultado Final</h1> <br>
    <?php 
    // Verifica se o valor do campo "numero" está definido
    if(isset($_GET["numero"])){
        $n = $_GET["numero"];
        $a = $n - 1;
        $s = $n + 1;

        echo "O número escolhido foi <strong>$n</strong><br>";
        echo "Seu antecessor é $a<br>";
        echo "Seu sucessor é $s<br>";
    } else {
        echo "Número não informado.";
        
    }
    ?>
    <br>
    <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>
