<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Select operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p style='color:red;'>Division by zero is not allowed.</p>";
                }
                break;
            default:
                echo "<p style='color:red;'>Invalid operation selected.</p>";
                break;
        }

        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
