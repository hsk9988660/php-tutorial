<?php
// we delete record from our database
// 
$servername='localhost';
$username='root';
$password='';
$database='service';
$conn= mysqli_connect($servername,$username,$password,$database);
echo 'connection is successful';
$sql="SELECT * FROM `service`" ;
$result  =  mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
echo $row; 
while ($row=mysqli_fetch_assoc($result)) {
echo "hello".$row['name']."this is your  ".$row['email'];
echo '<br>';
}
// usage of where clause to update data
//$sql="DELETE FROM `service` WHERE `service`.`email` = 'hsk9988660@gma'";
$sql="SELECT * FROM `service`  LIMIT 2";
$result  =  mysqli_query($conn,$sql);
$aff=mysqli_affected_rows($conn);
echo $aff;
if ($result) {
  echo 'Delete record successfully';
}
else{
echo "record not Deleted -->".mysqli_error($conn);
}

?>