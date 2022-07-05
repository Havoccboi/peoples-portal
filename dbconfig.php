<?php
// Database configuration
$host   = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sample_app";

// Create database connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
