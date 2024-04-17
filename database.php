<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "student_db";

$con=mysqli_connect($servername, $username, $password, $db_name);

// ERROR HANDLING
if($con->connect_error)
{
    die("Connection failed".$con->connect_error);

}
echo"Connection successful";
?>
