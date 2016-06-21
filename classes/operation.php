<?php
include 'database.php';

class operations
{
 public function __construct()
 {
  $db = new operations();
 }
 
 public function insert($emp_name,$emp_email,$emp_department)
 {
  mysql_query("INSERT INTO employee_info(emp_name,emp_email,emp_department) VALUES('$emp_name','$emp_email','$emp_department')");
   $result=$conn->query($sqlQuery);
            return $result;
            
 }
 
 
 public function delete($emp_id)
 {
  mysql_query("DELETE FROM employee_info WHERE emp_id=".$emp_id);
   $result=$conn->query($sqlQuery);
            return $result;
            
 }
 
 public function update($emp_name,$emp_email,$emp_department,$emp_id)
 {
  mysql_query("UPDATE employee_info SET emp_name='$emp_name', emp_email='$emp_email', emp_department='$emp_department' WHERE emp_id=".$emp_id);
   $result=$conn->query($sqlQuery);
            return $result;
            
 }
}
?>

