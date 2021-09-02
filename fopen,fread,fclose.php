<?php

// fopen   RETURN RESOURSE 
// IF FILE  IS NOT AVAILABLE IT RETURN False
// fread return content of source 
// if not available it return number of character

$fptr=fopen('file.html','r');
echo $fptr;
$content=fread($fptr,filesize('file.html'));


fclose($fptr);
echo $content;



?>