<?php


include 'database.php';
$employee =new Employee("localhost","shilpa","compass","employee");

$conn=$employee->connect();
$empId=$_GET['emp_id'];
$empName=$_GET['emp_name'];
$empEmail=$_GET['emp_email'];
$empDepartment=$_GET['emp_department'];

if(!$employee->update($empId,$empName,$empEmail,$empDepartment,$conn))
{
	die('Error: ' . $conn->error());
}
else

	echo "updated the record  ";
$conn->close();

echo "<a href='http://localhost/shilpashree-traning/employee_conn_class/list.php'>   home page</a>" ;





?>

