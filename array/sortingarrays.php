<?php

    $sort = array("Hi","Hello","Mine");
    echo "<h1> Sort Array </h1>";
    //sort array 
    sort($sort);
    var_dump($sort);

    echo "<h2> Sort Array Reverse </h2>";
    //sort reverse array
    rsort($sort);
    var_dump($sort);

    $sortAs = array("me" => "Mark", "car" => "Ford", "age" => 19);
    //sort associative array value
    echo "<h2> Sort Associative Array Value</h2>";
    asort($sortAs);
    var_dump($sortAs);

    //sort associtive array keys
    echo "<h2> Sort Associative Array Keys</h2>";
    ksort($sortAs);
    var_dump($sortAs);

    //sort assositive array reverse
    //array value
    echo "<h2> Sort Associative Array Value Reverse </h2>";
    arsort($sortAs);
    var_dump($sortAs);
    //key value
    echo "<h2> Sort Associative Array Key Reverse</h2>";
    krsort($sortAs);
    var_dump($sortAs);
?>