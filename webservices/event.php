<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class event {
	// private $houses = array();
	private $event = array();

	public function getAllevent(){
		// if(isset($_GET['address'])){
		// 	$address = $_GET['address'];
		// 	$query = 'SELECT * FROM house WHERE address LIKE "%' .$address. '%"';
		// } else {
		// 	$query = 'SELECT * FROM customer';
		// }
		// $dbcontroller = new DBController();
		// $this->houses = $dbcontroller->executeSelectQuery($query);
		// return $this->houses;

          $query = "SELECT * FROM event WHERE genuine = '1'";
		// }
		$dbcontroller = new DBController();
		$this->event = $dbcontroller->executeSelectQuery($query);
		return $this->event;
	}

	public function insertevent(){
          if(isset($_POST['eventEmail'])) {
               $eventEmail = $_POST['eventEmail'];
		     $eventName = $eventPhone = $location = $bankAccNum = $desc = $star = "";

               // if(isset($_POST['customerEmail'])){
               //      $custEmail = $_POST['customerEmail'];
               // }
		     if(isset($_POST['eventName'])){
		     	$eventName = $_POST['eventName'];
		     }
		     if(isset($_POST['eventPhone'])){
		     	$eventPhone = $_POST['eventPhone'];
		     }
		     if(isset($_POST['location'])){
		     	$location = $_POST['location'];
		     }
               if(isset($_POST['bankAccNumber'])){
		     	$bankAccNum = $_POST['bankAccNumber'];
		     }
               if(isset($_POST['description'])){
		     	$desc = $_POST['description'];
		     }
               if(isset($_POST['stars'])){
		     	$star = $_POST['stars'];
		     }	

		     $query = "INSERT INTO old_event (eventEmail, eventName, eventPhone, location, bankAccNumber, description, stars) values (?,?,?,?,?,?,?)";
		     $data = [$eventEmail, $eventName, $eventPhone , $location, $bankAccNum, $desc, $star];
		     $dbcontroller = new DBController();
		     $result = $dbcontroller->executeQuery($query, $data);
		     if($result != 0){
		     	$result = array('success'=>1);
		     	return $result;
		     }
          }
	}
	
	public function deleteevent(){
		if(isset($_POST['eventEmail'])){
			$eventEmail = $_POST['eventEmail'];
			$query = 'DELETE FROM event WHERE eventEmail = ?';
			$data = [$eventEmail];
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query, $data);
			if($result != 0){
				$result = array('success'=>1);
				return $result;
			}
		}
	}
	
	public function editevent(){
		if(isset($_POST['eventEmail'])){
			$eventEmail = $_POST['eventEmail'];
			$genuine = $_POST['valid'];
			$query = "UPDATE event SET genuine= ? WHERE eventEmail = ? ";
			$data = [$genuine, $eventEmail];
			$dbcontroller = new DBController();
			$result= $dbcontroller->executeQuery($query, $data);
			if($result != 0){
				$result = array('success'=>1);
				return $result;
			}
		}
		
	}
	
}
?>