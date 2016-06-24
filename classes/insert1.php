<?php


include 'dbclass.php';
$employee =new Employee("localhost","arpitha","compass","employee");

$conn=$employee->connect();
$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];


if(!$employee->update($emp_id,$emp_name,$emp_email,$emp_department))
{
	die('Error: ' . $conn->error());
}
else

	echo "updated the record  ";
$conn->close();

echo "<a href='http://localhost/arpitha-traning/classes/index.php'>   home page</a>" ;





?>
