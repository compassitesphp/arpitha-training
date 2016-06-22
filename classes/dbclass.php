<?php
/**
 * Class Name : dbclass
 * Description : To handle all DB related operations
 * @author shan
 */
class dbclass {
    
    private $host='localhost';
    private $user='web';  //Change user as required on target system
    private $password='websa'; //Change password as required on target system
    private $database='employee';
    private $connection;
    
    public function __construct()
    {
        $this->connection=mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if(mysqli_connect_errno())
        {
            die('ERROR : Failed to connect to the database');
        }
    }
    
    public function getAll()
    {
        return mysqli_query($this->connection, "select * from employee_info");
    }
}
?>
