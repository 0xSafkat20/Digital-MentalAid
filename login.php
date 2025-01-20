<?php
// Database configuration
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "project_user";

// Connect to the database
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from POST request
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Basic input validation
    if (empty($email) || empty($password)) {
        echo "Email and password cannot be empty.";
        exit();
    }

    // Check for admin login
    if ($email === 'admin@gmail.com' && $password === 'admin123') {
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 'admin';
        header("Location: Admin_Dashboard.html");
        exit();
    }

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM n_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store user data in session
            $_SESSION['email'] = $user['email'];
            $_SESSION['category'] = $user['category'];

            // Redirect based on category
            if ($user['category'] == 'Patient') {
                header("Location: Patient_Dashboard.php");
            } elseif ($user['category'] == 'Counselor') {
                header("Location: Councelor_Dashboard.php");
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
?>
