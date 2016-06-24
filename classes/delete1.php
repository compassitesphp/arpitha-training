<?php

include 'dbclass.php';

$employee = new dbclass;


if ($employee->delete($empId)) {

    die('Error: ' . mysql_error());
}

echo "deleted the record";

echo "<a href='http://localhost/arpitha-training/classes/index.php'>   home page</a>";
?>