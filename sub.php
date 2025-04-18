<?php
$db_name="project";
$host="localhost";
$user="root"; 
$password="";
$conn=mysqli_connect($host,$user,$password,$db_name);  
if($conn->connect_error){
    echo "connection failed";
   }
else{
    echo "connection successful";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password = $_POST['password']; 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $createsql="CREATE TABLE  users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
 )";
    $q=mysqli_query($conn,$createsql);
    


}
    