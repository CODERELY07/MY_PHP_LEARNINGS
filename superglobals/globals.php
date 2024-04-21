<?php
    //global scope can't access local scope and vice versa to achive the we need to use globals syntax

    echo "<h1> Globals </h1>";

    $x = 90;

    echo "<h2> Access Global Scope from Local Scope </h2>";
    function myFunction(){
        echo $GLOBALS['x'];
    }

    myFunction();

    echo "<br><br>";

    echo "<h2> Access Local Scope from Global Scope </h2>";
    // to access local scope 
    function localFunction(){
        $GLOBALS['x'] = 100;
    }

    localFunction();
    echo $GLOBALS['x'];
    echo "<br><br>";
    echo $x;

    echo "<h2> global Syntax </h2>";
    //you can also use this syntax
    function otherFunction(){
        global $x;
        echo $x;
    }

    otherFunction();

?>