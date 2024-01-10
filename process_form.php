<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Connect to the MS Access database using ODBC
    $dsn = "database1"; // Replace with your DSN
    $user = ""; // Leave it empty for Access databases
    $password = ""; // Leave it empty for Access databases

    $conn = odbc_connect($dsn, $user, $password);

    if (!$conn) {
        die("Connection failed: " . odbc_errormsg());
    }

    // Escape user inputs to prevent SQL injection
    $name = odbc_escape_string($conn, $name);
    $email = odbc_escape_string($conn, $email);
    $message = odbc_escape_string($conn, $message);

    // Perform the database query
    $sql = "INSERT INTO contact_list (yourname, youremail, yourmessage) VALUES ('$name', '$email', '$message')";

    $result = odbc_exec($conn, $sql);

    if (!$result) {
        die("Error in SQL query: " . odbc_errormsg());
    } else {
        // Close the database connection
        odbc_close($conn);

        // Display a success message or redirect the user
        echo "Form submitted successfully!";
    }
} else {
    // Redirect the user if they try to access this script directly
    header("Location: contact.html");
    exit();
}
?>
