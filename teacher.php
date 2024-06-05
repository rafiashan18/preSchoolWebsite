<?php

include "dbconnect.php";

$name=$_POST['n'];
$email=$_POST['e'];
$qualification=$_POST['q'];
$cv=$_FILES['cv'];

$file_name=$cv['name'];
$temp_loc=$cv['tmp_name'];

$allowed=array('pdf','docx');
$a=explode(".",$file_name);
$extension=end($a);
if(in_array($extension,$allowed))
{

    $destination='cv/'.$file_name;
    move_uploaded_file($temp_loc,$destination);
    $q=mysqli_query($con,"INSERT INTO teacher(name,email,qualification,file) VALUES('$name','$email','$qualification','$destination')");
    if($q)
    {
      header('location: successTeacher.html');
    }
    else
    {
        echo "Please upload file of following extension: pdf, docx";
    }
}
?>