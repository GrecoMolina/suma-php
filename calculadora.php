<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="get">
        Número 1: <input type="number" name="num1"><br><br>
        Número 2: <input type="number" name="num2"><br><br>
        Operación:
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operacion = $_GET['operacion'];
        $resultado = '';

        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                }
                break;
            
        }

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>
</html>
