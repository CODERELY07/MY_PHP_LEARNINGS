<?php
    // Regular expression is used to perform all types of text search and text replace operations
    // Delimiter - / pattern that is being searched for
    // Modifier i - Makes the search case insensitive
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form to input search query -->
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <input type="search" name="search">
        <input type="submit">
    </form>
     <?php

        if($_SERVER['REQUEST_METHOD'] == "GET"){
            // Getting the search pattern from the user input and making it case insensitive
            $pattern = '/'.$_GET['search'].'/i';
            // Array of strings to search through
            $str = [
                "You are searching ?",
                "How can you do it",
                "Can you make it"
            ];  

            $found = false; // Flag to check if any match is found

            // Loop through each string in the array
            foreach($str as $s){
                // Check if the search pattern matches any part of the current string
                if(preg_match_all($pattern, $s)){
                    // If a match is found, echo the string containing the match
                    echo $s . '<br>';
                    $found = true; // Set flag to true indicating a match is found
                }
            }

            // If no match is found after looping through all strings
            if(!$found){
                echo "Sorry not found <br>"; // Display "Sorry not found"
            }
            
        }
     ?>
</body>
</html>
