<?php
/* @var array $_SERVER

$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here. That said, a large number of these variables are accounted for in the CGI/1.1 specification, so you should be able to expect those.


var array $_POST

An associative array of variables passed to the current script via the HTTP POST method.

$_POST


they are very important in passing informaion to database

*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
//insert data in database through php
//
//INSERT INTO 'khan'('name','dest');
// INSERT INTO `khan` (`sr`, `name`, `role`, `date of joining`) VALUES ('1', 'hashim', 'progrmmer', '2021-08-29');
// connecting to database
//PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

// sql querry to be executed
// variable name to be inserted in sql database
// we can give any name to our variable
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name=$_POST['name'];
    $email=$_POST['email'];// 'email' is name use in input tag
    $desc=$_POST['desc'];// password is name use in input tage
    $servername ='localhost';
$username='root';
$password='';
$database='service';
$conn= mysqli_connect($servername,$username,$password,$database);
  
$sql="INSERT INTO `service` ( `name`, `email`, `concern`) VALUES ( '$name', '$email', '$desc');" ;

$result=mysqli_query($conn,$sql);
// add a new trip in a table in database
if ($result) {
    echo '<div class="alert alert-dark" role="alert">
  <strong> successfuly </strong>your email has been submitted 
  </div>';
}
else {
    echo 'the record has not been inserted  beacause of this error <br> '.mysqli_error($conn);
}
}

?>







  <br>
  <form action="/phpt/form and mysql.php" method="POST" class="m-5">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" name="name">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter description here" name="desc" col=30 row=30>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>