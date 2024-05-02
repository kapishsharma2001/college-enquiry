<?php
$name = "";
$email = "";
$address = "";
$telephone = "";
$message = "";

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
// if (isset($_POST('massage'))) {
    $message = $_POST['massage'];
// }
// if (!strlen($name) > 0 && !strlen($email) > 0 && !strlen($telephone) > 0 && !strlen($message) > 0) {
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
$sql = "INSERT INTO form_ask (name, email,address,telephone,message)
    VALUES ('$name', '$email', '$address','$telephone','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
