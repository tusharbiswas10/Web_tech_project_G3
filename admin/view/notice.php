<?php
include('../controller/session.php');
  if(!isset($_SESSION['login_user'])){
  header("location:log.php");
  }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Notice</title>
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
     <h2>Notice</h2>
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
   		$sql="select * from notice ";
   		$result=$con->query($sql);

   		if ($result->num_rows>0) {

   			while ($row=$result->fetch_assoc()) {
   				echo "<tr><td>".$row["ID"]."</td><td>".$row["title"]."</td><td>".$row["details"]."</td></tr>";
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


   <h3>Add New Notice</h3>
   <form action="../model/insertnotice.php" method="post">

     Title: <input type="text" name="Noticetitle"><br>
   	Description: <input type="text" name="Noticedetail"><br>


   			<button type="submit" name="submit">Add</button>


   </form>
   </div>




 </body>
 </html>
