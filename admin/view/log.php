<?php
session_start();
if (isset($_GET['error'])==true) {
    echo '<p align="center">Incorrect username or password</p>';
}

$host="localhost";
$user="root";
$password="";
$db="admindetails";

$con=mysqli_connect($host,$user,$password,$db);


if( isset($_POST['uname'])){
  $usname=$_POST['uname'];
  $password=$_POST['pass'];
  $sql="select * from adminall where User='".$usname."' AND Pass='".$password."' LIMIT 1 ";


  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  if(mysqli_num_rows($result)==1){
     $_SESSION['login_user'] = $usname;
    header("Location:entry.php");

  }
  else {
    header("Location:log.php?error=1");
  }


  // $stmt = $conn->prepare($sql);
  // $stmt->bind_param( $User, $Pass);
  // $stmt->execute();
  // $stmt->bind_result($User, $Pass);
  // $stmt->store_result();


  // if($stmt->fetch()){
  //     $_SESSION['login_user'] = $User;
  //     header("location: entry.php");
  // }
  // else{
  //     header("Location:log.php?error=1");
  // }

  }


//}



?>


<html>
<head>
  <link rel="stylesheet" href="../css/login_style.css">
</head>
<body>
<form method="post" action="log.php" class="login-container" onsubmit="return validate()">
  <p id="error"></p>

    <h1>  Admin Login</h1>
    <div class="form-box">
      <input type="text" placeholder="Enter Username" name="uname" id="user">



    </div>

    <div class="form-box">
      <input type="password" placeholder="Enter Password" name="pass" id="pass">
    </div>
    <div class="form-box">
    <input  type="submit" name="submit_btn" value="Sign In">
    </div>

</form>
<script type="text/javascript" src="../javascript/login.js"> </script>

</body>
</html>
