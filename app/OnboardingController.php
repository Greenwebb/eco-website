<?php
// Database connection parameters
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "eco"; // Replace with your database name

// Create a connection to the MySQL database
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the form data from the AJAX request
$businessType = $_POST['businessType'];
$fullname = $_POST['fullname'];
$phoneNumber = $_POST['phoneNumber'];
$city = $_POST['city'];
$province = $_POST['province'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$languages = $_POST['languages'];
$employment = $_POST['employment'];
$service = $_POST['service'];



// Prepare an SQL INSERT statement
$query = "INSERT INTO user_details (business_type, fullname, phone_number, city, province, age, sex, languages, employment, service)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $mysqli->prepare($query);

// Bind the parameters
$stmt->bind_param("ssssssssss", $businessType, $fullname, $phoneNumber, $city, $province, $age, $sex, $languages, $employment, $service);

// Execute the statement
if ($stmt->execute()) {
    // Successfully inserted the data
    echo "Form data inserted successfully!";
} else {
    // Error occurred during insertion
    echo "Error: " . $mysqli->error;
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>
