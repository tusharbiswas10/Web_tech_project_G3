<?php

$host="localhost";
$user="root";
$password="";
$db="admindetails";
$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['submit'])) {
  if (!empty($_POST['UserName']) && !empty($_POST['UserPhone']) && !empty($_POST['UserEmail']) && !empty($_POST['UserExpiredate']) && !empty($_POST['UserAddress']) && !empty($_POST['UserFee']) && !empty($_POST['UserType'])) {
    // code...

    $name=$_POST['UserName'];
    $phone=$_POST['UserPhone'];
    $email=$_POST['UserEmail'];
    $hiredate=$_POST['UserExpiredate'];
    $address=$_POST['UserAddress'];
    $salary=$_POST['UserFee'];
    $type=$_POST['UserType'];

    $sql="insert into user(name, phone, email,expiredate, address, fee,type) values('$name','$phone','$email','$hiredate','$address','$salary','$type') ";
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
