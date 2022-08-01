<?php

//Adapted from https://phppot.com/php/php-restful-web-service/
require_once("usersRestHandler.php");
require_once("HotelRestHandler.php");
$method = $_SERVER['REQUEST_METHOD'];
$view = "";

if (isset($_GET["resource"]))
    $resource = $_GET["resource"];
if (isset($_GET["page_key"]))
    $page_key = $_GET["page_key"];
/*
controls the RESTful services
URL mapping
*/


switch ($resource) {
    case "users":
        switch ($page_key) {

            case "list":
                // to handle REST Url /house/list/

                //echo "list invoked from house";
                $usersRestHandler = new usersRestHandler();
                $result = $usersRestHandler->getAlluserss();
                break;

            case "delete":
                // to handle REST Url /users/delete/
                //echo "list invoked from house";
                $usersRestHandler = new usersRestHandler();
                $result = $usersRestHandler->deleteusers();
                break;

            case "create":
                // to handle REST Url /users/insert/
                //echo "create invoked from house";
                $usersRestHandler = new usersRestHandler();
                $usersRestHandler->insert();
                break;

                // case "update":
                // 	//echo "update invoked from house";
                // 	// to handle REST Url /house/update/<row_id>
                // 	$houseRestHandler = new HouseRestHandler();
                // 	$houseRestHandler->editHouseById();
                // break;
        }
        break;
}
