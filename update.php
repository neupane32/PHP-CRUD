<?php

// Include the database connection file
include('./connectToDatabase.php');

$id = $_GET['id'];

// Update query
$updateQuery = "SELECT * FROM student WHERE id='$id'";
$data = $conn->query($updateQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Data</title>
</head>
<body>
    <h1>Update Student Data</h1>
    <?php
        if($data->num_rows > 0){
            $row = $data->fetch_assoc();
    ?>
    <form action="updateSuccess.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        First Name: <input type="text" name="fname" value="<?php echo $row['firstname']; ?>"><br>
        Last Name: <input type="text" name="lname" value="<?php echo $row['lastname']; ?>"><br>
        E-Mail: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Phone Number: <input type="text" name="phone" value="<?php echo $row['phonenumber']; ?>"><br>
        Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
        <button type="submit">Save</button>
    </form>
    <?php
        } else {
            echo "<p>No student found with the provided ID.</p>";
        }
    ?>
</body>
</html>
