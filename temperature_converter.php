<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
</head>

<body>
    <h1>Temperature Converter</h1>

    <?php

    $result = "";
    $input_temperature = "";
    $conversion_type = "c_to_f";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input_temperature = $_POST["temperature"];
        $conversion_type = $_POST["conversion_type"];


        if ($conversion_type == "c_to_f") {

            $result = ($input_temperature * 9 / 5) + 32;
        } else {

            $result = ($input_temperature - 32) * 5 / 9;
        }
    }
    ?>

    <form method="POST" action="temperature_converter.php">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" step="0.1" value="<?php echo $input_temperature; ?>" required>

        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" id="conversion_type">
            <option value="c_to_f" <?php if ($conversion_type == "c_to_f") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="f_to_c" <?php if ($conversion_type == "f_to_c") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>

        <input type="submit" value="Convert">
    </form>

    <?php

    if ($result !== "") {
        if (strpos($result, '.') !== false) {
            $result = sprintf("%.1f", $result);
        }

        echo "<p>Result: $input_temperature ";
        if ($conversion_type == "c_to_f") {
            echo "(°C) = $result (°F)</p>";
        } else {
            echo "(°F) = $result (°C)</p>";
        }
    }
    ?>
</body>

</html>