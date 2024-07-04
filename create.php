<?php

include('./connectToDatabase.php');

//get data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST['email'];
$phone = $_POST["phone"];
$address = $_POST["address"];

//query
$createQuery = "INSERT INTO student (firstname,lastname,email,phonenumber,
address) VALUES ('$fname','$lname','$email','$phone', '$address')";

//execute
if($conn->query($createQuery) == true){
   //echo("Inserted successfully");
   header('location:display.php');
}else{
    echo("Failed to create");
}





?>