<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <?php
    $temperature = 15;

    if ($temperature < 0) {
        $message = "It's freezing!";
    } elseif ($temperature >= 0 && $temperature < 15) {
        $message = "It's cool.";
    } elseif ($temperature >= 15) {
        $message = "It's warm.";
    }

    echo "<h1>Weather Report</h1>";
    echo "<p>Temperature: " . $temperature . "°C</p>";
    echo "<p>" . $message . "</p>";
    ?>
</body>
</html>
