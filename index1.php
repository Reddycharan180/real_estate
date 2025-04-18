<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: white;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color:rgb(48, 27, 234);
            color: white;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color:rgb(75, 43, 251);
        }
    </style>
</head>
<body>
    <form action="submit.php" method="POST">
        <input type="text" name="fname" placeholder="Enter your first name" required>
        <input type="text" name="lname" placeholder="Enter your last name" required>
        <input type="date" name="dob" required>
        <select name="gender" required>
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="text" name="phone" placeholder="Enter your phone number" required>
        <input type="text" name="address" placeholder="Enter your address" required>
        <select name="type" required>
            <option value="">Select user type</option>
            <option value="admin">Admin</option>
            <option value="normal">Normal</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
