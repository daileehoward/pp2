<?php
    /*
     * Names: Dailee Howard and Ruslan Bessarab
     * Date: January 15th, 2021
     * File: index.php
     * URL:
     * Description:
     */
?>

<!-- Step 1 -->
<?php
    echo "<h1>PHP Array Practice</h1>";
?>

<!-- Step 2 -->
<?php
    $numbers= array(7, 9, 8, 9, 8, 8, 6);

    function printArr($array)
    {
        foreach ($array as $item)
        {
            echo "<p>$item</p>";
        }
    }

    printArr($numbers);
?>
