<?php

$HOSTNAME="localhost";
$USERNAME="aroshi19";
$PASSWORD="aroshi_2024";
$DATABASE="student_db";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

// ERROR HANDLING
if($con)
{
    echo 'connection successful';

}
else
{
    die(mysqli_connect($con));
}



?>
