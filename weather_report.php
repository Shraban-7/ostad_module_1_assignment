<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
</head>

<body>
    <h1>Weather Report</h1>

    <?php

    $temperature = 0;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temperature = $_POST["temperature"];


        if ($temperature <= 0) {
            echo "<p>It's freezing ❄️❄️❄️!</p>";
        } elseif ($temperature <= 20) {
            echo "<p>It's cool 🌨️🌨️🌨️.</p>";
        } else {
            echo "<p>It's warm🔥🔥🔥.</p>";
        }
    }
    ?>

    <form method="POST" action="weather_report.php">
        <label for="temperature">Enter Temperature (°C):</label>
        <input type="number" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>

        <input type="submit" value="Check Weather">
    </form>
</body>

</html>