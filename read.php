<?php
$servername="localhost";
$username="root";
$password="";
$database="reg";
$conn=mysqli_connect($servername,$username,$password,$database);

$sql="SELECT * FROM `registration`";
$result=mysqli_query($conn,$sql);


while($row=mysqli_fetch_assoc($result)){
    echo" row is filled",$row;
}

?>