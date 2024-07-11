<?php
// parameters to connect to the database

$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_forum4cd";

// connection to database
$conn = mysqli_connect($dbhostname, $dbusername,$dbpassword,$dbname);

// checking for erros in the database connection
if(!$conn){
    die("Database connection failed " . mysqli_error($conn));
}

?>