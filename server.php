<?php
$servername = "localhost";
$username = "root";
$password="";
$db="test";

 //Create connection
$conn = new mysqli($servername, $username,  $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 //Check connection
 if (isset($_POST['register'])){
     $username= $_POST['username'];
     $email= $_POST['Email'];
     $password_1= $_POST['password_1'];
     $password_2 = $_POST['password_2'];

     $sql=" INSERT INTO `clint`(`id`, `name`, `email`, `password`)
     VALUES ('','$username', '$email','$password_1')" ;

     if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
     } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
     }
 }
 
?> 