<!DOCTYPE html>
<html>
    <body>

        <h2>Enter the employee details</h2>
        <?php
        include 'dbclass.php';
        $employee = new dbclass;
        $employeeDetail = $employee->getEmployee($_GET['emp_id']);
        $employeeRow = mysqli_fetch_array($employeeDetail);
        ?>
        <form name="update_employee" action="update2.php" method="GET">
            <span>Employee ID:</span><input type="text" name="emp_id" value="<?php echo $employeeRow['emp_id']; ?>"/><br><br>
            <span>Name:</span> <input type="text" name="emp_name" required value="<?php echo $employeeRow['emp_name']; ?>"/>
            <br><br>
            <span>E-mail:</span> <input type="text" name="emp_email" required placeholder="Enter a valid email address"value="<?php echo $employeeRow['emp_email']; ?>"/><br><br>
            <span>Department:</span> <input type="text" name="emp_department" value="<?php echo $employeeRow['emp_department']; ?>"/><br><br>

            <input type="submit"> 

        </form>

    </body>
</html>

