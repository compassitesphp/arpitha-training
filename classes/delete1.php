<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'dbclass.php';
$employee =new Employee("localhost","arpitha","compass","employee");

$conn=$employee->connect();

$emp_id=$_GET['emp_id'];
$emp_name=$_GET['emp_name'];
$emp_email=$_GET['emp_email'];
$emp_department=$_GET['emp_department'];



if(!$employee->delete($emp_idd))
{
	die('Error: ' . $conn->error());
}
else

	echo "deleted  the record  ";
$conn->close();

echo "<a href='http://localhost/arpitha-traning/classes/index.php'>   home page</a>" ;


?>