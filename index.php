<?php

//DEFINE BASE PATH
define("BASE_PATH", dirname(__FILE__));

//Require constants and helpers
require_once "config/constants.php";
require_once "config/dbconstants.php";
require_once "helpers/helpers.php";

//Include controllers
include_once("controllers/employeeController.php");
include_once("controllers/travelController.php");

//Check controller param in URL request
//If controller param is set, check if it matches with an existing controller. If so, request controller
//If request is empty, require main view
if (isset($_REQUEST['controller'])) {
    file_exists(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") ?
    require_once(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") :
    error("This controller does not exists");
} else {
    empty($_REQUEST) ?
    require(VIEWS . "main/main.php") :
    header("Location: index.php");
}
