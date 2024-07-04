<?php

include('./connectToDatabase.php');

//get data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST['email'];
$phone = $_POST["phone"];
$address = $_POST["address"];
$id = $_POST['id'];

//query
$updateQuery = "UPDATE student SET fname='$fname, lname ='$lname', email='$email', phonenumber='$phone', address='$address' WHERE id='$id'";

//execute
if($conn->query($updateQuery) == true){
   //echo("Inserted successfully");
   header('location:display.php');
}else{
    echo("Failed to create");
}





?>