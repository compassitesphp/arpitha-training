<?php


include 'dbclass.php';
$employee =new Employee("localhost","arpitha","compass","employee");

$conn=$employee->connect();

$emp_id=$_GET['emp_id'];
$emp_name=$_GET['emp_name'];
$emp_email=$_GET['emp_email'];
$emp_department=$_GET['emp_department'];



if(!$employee->insert($emp_id,$emp_name,$emp_email,$emp_department))
{
	die('Error: ' . $conn->error());
}

else

    echo " 1 record added  ";
$conn->close();

echo "<a href='http://localhost/arpitha-traning/classes/index.php'>   home page</a>" ;




?>