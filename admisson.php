<?php
$fullname=$_POST['fullname'];
$fathername=$_POST['fathername'];
$admission=$_POST['admission'];
$rollno=$_POST['rollno'];


$con = new mysqli("localhost","root","","test1");
if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}else{
$stmt=$con->prepare("insert into registration(fullname,fathername,admission,rollno)
values(?,?,?,?)");
$stmt->bind_param("ssii",$fullname,$fathername,$admission,$rollno);
$stmt->execute();
echo "registration succesful ....";
$stmt->close();
$con->close();

}

?>