<?php

$conn = mysqli_connect('localhost', 'root', '');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE job_board";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

// Step 1: Establish a database connection that you created
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_board";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Step 2: Write the SQL queries (can write all the queries by exporting them from php my admin )
$sql = "
// paste all the content of the exported file
///
//
///
///";


// Step 3: Call mysqli_multi_query function

if (mysqli_multi_query($conn, $sql)) {
    // If successful
    echo "Tables created and data inserted successfully.";
} else {
    // If error
    echo "Error: " . mysqli_error($conn);
}

// Step 4: Close the database connection
mysqli_close($conn);

// install the composer
exec('composer install ', $output);

//make env file
exec('cp .env.example .env ', $output);

// link the storage to the public directory
exec('php artisan storage:link', $output);
// Start the server
exec('php artisan serve', $output);

// Redirect to the homepage
header('Location: http://localhost:8000');
exit;


?>
