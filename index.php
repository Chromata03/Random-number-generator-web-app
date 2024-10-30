<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random number generator web app</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <p>How many Dice do you want to roll?</p>
        <input type="number" id="dice" name="dice" min="1" max="20" required>
        <p>How many sides of die?</p>
        <select id="side" name="sides" required>
            <option selected disabled value>Select Number of Sides</option>
            <option value="4">4</option>
            <option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="20">20</option>
        </select>
        <br /><br />
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['dice']) != null && isset($_POST['sides']) != null) {
            $die = $_POST['dice'];
            $side = $_POST['sides'];

            for ($i = 1; $i <= $die; $i++) {
                echo "dice no." . $i . " = " . rand(1, $side) . "<br/>";
            }
        }
    }
    ?>

</body>

</html>