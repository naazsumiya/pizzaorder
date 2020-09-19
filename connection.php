<?php
echo "<body style='image1.jpg'>";
echo "<body style='background: url(http://www.website.com/a.gif);'>";

$servername = "localhost";
$username = "root";
$password = "";
$mysql_name="project";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$db_selected=mysqli_select_db($conn,'project');
if(!$db_selected){
die('cant use'.$mysql_name. ':'.mysqli_connect_error());
}
echo "YOUR ORDER IS PLACED SUCCESSFULLY <br>";
echo "THANK YOU";
$name=$_POST['Name'];
$email=$_POST['Email'];
$phoneno=$_POST['phoneno'];
mysqli_query($conn, "INSERT INTO foodbonanza (name,email,phoneno)
VALUES ('$name', '$email', '$phoneno')");
$conn->close();
?>