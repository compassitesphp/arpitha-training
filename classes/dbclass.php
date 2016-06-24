<?php

/**
 * Class Name : dbclass
 * Description : To handle all DB related operations
 * @author arpitha
 */
class dbclass {

    private $host = 'localhost';
    private $user = 'arpitha';  //Change user as required on target system
    private $password = 'compass'; //Change password as required on target system
    private $database = 'employee';
    private $connection;

    public function __construct() {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            die('ERROR : Failed to connect to the database');
        }
    }

    public function getAll() {
        return mysqli_query($this->connection, "select * from employee_info");
    }

    public function getEmployee($id) {
        return mysqli_query($this->connection, "select * from employee_info where emp_id=$id");
    }
    
    public function insert($emp_name, $emp_email, $emp_department) {
        $sqlQuery = "insert into employee_info "
                . "(emp_name, emp_email, emp_department) "
                . "values ('$emp_name','$emp_email','$emp_department')";

        $result = $this->connection->query($sqlQuery);
        return $result;
    }

    public function update($emp_id, $emp_name, $emp_email, $emp_department) {
        $sqlQuery = "UPDATE employee_info SET emp_name='$emp_name',emp_email='$emp_email',emp_department='$emp_department' WHERE emp_id='$emp_id'";
        $result = $this->connection->query($sqlQuery);
        return $result;
    }

    public function delete($emp_id) {
        $sqlQuery = "DELETE FROM employee_info WHERE emp_id='$emp_id'";

        $result = $this->connection->query($sqlQuery);
        return $result;
    }
}
?>
