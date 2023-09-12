<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Checker</title>
</head>

<body>
    <h1>Even or Odd Checker</h1>

    <?php

    $number = "";
    $result = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $number = $_POST["number"];


        if ($number & 1) {
            $result = "Odd";
        } else {
            $result = "Even";
        }
    }
    ?>

    <form method="POST" action="even_odd_checker.php">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" value="<?php echo $number; ?>" required>

        <input type="submit" value="Check">
    </form>

    <?php

    if ($result !== "") {
        echo "<p>The number $number is $result.</p>";
    }
    ?>
</body>

</html>