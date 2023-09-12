<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <?php
   
    $number1 = "";
    $number2 = "";
    $result = "";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        
        $result = ($number1 > $number2) ? $number1 : $number2;
    }
    ?>

    <form method="POST" action="comparison_tool.php">
        <p><label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" step="0.01" value="<?php echo $number1; ?>" required>
        </p>
        
        <p>
        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" step="0.01" value="<?php echo $number2; ?>" required>
        </p>
        <input type="submit" value="Compare">
    </form>
    <small><strong>Note:</strong>If you use decimal number instead of integer in this case input takes at most 2 decimal point</small>
    <?php
    
    if ($result !== "") {
        echo "<p>The larger number is: $result</p>";
    }
    ?>
</body>
</html>
