<?php
    echo "<h1> ADD ITEMS </h1>";
    $name = array("mark","juan","nic");
    //add items to existing array
    $name[] = "Dave";
    var_dump($name);

    echo "<h2> Associative Array </h2>";
    $info = array("Name"=>"Mark", "Gender" => "Male", "Grades"=> 99);
    //add items to existing associative array
    $info["position"] = "Student";
    var_dump($info);

    //add mulitple array items
    //using array push to add multiple items
    echo "<h2> Add multiple items in an Array </h2>";
    array_push($name, "Riben", "John", "Peter");
    var_dump($name);

    //add multiple Items to Associative Arrays
    echo "<h2> Add multiple items to Associative Array </h2>";
    $info += ["favorite-color" => "Blue", "Birth" => "September 26 2004"];
    var_dump($info);
?>