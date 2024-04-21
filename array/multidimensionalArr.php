<?php
    //Multidimensional Arrays
    //A multidimensional array is an array containing one or more arrays.

    //Two dimnestional Array
    $students = array(
        array("Mark","Male",19),
        array("Jay","Male",20),
        array("Leni","Female",18)
    );

    echo "Name: " . $students[0][0] . " Gender: " . $students[0][1] . " Age: " . $students[0][2] . "<br>";
    echo "Name: " . $students[1][0] . " Gender: " . $students[1][1] . " Age: " . $students[1][2] . "<br>";
    echo "Name: " . $students[2][0] . " Gender: " . $students[2][1] . " Age: " . $students[2][2] . "<br>";
    
    for($row = 0; $row < 3; $row++){
        echo "<p><b> Row number $row</b></p>";
        echo "<ul>";
            for($col = 0; $col < 3; $col++){
                echo $students[$row][$col] . "</li>"; 
            }
        echo "</ul>";
    }
?>