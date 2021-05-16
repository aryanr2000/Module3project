<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="phpcrud";
$con=mysqli_connect("localhost", "root", "", "phpcrud");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>