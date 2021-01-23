<?php
    // Step 3
    function printArr($array)
    {
        foreach ($array as $item)
        {
            echo "<p>$item</p>";
        }
    }

    // Step 4
    function largest($array)
    {
        sort($array);
        return $array[sizeof($array) - 1];
    }

    // Step 5
    function removeDups($array)
    {
        return array_unique($array);
    }