<?php

$host="localhost";
$user="root";
$password="";
$db="admindetails";
$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['submit'])) {
  if (!empty($_POST['UseruserName']) && !empty($_POST['UserName']) && !empty($_POST['UserPass']) && !empty($_POST['UserAddress']) && !empty($_POST['UserExpiredate']) && !empty($_POST['UserPhone'])) {
    // code...
    $type=$_POST['UseruserName'];
    $name=$_POST['UserName'];
    $email=$_POST['UserPass'];

    $address=$_POST['UserAddress'];
    $hiredate=$_POST['UserExpiredate'];
    $phone=$_POST['UserPhone'];



    $sql="insert into adminall(User,Pass,Name,Address,Dob,Phone) values('$type','$name','$email','$address','$hiredate','$phone') ";
    $result=mysqli_query($con,$sql);

    if ($result) {
      echo "Form submited successfully";
    }
    else {
      echo " Erorr !!!!!";
    }

  }
  // else {
  //   echo "Fill up all the filds";
  // }
}


 ?>
