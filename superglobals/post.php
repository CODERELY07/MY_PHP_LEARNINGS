<?php

    //check if server request method is post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //store input in fname variable
        //htmlscpecialchars for security
        $fname =htmlspecialchars($_POST['fname']);

        //check if input is empty
        if(empty($fname)){
            echo "Name is empty";
        }else{
            //print fname value if its not empty
            echo $fname;
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
</body>
</html>