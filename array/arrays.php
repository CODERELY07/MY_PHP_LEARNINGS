<?php
    //array stores multiple value in single variable
    //array declaration
    
    echo "<h1>Array</h1>";
    echo "<h2>Create Array</h2>";
    $myArr = array("Hello","hi","World");
    
    //access array using index its start from 0, Hello - 0 , hi - 1 , World - 2
    echo $myArr[0];
   
    //array can have hold many values even suuch as variable,literals, array and even a function
    echo "<h2>Function in an Array</h2>";
    
    function myFunction(){
        echo "<br>Hello world!";
    }

    $arrMultiple = array("HI", 5, ["one","two","three"], myFunction());

    //store the array function
    $myFunction = $arrMultiple[3];

    echo $myFunction;

    
    //count is an array function to determine the array length
    echo "<h2>Array Count Function</h2>";
    echo count($arrMultiple);
?>