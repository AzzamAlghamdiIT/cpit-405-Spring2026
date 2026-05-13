<?php
// Student ID: 2237392
// Name: Azzam Saeed Alghamdi
// CPIT 405 - Lab 10 - Q3: Database Connection

// Database connection settings (default XAMPP settings)
$host = "localhost";
$user = "root";
$password = "";

// Create connection using MySQLi
$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
}

echo "<p style='color:green;'>&#10003; Connected to MariaDB successfully!</p>";

// Run SHOW DATABASES query
$sql = "SHOW DATABASES";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<p><strong>Databases on this server:</strong></p>";
    echo "<table>";
    echo "<tr><th>#</th><th>Database Name</th></tr>";

    $i = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $i . "</td><td>" . $row['Database'] . "</td></tr>";
        $i++;
    }
    echo "</table>";
} else {
    echo "<p>No databases found.</p>";
}

// Close connection
$conn->close();
?>