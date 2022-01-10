<?php
error_reporting(1);
$username =$_REQUEST['username'];
$email =$_REQUEST['email'];
$mobile =$_REQUEST['mobile'];
$date =$_REQUEST['date'];
$comment =$_REQUEST['comment'];

// database connection
$conn =new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt ="INSERT INTO `amandata`(`id`, `username`, `email`, `mobile`, `comment`) VALUES ('','$username','$email','$mobile','$comment') ";

    
if ($conn->query($stmt) === TRUE) {
    echo " Submited successfully!";
  } else {
    echo "Error: " . $stmt . "<br>" . $conn->error;
  }
}