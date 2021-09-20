<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>


<p>Logged in.</p>

<a href="logout.php"><button> Logout </button></a>