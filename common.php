<?php
$conn=mysqli_connect("localhost","root","","store");
if(!$conn)
{
    die("Connection Error".mysqli_connect_error());
}
session_start();
?>

