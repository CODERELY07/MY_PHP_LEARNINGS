<?php
    echo "<h1> Remove Array Item </h1>";
    //array_splice you can specify where to start and how many items you want to delete
    $items = array("Keyboad","Mouse","Monitor");
    var_dump($items);
    echo "<br>";
    echo "<h2> Using array_splice </h2>";
    array_splice($items,1,2);
    var_dump($items);

    array_push($items, "Mouse","Monitor");
    echo "<h2> Using Unset </h2>";
    //we can specify the index
    unset($items[0],$items[2]);
    var_dump($items);

    echo "<h2> Remove Item From an Associative Array</h2>";
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    unset($cars["model"]);
    var_dump($cars);
    echo "<h2> Using the array_diff Function</h2>";
    //array_diff() function to remove items from an associative array.
    //This function returns a new array, without the specified items.
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $newarray = array_diff($cars, ["Mustang", 1964]);
    var_dump($newarray);
    var_dump($cars);

    echo "<h2>Remove the last item </h2>";
    //remove the last item
    array_pop($cars);
    var_dump($cars);

    echo "<h2> Remove the first item</h2>";
    //remove the first item
    array_shift($cars);
    var_dump($cars);
?>