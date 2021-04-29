<?php

//session_start();
include('../controller/session.php');
  if(!isset($_SESSION['login_user'])){
  header("location:log.php");
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Librarian Managment</title>
  <link rel="stylesheet" href="../css/manage_style.css">
</head>
<body>

	<?php include '../controller/sidebar.php'; ?>
<div class="b">
<h3>Librarian Managment</h3>
<form action="../model/insertlibrarian.php" method="post" onsubmit="return validate1()">
<p id="error"></p>
  <div class="form-box">
	Name: <input type="text" name="LibrarianName" id="a"><br>
  </div>
	<div class="form-box">
	Phone: <input type="tel" name="LibrarianPhone" id="b"><br>
  </div>
  <div class="form-box">
	Email: <input type="email" name="LibrarianEmail" id="c"><br>
  </div>
  <div class="form-box">
	Hire Date: <input type="date" name="LibrarianHiredate" id="d"><br>
  </div>
  <div class="form-box">
	Address: <input type="text" name="LibrarianAddress" id="e"><br>
  </div>
  <div class="form-box">
	Salary: <input type="number" name="LibrarianSalary" id="f"><br>
  </div>
  <div class="form-box">
			<input  type="submit" name="submit_btn" value="Add">
  </div>

</form>
</div>


<div class="c">


<h3>User Managment</h3>
<form action="model/insertuser.php" method="post" onsubmit="return validate2()">
  <p id="error2"></p>
  <div class="form-box">
	Name: <input type="text" name="UserName" id="a1"><br>
  </div>
  <div class="form-box">
	Phone: <input type="tel" name="UserPhone" id="b1"><br>
  </div>
  <div class="form-box">
	Email: <input type="email" name="UserEmail" id="c1"><br>
  </div>
  <div class="form-box">
	Expire Date: <input type="date" name="UserExpiredate" id="d1"><br>
  </div>
  <div class="form-box">
	Address: <input type="text" name="UserAddress" id="e1"><br>
  </div>
  <div class="form-box">
	Fee: <input type="number" name="UserFee" id="f1"><br>
  </div>
  <div class="form-box">
	Type: <input type="text" name="UserType" id="g1"><br>
</div>
<div class="form-box">
			<button type="submit" name="submit">Add</button>
</div>

</form>
</div>
<script type="text/javascript" src="javascript/librarianadd.js"> </script>
</body>
</html>
