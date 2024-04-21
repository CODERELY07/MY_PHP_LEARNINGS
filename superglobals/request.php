<?php
    //request is containning data from $_GET, $_POST, and $_COOCKIE

    //The $_REQUEST superglobal in PHP provides a single interface to access data from various sources (GET, POST, and Cookies). In short it the function of request is all of the said various sources. 

    //its essential to be coutious for security purpose 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $name = htmlspecialchars($_REQUEST['fname']);

            if(empty($name)){
                echo "The name is empty";
            }else{
                echo $name;
            }
        }
    ?>
</body>
</html>