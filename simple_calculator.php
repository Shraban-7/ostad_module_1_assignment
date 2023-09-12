<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator</h1>

    <?php

    $num1 = "";
    $num2 = "";
    $operation = "add";
    $result = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];


        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $result = sprintf("%.02f", $result);
                } else {
                    $result = "Undefined (division by zero)";
                }
                break;
            default:
                $result = "Invalid operation";
        }
    }
    ?>

    <form method="POST" action="simple_calculator.php">
        <p>
            <label for="num1">Enter Number 1:</label>
            <input type="number" name="num1" id="num1" step="0.01" value="<?php echo $num1; ?>" required>
        </p>
        <p>
            <label for="num2">Enter Number 2:</label>
            <input type="number" name="num2" id="num2" step="0.01" value="<?php echo $num2; ?>" required>
        </p>


        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation">
            <option value="add" <?php if ($operation == "add") echo "selected"; ?>>Addition (+)</option>
            <option value="subtract" <?php if ($operation == "subtract") echo "selected"; ?>>Subtraction (-)</option>
            <option value="multiply" <?php if ($operation == "multiply") echo "selected"; ?>>Multiplication (*)</option>
            <option value="divide" <?php if ($operation == "divide") echo "selected"; ?>>Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>
    <small><strong>Note:</strong>If you use decimal number instead of integer in this case input takes at most on 2 decimal point</small>
    <?php



    if ($result !== "") {
        echo "<p>Result: $result</p>";
    }
    ?>
</body>

</html>