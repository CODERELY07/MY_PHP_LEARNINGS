<?php

    echo "<h1> ARRAY INDEX </h1>";
    //index arrays, by default array start with index
    $array = array(1,2,3,4,5);

    echo "<h2> ACCESS ARRAY INDEX </h2>";
    //access array with index
    echo $array[0];
    
    echo "<h2> ADD ARRAY </h2>";
    //add array using index;
    $array[] = 6;
    var_dump($array);

    echo "<h2> CHANGE ARRAY VALUE </h2>";
    //change array value using index
    $array[0] = "I change it";
    echo $array[0];

    echo "<h2> LOOP THROUGH ARRAY </h2>";
    //loop the array using for each
    foreach($array as $arr){
        echo $arr . "<br>";
    }
    echo "<h2> ADD ARRAY USING ARRAY PUSH </h2>";
    //adding array using array_push
    array_push($array, "PUSH");
    var_dump($array);
?>