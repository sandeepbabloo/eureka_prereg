<?php
$con = mysqli_connect('localhost','root','','eureka_prereg');
$name = $_POST['name'];
$email = $_POST['email']
$mobile = $_POST['mobile']
$idea = $_POST['idea'];
if(mysqli_query($con,'INSERT INTO `eureka_prereg`(name,email,mobile,idea) VALUES($name,$email,$mobile,$idea)')){
	echo "values entered succesully";
}

?>