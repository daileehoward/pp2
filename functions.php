<!-- Step 3 -->
<?php
    function printArr($array)
    {
        foreach ($array as $item)
        {
            echo "<p>$item</p>";
        }
    }
?>

<!-- Step 4 -->
<?php
    function largest($array)
    {
        sort($array);
        return $array[sizeof($array) - 1];
    }
?>
