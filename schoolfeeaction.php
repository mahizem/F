<?php
include("connection.php");
// Check if the form is submitted
//if (isset($_POST['submit'] )) {
// Retrieve the form data
$educationalPayment = $_POST['educationalpayment'];
$tutorialPayment = $_POST['tutorialpayment'];
$clubPayments=isset($_POST['clubpayment']) ?$_POST['clubpayment'] : array();
$paymentDate = $_POST['paymentdate'];
 // Validate and sanitize the form data (e.g., check if required fields are filled)
// Prepare and execute the SQL query to insert data into the database
$sql = "INSERT INTO schoolpaymentinfo (educationalpayment, tutorialpayment, clubpayment, paymentdate) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssss", $educationalPayment, $tutorialPayment, $clubPayments, $paymentDate);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

//sql query to perform copying data from one table to another
//
  

    // Close the database connection
    
    // Close the database connection

    $conn->close();
?>