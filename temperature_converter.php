<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversionType = $_POST["conversionType"];

        if ($conversionType == "celsiusToFahrenheit") {
            $convertedTemperature = celsiusToFahrenheit($temperature);
            $resultUnit = "Fahrenheit";
        } elseif ($conversionType == "fahrenheitToCelsius") {
            $convertedTemperature = fahrenheitToCelsius($temperature);
            $resultUnit = "Celsius";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" required step="0.01"><br>

        <label for="conversionType">Select Conversion:</label>
        <select name="conversionType">
            <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
        </select><br>

        <input type="submit" value="Convert">
    </form>

    <?php
    if (isset($convertedTemperature)) {
        echo "<p>The converted temperature is: $convertedTemperature $resultUnit</p>";
    }
    ?>

</body>
</html>
