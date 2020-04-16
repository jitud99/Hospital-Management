<?php
session_start();
error_reporting(1);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'jd99rk.');
define('DB_NAME', 'hospital');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME );
if(!mysqli_connect("localhost","root","jd99rk."))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysqli_connect("localhost","root","jd99rk.");
 mysqli_select_db("hospital");

if($_SESSION['admin']=="")
{
header('index.php');
}

?>
<h3 style="background:#990000;padding:20px;color:#FFFFFF;margin:0px">
	<span>Hello Admin !</span>
	<span style="float:right"><a style="color:#FFFFFF" href="logout.php">Logout</a></span>
</h3>
