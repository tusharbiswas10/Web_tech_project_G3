<?php

include('../controller/session.php');
  if(!isset($_SESSION['login_user'])){
  header("location:view/log.php");
  }



if(array_key_exists('Approve_button', $_POST)) {
            button1();
        }
        if(array_key_exists('Delete_button', $_POST)) {
            button2();
        }
        function button1() {
            echo "Approved !!!!";
        }
        function button2() {
            echo "Deleted !!!!";
        }


?>
<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="../css/request.css">
	<title>Admin Panel</title>
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

</head>
<body>
	<?php include '../controller/sidebar.php';
   ?>


<div class="b">


<table style="width:100%">
  <tr>
    <th>Sl No.</th>
    <th >Description</th>
    <th >Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Fine add</td>
    <td>
      <form method="post">
        <input type="submit" name="Approve_button"
                class="button" value="Approve" />

        <input type="submit" name="Delete_button"
                class="button" value="Delete" />
    </form>
    </td>

  </tr>

  <tr>
    <td>2</td>
    <td>Book added</td>
    <td>
      <form method="post">
        <input type="submit" name="Approve_button"
                class="button" value="Approve" />

        <input type="submit" name="Delete_button"
                class="button" value="Delete" />
    </form>
    </td>

  </tr>
</table>
</div>
</body>
</html>
