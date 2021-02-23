<?php

if (isset($_REQUEST['action'])) {
    function_exists($_REQUEST['action']) ?
        call_user_func($_REQUEST['action'], $_REQUEST) :
        error("this action does not exist");
}
// else {
//     error("there is no action defined");
// }

//Requires all employees info from the employeeModel
//Calls the employee dashboard and passes all the employee info
function getAllEmployees()
{
    require_once MODELS . "employeeModel.php";
    $employees = get();
    if ($employees) {
        require_once VIEWS . "employee/employeeDashboard.php";
    } else {
        error("No matches found in our database");
    }
}

//If the request has an id set, passes it to the employeeModel and requires the employee matching with that id
//If that employee exists, calls the employee view with the matching info
function getEmployee($request)
{
    if (isset($request['emp_no'])) {
        require_once MODELS . "employeeModel.php";
        $employee = getById($request['emp_no']);
        if ($employee) {
            require_once VIEWS . "employee/employee.php";
        } else {
            error("No matches found in our database");
        }
    } else {
        error("You need to pass an id to run this action");
    }
}

//Calls the employee view without passing any info
function newEmployee()
{
    require_once VIEWS . "employee/employee.php";
}


function createEmployee($request)
{
    if (isset($request['first_name'])) {
        require_once MODELS . "employeeModel.php";
        $message = newItem($request);
        if ($message) {
            header("Location:index.php?controller=employee&action=getAllEmployees&message=$message");
        } else {
            error("No matches found in our database");
        }
    } else {
        error("You need to pass an url request to run this action");
    }
}

function updateEmployee($request)
{
    require_once MODELS . "employeeModel.php";
    $message = updateById($request);
    if ($message) {
        header("Location:index.php?controller=employee&action=getAllEmployees&message=$message");
    } else {
        error("No matches found in our database");
    }
}

function deleteEmployee($request)
{
    if (isset($request['emp_no'])) {
        require_once MODELS . "employeeModel.php";
        $message = deleteById($request['emp_no']);
        if ($message) {
            header("Location:index.php?controller=employee&action=getAllEmployees&message=$message");
        } else {
            error("No matches found in our database");
        }
    } else {
        error("You need to pass an id to run this action");
    }
}