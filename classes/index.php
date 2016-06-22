<!doctype HTML>
<html>
    <head>
        <title>Employee List</title>
    </head>
    <body>
        <table width="100%" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>                
            </tr>
            <?php
            include 'dbclass.php';

            $employee = new dbclass;

            $empList = $employee->getAll();

            while ($empRecord = mysqli_fetch_array($empList))
            {
                echo "<tr><td>" . $empRecord['emp_id'] . "</td>";
                echo "<td>" . $empRecord['emp_name'] . "</td>";
                echo "<td>" . $empRecord['emp_email'] . "</td>";
                echo "<td>" . $empRecord['emp_department'] . "</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
