
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
    

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $type = $_POST['type'];

    $insertSql = "INSERT INTO users (fname, lname, dob, gender, email, phone, Adress, usertype)
              VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$phone', '$address', '$type')";
if ($conn->query($insertSql) === TRUE) {
    echo "New record inserted successfully!";
} else {
    echo "Error record not inserted";
    }

}
$conn->close();
 ?>


