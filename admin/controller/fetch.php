<?php
if (!empty($_GET['q']) ) {
  include'model/connection.php';
  $q=$_GET['q'];
  $sql="select * from user where name like '%$q%' ";
  $result=mysqli_query($con,$sql);

  while ($output=mysqli_fetch_assoc($result)) {
    echo 'a'.$output['name'].'a';
  }
}

 ?>
