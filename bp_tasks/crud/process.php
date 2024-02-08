<?php
// what to do with the data
if (isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
}

// connect to the database server
include 'db.php';

// write SQL statement to insert data
$sql = "insert into studentsInfo(first_name, last_name, groupid, city)
        values ('$first_name', '$last_name', '$city','$groupid' )";

if ($conn->query($sql)===TRUE) {
    echo "your data was recorded";
}
else {
    echo "Error:" .$sql . "<br" .$conn->error;
}

//close the database connection 
$conn->close();


?>

