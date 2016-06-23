<?php
include 'dbclass.php';
$employee =new Employee("localhost","arpitha","compass","employee");


$conn=$employee->connect();

$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

//$tableName="employee_info";

if(!$employee->delete($empId,$conn))
{
	die('Error: ' . $conn->error());
}
else

	echo "deleted  the record  ";
$conn->close();

echo "<a href='http://localhost/arpitha-traning/arpitha-training/classes/index.php'>   home page</a>" ;

?>
