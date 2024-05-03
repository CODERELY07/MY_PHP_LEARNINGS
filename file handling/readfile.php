<?php
    //read file in the browser
    //also output string
    echo readfile("web.txt");
    echo "<br>";
    //fopen

    $myfile = fopen("web.txt", "r") or die("Unable to open file!");
    //complete text
    // echo fread($myfile, filesize("web.txt"));
    echo "<br>";
    //single line
    // echo fgets($myfile);

    //to read the file line by line until end of the file
    //feof means end of file has been reach
    // while(!feof($myfile)){
    //     echo fgets($myfile) . "<br>";
    // }

    //output one character until end of file
    while(!feof($myfile)){
        echo fgetc($myfile) . "<br>";
    }
    fclose($myfile);

?>