<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "arpitha";
$password = "compass";
$dbname="employee";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}
//echo 'connection established';

$sql = "SELECT * from employee_info";

$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
 	
    
     // echo "emp_name" . $row['emp_name'] . " - Email: " . $row['emp_email'] . "emp_department " . $row['emp_department'] . "<br>";

    echo '<table border="1" style="width:100%">';
		echo"<tr>";
			echo "<th>Employee ID</th>";
			echo "<th>emp_name</th>";
			echo "<th>emp_email</th>";
			echo "<th>emp_department</th>"
		echo "</tr>";

	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
			echo "<td>" . $row['emp_id'] . "</td>";
			echo "<td>" . $row['emp_name'] . "</td>";
			echo "<td>" . $row['emp_email'] . "</td>";
			echo "<td>" . $row['emp_department'] . "</td>";
		echo "</tr>";
	}		

	echo "</table>";		

}

   
?>

</body>
</html>

