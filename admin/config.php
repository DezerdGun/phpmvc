<?php
define("PATH","http://newmvc/admin");
define("CONTR","controller/controller.php");
define("MODEL","model/model.php");
define('THEME',PATH. '/views/theme/');

global $conn;
$conn = mysqli_connect("localhost","root","root","newmvc") or die();
?>
