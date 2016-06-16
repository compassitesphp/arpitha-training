<html>
<head>
<title>Employee List</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="insert.css">
</head>
<body>
    
   				 <?php
                   echo "***"; exit;

   				 	include 'db.php';

                   $employee =new Employee("localhost","arpitha","compass","employee");
                   $conn=$employee->connect();
				   
				   $sql="select * from employee_info";
				   $result=$conn->query($sql);
				   echo "<div class='container'>";
				   echo "<h2>Employee details</h2>";
					if ($result->num_rows > 0) 
					{
						
						echo  "<table class='table table-bordered'>";
    					echo "<thead>";
      						echo"<tr>";
								echo "<th>Employee Id</th>";
								echo "<th>Employee Name</th>";
								echo "<th>Employee Email</th>";
								echo "<th>Employee Department</th>";
								echo "<th>Action</th>";
							echo "</tr>";
					    echo "</thead>";
   
						echo "<tbody>";
						while($row=mysqli_fetch_array($result))
						{
							echo"<tr>";

								echo "<td>" . $row['emp_id'] . "</td>";
								echo "<td>" . $row['emp_name'] . "</td>";
								echo "<td>" . $row['emp_email'] . "</td>";
								echo "<td>" . $row['emp_department'] . "</td>";

								echo "<td><a href=";
								echo "'http://localhost/employee_conn/update2.php?emp_id=" . $row['emp_id'] . "'";
								echo "'>edit</a></td>";
					        	
								echo "<td><a href=";
								echo "'http://localhost/employee_conn/delete1.php?emp_id=" . $row['emp_id'] . "'";
								echo "'>delete</a></td>";

							echo "</tr>";
						}

						echo "</tbody>";
						echo "</table>";		
						echo "<a href='http://localhost/employee_conn/app2.html'>Insert Record</a>";
						
					}

					else
					{
						echo "no record were found";
					}
				<input type="button" value="Delete" onclick="return confirm('Delete this Record?');"/>

					echo "</div >";

?>
</body>
</html>