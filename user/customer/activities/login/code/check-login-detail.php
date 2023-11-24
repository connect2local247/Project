<?php
session_start();

require "../../../../../includes/db_connection.php";

if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

function match_detail($email, $password) {
    // Escape user inputs to prevent SQL injection (not as secure as prepared statements)
    $email = mysqli_real_escape_string($GLOBALS['connect'], $email);
    $password = mysqli_real_escape_string($GLOBALS['connect'], $password);

    // Construct the SQL query
    $query = "SELECT C_PASSWORD FROM customer_register WHERE C_EMAIL = '$email'";

    // Execute the query
    $result = mysqli_query($GLOBALS['connect'], $query);

    if ($result) {
        // Fetch the stored password from the result
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['C_PASSWORD'];

        // Compare the provided password with the stored password
        if ($password === $stored_password) {
            return true;
        } else {
            $_SESSION['error'] = "Email or Password doesn't match";
        }
    } else {
        $_SESSION['error'] = "Error in SQL query: " . mysqli_error($GLOBALS['connect']);
    }

    return false;
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (match_detail($email, $password)) {
        $_SESSION['registered'] = 1;
        $_SESSION['greet-message'] = "Login Successfully";
        unset($_SESSION['error']);
    }
}

header("location:/connect2local/user/customer/activities/login/form/login.php");
?>
