<?php
$createTableSql = "CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    Adress TEXT NOT NULL,
    usertype VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($createTableSql) === TRUE) {
    // Table created or already exists
} 


$insertSql = "INSERT INTO users (fname, lname, dob, gender, email, phone, Adress, usertype)
          VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$phone', '$address', '$type')";
if ($conn->query($insertSql) === TRUE) {
echo "New record inserted successfully!";
} else {
echo "Error: " . $insertSql . "<br>" . $conn->error;
}