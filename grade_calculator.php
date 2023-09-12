<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>

    <?php

    $score1 = "";
    $score2 = "";
    $score3 = "";
    $average = "";
    $letter_grade = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];


        $average = ($score1 + $score2 + $score3) / 3;


        if ($average >= 90) {
            $letter_grade = "A";
        } elseif ($average >= 80) {
            $letter_grade = "B";
        } elseif ($average >= 70) {
            $letter_grade = "C";
        } elseif ($average >= 60) {
            $letter_grade = "D";
        } else {
            $letter_grade = "F";
        }
    }
    ?>

    <form method="POST" action="grade_calculator.php">
        <p> <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" id="score1" value="<?php echo $score1; ?>" required>
        </p>
        <p>
            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" id="score2" value="<?php echo $score2; ?>" required>
        </p>

        <p>
            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" id="score3" value="<?php echo $score3; ?>" required>
        </p>

        <input type="submit" value="Calculate">
    </form>

    <?php

    if ($average !== "") {
        $average = sprintf("%0.2f", $average);
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $letter_grade</p>";
    }
    ?>
</body>

</html>