<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'organizer');
// define('CHARSET', 'utf8');

// function dbConnect()

// {
//     $server = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "organizer";



//     $conn = mysqli_connect($server, $username, $password, $database);
//     return mysqli_query($conn, "SET NAMES 'utf8mb4'");
//     if (!$conn) {
//         die("Connection failed: " . mysqli_connect_error());
//     }

//     $employeesQuery = "SELECT first_name, last_name, birth_date FROM employees";
//     $result = mysqli_query($conn, $employeesQuery);

//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo "Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
//         }
//     } else {
//         echo "0 results";
//     }

//     mysqli_close($conn);
// }
