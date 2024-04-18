<?php
    
    echo "<h1>PHP Function</h1>";
    //function with arguments
    //create function with parameters
    echo "<h2> Function with Arguments</h2>";
    function studentInfo($name, $age,$gender){
        echo "<br><br>Hi, My name is " . $name . " I am " . $age . " Years old </br> Gender: " . $gender;
    }

    //call function with arguments
    //the parameters need to be alingn to the arguments
    studentInfo("Mark",19,"Male");
    studentInfo("Andrie",19,"Male");
    studentInfo("France",20,"Female");

    echo "<h2> Function with Default Argument</h2>";
    //function with default argument value
    function defaultVal($nationality = "Filipino"){
        echo " <br> My nationality is: " . $nationality . "<br>";
    }
    //call function 
    //when the function call with parameters and no arguments but have default value , the default will be the output
    defaultVal();
    defaultVal("Chinese");
    defaultVal("Japanese");

    echo "<h2> Function with Return Value</h2>";
    //function with return
    function add($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    //call the function with return value
    //return value will not output if you don't echo it
    $sum = add(20,40);
    echo "$sum <br>";
    $sum = add(40,30);
    echo "$sum <br>";
    $sum = add(20,90);
    echo "$sum <br>";

    //passing argument with reference
    //when we call the function it will return some values or change the argument variable and after function is executed the function will reset
    //by using reference the variable will be argument will be change and also he variable
    
    echo "<h2> Function with Reference</h2>";
    function change(&$value){
        $value += 20;
    }

    //try to remove the '&' to see the difference
    $num = 100;
    change($num);
    echo $num;

    //variable with number of arguments
    //by using ... operator for the function , it accepts an unknown number of arguments
    //called variadic function argument and becomes an array
    
    echo "<h2> Function with Variadic Argument</h2>";
    function addNumbers(...$x){
        $sum = 0;
        //count is to determine the length of an array
        $len = count($x);

        for($i = 0; $i < $len; $i++){
            $sum += $x[$i];
        }
        return $sum;
    }

    $sumOfArray = addNumbers(20,43,12,34,12,10);
    echo $sumOfArray; 

    //variadic arguments with also another arguments
    //one variadic only and it has to be the last argument
    echo "<h2> Function Variadic Argument with another argument</h2>";
    function studentSection($section, ...$fullname){
        $txt = "";
        $len = count($fullname);

        for($i = 0; $i < $len; $i++){
            $txt = $txt ."Name: " . $fullname[$i] . "<br> Section: " . $section . "<br><br>";
        }
        return $txt;
    }

    echo "<br>";
    $studentInfo = studentSection("BSIT-1A", "Emman","CoderEly","Frank", "Andrie","Dobert","Frances");
    echo $studentInfo;

    //function specify return type
    echo "<h2>Specify Return Type</h2>";
    function returnInt($num1,$num2) : int{
        return $num1 + $num2;
    }

    echo returnInt(20.2,30.5);
?>


