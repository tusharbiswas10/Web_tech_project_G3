<?php

$host="localhost";
$user="root";
$password="";
$db="admindetails";
$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['submit'])) {
  if (!empty($_POST['Noticetitle']) && !empty($_POST['Noticedetail']) ) {
    // code...

    $name=$_POST['Noticetitle'];
    $email=$_POST['Noticedetail'];





    $sql="insert into notice(title,details) values('$name','$email') ";
    $result=mysqli_query($con,$sql);

    if ($result) {
      echo "Form submited successfully";
    }
    else {
      echo " Erorr !!!!!";
    }

  }
  else {
    echo "Fill up all the filds";
  }
}


 ?>
