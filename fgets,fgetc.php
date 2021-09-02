<?php
// fgets read file line by line

// fgetc read file charter by charter
// if we want to raed file from specfic cahrater some othher charater it is very helpful

$fptr=fopen('file.txt','r');
//echo fgetc($fptr);
while ($a=fgetc($fptr)) {
    
    echo $a;
    if ($a=='h') {
       break;
    }
    
}
fclose($fptr);

?>