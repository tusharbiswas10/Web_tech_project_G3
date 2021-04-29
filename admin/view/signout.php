<?php

session_start();

if (session_destroy()) {
	//session_destroy();
	header("Location:log.php");

}

// else{
// 	header("location:log.php");
// }

 ?>
