<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>
    <form method="post" action="comparison_tool.php">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required><br><br>
        
        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = ($num1 > $num2) ? $num1 : $num2;
        echo "<p>The larger number is: $result</p>";
    }
    ?>
</body>
</html>
