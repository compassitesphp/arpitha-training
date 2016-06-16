<!DOCTYPE html>
<html>
<body>

<h2>Enter the employee details</h2>
<?php

   $empId=$_GET['emp_id'];
   $conn = mysql_connect('localhost','arpitha','compass');
   mysql_select_db('employee');
   $sql = "SELECT * from employee_info where emp_id=$empId";
   $response=mysql_query($sql);
   $employeeInfo=mysql_fetch_array($response);

   $employeeName=$employeeInfo['emp_name'];
   $employeeEmail=$employeeInfo['emp_email'];
   $employeeDepartment=$employeeInfo['emp_department'];
?>


<form name="update_employee" action="update3.php" method="GET">
<span>Employee ID:</span><input type="text" name="emp_id" value="<?php echo $empId; ?>"/><br><br>
<span>Name:</span> <input type="text" name="emp_name" required value="<?php echo $employeeName; ?>"/>
<br><br>
<span>E-mail:</span> <input type="text" name="emp_email" required placeholder="Enter a valid email address"value="<?php echo $employeeEmail; ?>"/><br><br>
<span>Department:</span> <input type="text" name="emp_department" value="<?php echo $employeeDepartment; ?>"/><br><br>

<input type="submit"> 

</form>

</body>
</html>