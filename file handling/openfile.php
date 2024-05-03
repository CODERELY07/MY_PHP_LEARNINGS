<?php

//when use fopen() on a file that does not exist it will create it
$myfile = fopen("openfile.txt", "w") or die("Unable to open file!");

$txt = "Mark Ely\n";
//write file
fwrite($myfile, $txt);
//add another txt to the file
$txt = "Hi";
fwrite($myfile, $txt);

//read file
$readFile = fopen("openfile.txt", "r") or die("Unable to open file!");

//output file 
while(!feof($readFile)){
    echo fgets($readFile) . "<br>";
}
// while(!feof($readFile)){
//     echo fgetc($readFile) . "<br>";
// }
fclose($myfile);

// using 'w' it will erease the existing data 
// use 'a' to aappend or add new data without deleting the old one

$myFileApp = fopen("newfile.txt", 'a') or die("Unable to open file!");
$text = "Donald Nac\n";
fwrite($myFileApp, $text);
$text = "Mark Nac\n";
fwrite($myFileApp, $text);

//read file
$readFileApp = fopen("newfile.txt", "r") or die("Unable to open file!");

//output file 
while(!feof($readFileApp)){
    echo fgets($readFileApp) . "<br>";
}
fclose($readFileApp);