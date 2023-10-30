<?php
$connect = new mysqli("localhost","root","","bbb");

$uname = $_POST["username"];
$email = $_POST["mailid"];
echo($uname);
echo($email);
$insert = "INSERT into user1 values('$uname','$email')";
$query = mysqli_query($connect,$insert);
if($query){
    echo"Success";
}
?>