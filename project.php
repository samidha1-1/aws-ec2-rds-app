
<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Correct mysqli connection
$conn = new mysqli(
    "projectdb.ctwwe0s80yht.eu-north-1.rds.amazonaws.com", // RDS endpoint
    "samidha",                                               // DB username
    "samidha12",                                             // DB password
    "projectdb"                                              // Database name
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users
$result = $conn->query("SELECT * FROM users");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . "<br>";
    }
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
