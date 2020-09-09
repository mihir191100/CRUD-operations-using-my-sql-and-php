<?php

include 'dbconnect.php';
$con = OpenCon();
$id = $_GET['id'];

$q = "DELETE FROM `crudtable` WHERE id = $id ";

mysqli_query($con, $q);

echo "<script type='text/javascript'>
alert('Record successfully deleted');";
echo'window.location= "index.php"';
echo "</script>";

?>