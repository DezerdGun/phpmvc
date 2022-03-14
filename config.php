<?php
define("PATH","http://newmvc");
define("CONTR","controller/controller.php");
define("MODEL","model/model.php");
define('THEME',PATH. '/views/theme/');

global $conn;
$conn = mysqli_connect("localhost","root","root","newmvc") or die();
?>
