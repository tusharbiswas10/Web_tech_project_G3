<!DOCTYPE html>
<html>
<head>
	<title>Request</title>
<?php

include('../controller/session.php');
  if(!isset($_SESSION['login_user'])){
  header("location:log.php");
  }

if(array_key_exists('Remove_button', $_POST)) {
            button1();
        }

        function button1() {
            echo "Removed !!!!";
        }



 ?>
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
<?php include '../controller/sidebar.php'; ?>

<div class="b">
	<h2>Requests</h2>
	<table>
		<tr>

			<th> Sl no.</th>
			<th> Title</th>
			<th> Details</th>

		</tr>
		<?php
		$host="localhost";
		$user="root";
		$password="";
		$db="admindetails";
		$con=mysqli_connect($host,$user,$password,$db);
		$sql="select * from request ";
		$result=$con->query($sql);

		if ($result->num_rows>0) {

			while ($row=$result->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["type"]."</td><td>".$row["details"]."</td></tr>";
			}
		}
		else {
			echo "no result found";
		}
		$con->close();

		 ?>

	</table>

</div>


</body>
</html>
