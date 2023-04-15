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

// install the composer
exec('composer install ', $output);

//make env file
exec('copy .env.example .env ', $output);

// set the key
exec(' php artisan key:generate', $output);

// link the storage to the public directory
exec('php artisan storage:link', $output);

// create tables
exec(' php artisan migrate', $output);

// seed data
exec(' php artisan db:seed', $output);

// Start the server
exec('php artisan serve', $output);

// Redirect to the homepage
header('Location: http://localhost:8000');
exit;
?>
