<?php 
$con = mysqli_connect('localhost','root',);

if($con){
	echo "connection_success";
}
else{
	echo "no connection";
}
 
 mysqli_select_db($con, 'websiteinfo');

$user = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$comm = $_POST['comment'];

$query = " insert into userinfodata(name, email, number, comment)

values ('$user','$email','$number','$comm')";
 
mysqli_query($con,$query);

header('location:index.php')



 ?>