<?php
echo 'welcome to database';

/*
// sql is structed query langauge
// ways to connect mysql
// 1 -mysql extension
//2-Pdo
mysql i extension has two ways
1-procedural
2- object oriented
1st procedural

mysql extension is very important

connecting to database

*/
// connecting variable
$servername ='localhost';
$username='root';
$password='';

// but password is not blank in server 
// because in server  we have our secret password

// create a connection object
$conn= mysqli_connect($servername,$username,$password);
echo ' <br> connection  is successfull';
// die if connection is not successfull


?>