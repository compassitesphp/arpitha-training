<?php

include 'dbclass.php';

$empId = $_GET['emp_id'];
$empName = $_GET['emp_name'];
$empEmail = $_GET['emp_email'];
$empDepartment = $_GET['emp_department'];

$employee = new dbclass;

if (!$employee->update($empId, $empName, $empEmail, $empDepartment)) {

    die('Error: ' . mysql_error());
}

echo "updated the record";

echo "<a href='http://localhost/arpitha-training/classes/index.php'>   home page</a>";
?>