<!-- <script src="jq.js"></script> -->

<script>
$(document).ready(fuction(e){
  $("#search").keyup(fuction(){
    $("#here").show();
    var x =$(this).val();
    $.ajax(
      {
        type:'GET',
        url:'../controller/fetch.php',
        data:'q='+x,
        success:fuction(data)
        {
          $("#here").html(data);
        }


      });

  });

});
</script>

<?php


include('../controller/session.php');
  if(!isset($_SESSION['login_user'])){
  header("location:log.php");
  }

 ?>




<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/financial.css">
	<title>Financial</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<body>
<?php include '../controller/sidebar.php';


   ?>

<div class="b">

  <h3> Search User</h3>
  <input type="search" name="search" id="search">

</div>



<!-- <div class="c"> -->
  <div id="here">

  </div>

<!-- </div> -->


</body>
</html>
