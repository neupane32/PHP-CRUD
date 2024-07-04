<?php

// Include the database connection file
include ('./connectToDatabase.php');

$id = $_GET['id'];

//query
$deleteQuery = "delete from student where id='$id'";

//execute
if($conn->query($deleteQuery) == true){
//check wether the delete method work or not: echo('deleted successfully');
   header('location:display.php');
 }else{
     echo("Failed to delete");
 }


?>