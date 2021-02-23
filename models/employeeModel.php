<?php

//Selects all info from the employees table
//Returns the entire table as an object
function get()
{
    require_once "./config/dbconstants.php";
    $db_connection = mysqli_connect(HOST, USER, PASSWORD, DB);

    if (!$db_connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $query = "SELECT * FROM employees";
        $response = mysqli_query($db_connection, $query);
        return $response;
    }
}

//Receives the id of the selecte employee
//Selects all info matching with the id passed on the employees table
//Returns selected info as an array(both assocciative and numeric)
function getById($id)
{
    try {
        require_once "./config/dbconstants.php";
        $db_connection = mysqli_connect(HOST, USER, PASSWORD, DB);

        $query = "SELECT * FROM employees WHERE emp_no=$id";
        $response = mysqli_query($db_connection, $query);
        return mysqli_fetch_array($response);
    } catch (\Throwable $th) {
        echo 'Conncection failed: ' .  $th->getMessage() . "\n";
    }
}


function newItem($request)
{
    try {
        require_once "./config/dbconstants.php";
        $db_connection = mysqli_connect(HOST, USER, PASSWORD, DB);
        
        $query = "SELECT * FROM employees WHERE first_name='$request[first_name]' AND last_name='$request[last_name]'";
        $response = mysqli_query($db_connection, $query);

        if (mysqli_num_rows($response) > 0) {
            return "This employee already exists";
        } else {
            $query = "INSERT 
            INTO employees (first_name, last_name, email, gender, street, state, city, birth_date, postal_code, phone_no)
            VALUES ('$request[first_name]', '$request[last_name]', '$request[email]', '$request[gender]', '$request[street]', '$request[state]', '$request[city]', '$request[birth_date]', '$request[postal_code]', '$request[phone_no]')";
            mysqli_query($db_connection, $query);
            return "New employee creted";
        }
    } catch (\Throwable $th) {
        echo 'Conncection failed: ' .  $th->getMessage() . "\n";
    }
}

function updateById($request)
{
    try {
        require_once "./config/dbconstants.php";
        $db_connection = mysqli_connect(HOST, USER, PASSWORD, DB);

        $query = "UPDATE employees 
        SET first_name='$request[first_name]', last_name='$request[last_name]', email='$request[email]', gender='$request[gender]', street='$request[street]', state='$request[state]', city='$request[city]', birth_date='$request[birth_date]', postal_code='$request[postal_code]', phone_no='$request[phone_no]'
        WHERE emp_no='$request[emp_no]'";
        $response = mysqli_query($db_connection, $query);

        return "Employee updated";

    } catch (\Throwable $th) {
        echo 'Conncection failed: ' .  $th->getMessage() . "\n";
    }
}

function deleteById($id)
{
    try {
        require_once "./config/dbconstants.php";
        $db_connection = mysqli_connect(HOST, USER, PASSWORD, DB);

        $query = "DELETE FROM employees WHERE emp_no='$id'";
        mysqli_query($db_connection, $query);

        return "Employee deleted";

    } catch (\Throwable $th) {
        echo 'Conncection failed: ' .  $th->getMessage() . "\n";
    }
}
