<?php


include 'dbclass.php';
$employee =new dbclass;

$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

//$employee->insert($empName, $empEmail, $empDepartment);

if(!$employee->insert($empName, $empEmail, $empDepartment))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

echo "<a href='http://localhost/arpitha-training/classes/index.php'>   home page</a>" ;




?>