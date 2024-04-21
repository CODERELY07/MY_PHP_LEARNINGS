<?php
    //Associative Array used named keys not an index
    //the first is the keyname and then the value
    echo "<h1>Associative Array</h1>";
    $associativeArr = array("grades" => 97, "Name" => "Mark","Gender"=>"Male");
    var_dump($associativeArr);

    //to access associative array used the name keys
    echo "<h2>Access Associative Array</h2>";
    echo $associativeArr["grades"];

    //change associative array
    echo "<h2>Change Associative Array</h2>";
    $associativeArr["grades"] = 98;
    echo $associativeArr["grades"];

    //loops through associative array
    echo "<h2>Loop Associative Array</h2>";
    foreach($associativeArr as $key => $value){
        echo "Keys: " . $key . "<br> Value: " . $value . '<br>';
    }

    //you can also create shorter syntax in array
    echo "<h2>Shorter Syntax Associative Array</h2>";
    $short = ["message" => "Hello World", "Number" => 22];
    var_dump($short);

    //you can mix array keys
    echo "<h2>Mixing Array Keys</h2>";
    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";

    var_dump($myArr);

    echo "<h2>Update array Using for loop</h2>";
    //update array items using forloop
    $cars = array("Volvo","BMW","TOYOTA");
    foreach($cars as &$x){
        $x = "Ford";
    }
    //don't forget to unset
    unset($x);
    var_dump($cars);
  
?>