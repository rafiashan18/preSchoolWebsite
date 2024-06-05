<?php
session_start();
include "dbconnect.php";
echo "appointment.php";
$name=$_POST['n'];
$email=$_POST['e'];
$c_name=$_POST['cn'];
$age=$_POST['a'];
$msg=$_POST['m'];
$_SESSION["g_name"]=$name;

$q=mysqli_query($con,"INSERT INTO data(g_name,email,c_name,age,message) VALUES('$name','$email','$c_name','$age','$msg')");
if($q)
{
    header('location: SuccessApp.php');

}
?>