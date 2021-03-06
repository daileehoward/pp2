<?php
    // Step 1
    /*
     * Names: Dailee Howard and Ruslan Bessarab
     * Date: January 15th, 2021
     * Title: Pair Program 2
     * File: index.php
     * URL: https://dhoward.greenriverdev.com/SDEV328/pp2/index.php
     */
?>

<!-- Step 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
    <h1>Pair Program 2</h1>

    <?php
        // Step 3
        include "functions.php";

        // Step 1
        echo "<h3>PHP Array Practice</h3>";

        // Step 2
        $numbers = array(7, 9, 8, 9, 8, 8, 6);

        printArr($numbers);

        // Step 4
        $largestValue = largest($numbers);
        echo "<br>Largest Value: $largestValue";

        // Step 5
        $alteredNumbers = removeDups($numbers);
        printArr($alteredNumbers);
    ?>
</body>
</html>