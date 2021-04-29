<?php ;

include('../controller/session.php');
  if(!isset($_SESSION['login_user'])){
  header("location:log.php");
  }




 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
<link rel="stylesheet" href="../css/request.css">
</head>
<style>
table {

  border-collapse: collapse;
	width: 1000px;
	/* color: white; */
	text-align: left;
}
th {

	background-color: red;
	color: black;

}
tr:nth-child(even){background-color: #ededed}
</style>

<body>
<?php include '../controller/sidebar.php';


   ?>



<div class="b">
<h2>Information About Admin</h2>

	<table>
		<tr>

			<th> ID.</th>
			<th> Username</th>
      <th> Name</th>
			<th> Pass</th>

      <th> Address</th>
      <th> Dob</th>
      <th>Phone</th>

		</tr>
		<?php
		$host="localhost";
		$user="root";
		$password="";
		$db="admindetails";
		$con=mysqli_connect($host,$user,$password,$db);
		$sql="select * from adminall ";
		$result=$con->query($sql);

		if ($result->num_rows>0) {

			while ($row=$result->fetch_assoc()) {
				echo "<tr><td>".$row["ID"]."</td><td>".$row["User"]."</td><td>".$row["Pass"]."</td><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Dob"]."</td><td>".$row["Phone"]."</td></tr>";
			}
		}
		else {
			echo "no result found";
		}
		$con->close();

		 ?>

	</table>

</div>

<div class="c">


<h3>Add New Admin</h3>
<form action="../model/insertadmin.php" method="post" onsubmit="return validate1()">

  <div class="form-box">
  Username: <input type="text" name="UseruserName" id="a2"><br>
</div>
  <div class="form-box">
	Name: <input type="text" name="UserName" id="a3"><br>
</div>
  <div class="form-box">
  Password: <input type="text" name="UserPass" id="a4"><br>
</div>
  <div class="form-box">
	Address: <input type="text" name="UserAddress" id="a5"><br>
</div>
  <div class="form-box">
  Date of Birth: <input type="date" name="UserExpiredate" id="a6"><br>
</div>
  <div class="form-box">
  Phone: <input type="tel" name="UserPhone" id="a7"><br>
</div>
<div class="form-box">
			<button type="submit" name="submit" id="a8">Add</button>
</div>

</form>
</div>
<script type="text/javascript" src="../javascript/profile.js"> </script>
</body>
</html>
