<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h2>Calculadora PHP</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Número 1" required>
            <select name="operacao">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" placeholder="Número 2" required>
            <button type="submit">Calcular</button>
        </form>
        <h3>Resultado:</h3>
        <p>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operacao = $_POST['operacao'];
                    $resultado = 0;
    
                    switch ($operacao) {
                        case '+': $resultado = $num1 + $num2; break;
                        case '-': $resultado = $num1 - $num2; break;
                        case '*': $resultado = $num1 * $num2; break;
                        case '/': $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: Divisão por zero"; break;
                    }
    
                    echo $resultado;
                }
            ?>
        </p>
    </div>
</body>
</html>
