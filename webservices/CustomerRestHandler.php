<?php
require_once("SimpleRest.php");
require_once("users.php");

class usersRestHandler extends SimpleRest
{

    function getAlluserss()
    {

        $users = new users();
        $rawData = $users->getAllusers();

        if (empty($rawData)) {
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

        if (strpos($requestContentType, 'json') !== false) {

            //echo "sss";
            $response = $this->encodeJson($result);
            echo $response;
        }
    }

    function insert()
    {
        $users = new users();
        $rawData = $users->insertusers();
        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        $result = $rawData;

        if (strpos($requestContentType, 'application/json') !== false) {
            $response = $this->encodeJson($result);
            echo $response;
        }
    }

    function deleteusers()
    {
        $users = new users();
        $rawData = $users->deleteusers();

        // if rawData is empty, then the results weren't found
        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        $result = $rawData;

        if (strpos($requestContentType, 'application/json') !== false) {
            $response = $this->encodeJson($result);
            echo $response;
        }
    }

    // function editHouseById() {	
    // 	$house = new House();
    // 	$rawData = $house->editHouse();
    // 	if(empty($rawData)) {
    // 		$statusCode = 404;
    // 		$rawData = array('success' => 0);		
    // 	} else {
    // 		$statusCode = 200;
    // 	}

    // 	$requestContentType = $_SERVER['HTTP_ACCEPT'];
    // 	$this ->setHttpHeaders($requestContentType, $statusCode);
    // 	$result = $rawData;

    // 	if(strpos($requestContentType,'application/json') !== false){
    // 		$response = $this->encodeJson($result);
    // 		echo $response;
    // 	}
    // }

    public function encodeJson($responseData)
    {
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;
    }
}
