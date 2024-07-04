<?php

//including the database first
include('./connectToDatabase.php');


//query to get all the student data
$getQuery = "select * from student";
$data = $conn->query($getQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php
        if($data->num_rows > 0){
            foreach($data as $student) {
                echo('
                <tr>
                <td>'.$student["id"].'</td>
                <td>'.$student["firstname"].'</td>
                <td>'.$student["lastname"].'</td>
                <td>'.$student["email"].'</td>
                <td>'.$student["phonenumber"].'</td>
                <td>'.$student["address"].'</td>
                <td>
                 <a href= "update.php?id='.$student['id'].'">Update</a>
                 <a href= "delete.php?id='.$student['id'].'">Delete</a>
                 </td>


                </tr>');
            }
        }
        ?>

    </table>
</body>
</html>