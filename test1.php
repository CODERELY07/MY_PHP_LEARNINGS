<?php
    //variadic arguments
    function myname($lastname, ...$firstname){

        $len = count($firstname);
        $txt = "<ul>";

        for($i = 0; $i < $len;$i++){
            $txt = $txt . "<li>" . "HI, " . $lastname . " " .$firstname[$i] . "</li>";
        }
        $txt = $txt . "</ul>";

        return $txt;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variadic Arguments</title>
</head>
<body>
    <?php 
        $familyName = myname("Terex", "tyro","lala");

        echo $familyName;
    ?>
</body>
</html>
