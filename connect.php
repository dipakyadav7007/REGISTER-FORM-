<?php
//database
$servername="localhost";
$username="root";
$password="";
$database="reg";
$conn=mysqli_connect($servername,$username,$password,$database);

//create connection

if(!$conn){
	die("sorry we fail to connect: ".mysqli_connect_error());
}
else{
  echo"we connected";
}


if($_SERVER['REQUEST_METHOD']=='POST'){
    $course=$_POST['course'];
$fathername=$_POST['fathername'];
$Day=$_POST['Day'];
$Month=$_POST['Month'];
$Year=$_POST['Year'];
$gender=$_POST['gender'];
$Qual=$_POST['Qual'];
$address=$_POST['address'];
$sql="INSERT INTO `registration` (`course`, `fathername`,`Day`,`Month`,`Year`,`gender`,`Qual`,`address`) 
VALUES ('$course', '$fathername','$Day','$Month','$Year','$gender','$Qual','$address')";
$result = mysqli_query($conn,$sql);
if($result){
    echo"<div class='alert alert-success' role='alert'>
	<strong>success!</strong>your notes has been inserted successfuly
  <button type='button' class='close' data-dismiss='alert' aria-label='close'>
  <span aria-hidden='type;>&times;</span>
 </button>
</div>";
}
else{
	echo"we could not data record successfuly bracause this error ..>".mysqli_error($conn);
}
}
?>
<html>
  <body>
  <a href="read.php">click me</a>
  </body>
</html>