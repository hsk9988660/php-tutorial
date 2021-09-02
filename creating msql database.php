<?php
echo 'welcome to database';

// connecting variable
$servername ='localhost';
$username='root';
$password='';


// but password is not blank in server 
// because in server  we have our secret password

// create a connection we use function  mysqli_connect() to connect php to database
$conn= mysqli_connect($servername,$username,$password);
echo ' <br> connection  is successfull now';
// die if connection is not successfull

// creating a db using php script 
// we must use function mysqli_querry() which create database in mysql

// we have to use two parameter in mysqli_querry(connection variable,our own variable which want to create database)
// if we want to find error we use function mysqli_error
$sql='CREATE DATABASE harrydb4';
//mysqli_query($conn,$sql)
$result=mysqli_query($conn,$sql);
if ($result) {
    echo 'database creating successfully';
}
else {
    echo 'database cannot create beacause of this error <br> '.mysqli_error($conn);
}
?>