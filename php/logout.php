<?php 

session_start(); 

if (isset($_SESSION['idno'])){
    

	$_SESSION=array();
	unset($_SESSION);
	session_destroy();
	echo"session destroyed...";
	header('Location: ../index.php?Message=SessionDestroyed');
}
?>
