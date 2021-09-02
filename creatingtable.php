<?php

 //connecting variable;
 // creating table in database
 //we use already existist 
 // as harry database already exist we create table in this 'khan'
 // first we copy CREATE TABLE `khan` ( `sr` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `role` VARCHAR(11) NOT NULL , `date of joining` DATE NOT NULL , PRIMARY KEY (`sr`)) ENGINE = InnoDB'
 // we above full name in console in database we create database in phpmyadmin and then copy in console
$servername ='localhost';
$username='root';
$password='';
$database='harry';
$conn= mysqli_connect($servername,$username,$password,$database);



$sql='CREATE TABLE `khan` ( `sr` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `role` VARCHAR(11) NOT NULL , `date of joining` DATE NOT NULL , PRIMARY KEY (`sr`)) ENGINE = InnoDB';

$result =mysqli_query($conn,$sql);
if ($result) {
    echo 'table  creating successfully';
}
else {
    echo 'table cannot create beacause of this error <br> '.mysqli_error($conn);
}
?>