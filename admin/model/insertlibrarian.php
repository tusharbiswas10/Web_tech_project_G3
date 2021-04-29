<?php

$host="localhost";
$user="root";
$password="";
$db="admindetails";
$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['submit_btn'])) {
  if (!empty($_POST['LibrarianName']) && !empty($_POST['LibrarianPhone']) && !empty($_POST['LibrarianEmail']) && !empty($_POST['LibrarianHiredate']) && !empty($_POST['LibrarianAddress']) && !empty($_POST['LibrarianSalary']) ) {
    // code...

    $name=$_POST['LibrarianName'];
    $phone=$_POST['LibrarianPhone'];
    $email=$_POST['LibrarianEmail'];
    $hiredate=$_POST['LibrarianHiredate'];
    $address=$_POST['LibrarianAddress'];
    $salary=$_POST['LibrarianSalary'];

    $sql="insert into librarian(name, phone, email,hiredate, address, salary) values('$name','$phone','$email','$hiredate','$address','$salary') ";
    $result=mysqli_query($con,$sql);

    if ($result) {
      echo "Form submited successfully";
    }
    else {
      echo " something went wrong !!!!!";
    }

  }
  // else {
  //   echo "Fill up all the filds";
  // }
}


 ?>
