<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even Odd Checker</h1>
    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                echo "<p>$number is even.</p>";
            } else {
                echo "<p>$number is odd.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
