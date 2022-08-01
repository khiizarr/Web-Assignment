<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
class users
{
    // private $houses = array();
    private $users = array();

    public function getAllusers()
    {
        // if(isset($_GET['address'])){
        // 	$address = $_GET['address'];
        // 	$query = 'SELECT * FROM house WHERE address LIKE "%' .$address. '%"';
        // } else {
        // 	$query = 'SELECT * FROM users';
        // }
        // $dbcontroller = new DBController();
        // $this->houses = $dbcontroller->executeSelectQuery($query);
        // return $this->houses;

        $query = 'SELECT * FROM users';
        // }
        $dbcontroller = new DBController();
        $this->users = $dbcontroller->executeSelectQuery($query);
        return $this->users;
    }

    public function insertusers()
    {
        if (isset($_POST['usersEmail'])) {
            $custEmail = $_POST['usersEmail'];
            $custName = $custPW = $custPhone = $address = $bankAccNum = "";

            // if(isset($_POST['usersEmail'])){
            //      $custEmail = $_POST['usersEmail'];
            // }
            if (isset($_POST['usersName'])) {
                $custName = $_POST['usersName'];
            }
            if (isset($_POST['usersPhone'])) {
                $custPhone = $_POST['usersPhone'];
            }
            if (isset($_POST['address'])) {
                $address = $_POST['address'];
            }
            if (isset($_POST['bankAccNum'])) {
                $bankAccNum = $_POST['bankAccNum'];
            }

            $query = "INSERT INTO old_users (usersEmail, usersName, usersPhone, address, bankAccNum) values (?,?,?,?,?)";
            $data = [$custEmail, $custName, $custPhone, $address, $bankAccNum];
            $dbcontroller = new DBController();
            $result = $dbcontroller->executeQuery($query, $data);
            if ($result != 0) {
                $result = array('success' => 1);
                return $result;
            }
        }
    }

    public function deleteusers()
    {
        if (isset($_POST['usersEmail'])) {
            $custEmail = $_POST['usersEmail'];
            $query = 'DELETE FROM users WHERE usersEmail = ?';
            $data = [$custEmail];
            $dbcontroller = new DBController();
            $result = $dbcontroller->executeQuery($query, $data);
            if ($result != 0) {
                $result = array('success' => 1);
                return $result;
            }
        }
    }
}
