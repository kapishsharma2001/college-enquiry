<?php
$name = "";
$email = "";
$address = "";
$telephone = "";
$subject = "";

// if (isset($_POST('Name'))) {
    $name = $_POST['Name'];
// }
// if (isset($_POST('Email'))) {
    $email = $_POST['Email'];
// }
// if (isset($_POST('Addrs'))) {
    $address = $_POST['Addrs'];
// }
// if (isset($_POST('Telehone'))) {
    $telephone = $_POST['Telephone'];
// }
// if (isset($_POST('Subject'))) {
    $subject = $_POST['Subject'];
// }
// if (!strlen($name) > 0 && !strlen($email) > 0 && !strlen($telephone) > 0 && !strlen($subject) > 0) {
//     echo "All fields are required";
//     exit();
// }

// Create connection
$conn = new mysqli('localhost', 'root', "", 'college');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create and execute SQL query
$sql = "INSERT INTO form_apply (name, email,address,telephone,subject)
    VALUES ('$name', '$email', '$address','$telephone','$subject')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
