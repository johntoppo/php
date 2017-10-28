

<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "login";

// Create connection
$con = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>