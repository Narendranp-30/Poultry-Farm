<?php
$name = $_POST['username'];
$pa=$_POST['password'];
$mobile = $_POST['mobile'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO login (username,mobile,passwor)
VALUES ('$name','$mobile','$pa')";
if ($conn->query($sql) === TRUE)
{
    echo " submitted successfully";
    header("location:adduser.php");
} 
else 
{
    echo "Error submitting order: " . $conn->error;
}

$conn->close();
?>