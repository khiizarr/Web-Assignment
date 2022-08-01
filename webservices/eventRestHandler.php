<?php
require_once("SimpleRest.php");
require_once("event.php");

class eventRestHandler extends SimpleRest {

	function getAllevents() {	

		$event = new event();
		$rawData = $event->getAllevent();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}

		//var_dump($rawData);
		// means if $requestContentType = 
		$requestContentType = isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null;
		
		$this->setHttpHeaders($requestContentType, $statusCode);
		
		$result["output"] = $rawData;

		// $response = $this->encodeJson($result);
		// echo $response;
				
		if(strpos($requestContentType,'json') !== false){
		
			//echo "sss";
			$response = $this->encodeJson($result);
			echo $response;
		}
		
	}
	
	function insert() {	
		$event = new event();
		$rawData = $event->insertevent();
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}
		
		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		$result = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}

	function deleteevent() {	
		$event = new event();
		$rawData = $event->deleteevent();
		
          // if rawData is empty, then the results weren't found
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}
		
		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		$result = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}
	
	function editevent() {	
		$event = new event();
		$rawData = $event->editevent();
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}
		
		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
		$result = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}
	
	public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}
}
?>