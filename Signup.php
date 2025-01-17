<?php
$error_message = "";
$success_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database configuration
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "project_user";

    // Connect to the database
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Database connection error: " . $conn->connect_error);
    }

    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $category = $_POST['category'];

    // Validation
    if (empty($full_name) || empty($email) || empty($password) || empty($confirm_password) || empty($category)) {
        $error_message = "All fields are required.";
    } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $email)) {
        $error_message = "Email must be a valid Gmail address (e.g., user@gmail.com).";
    } elseif (strlen($password) < 8) {
        $error_message = "Password must be at least 8 characters long.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO n_user (full_name, email, password, category) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $full_name, $email, $hashed_password, $category);

        if ($stmt->execute()) {
            echo "<script>
                alert('Signup successful! Redirecting to login page.');
                window.location.href = 'LogIn_page.html';
            </script>";
            exit;
        } else {
            $error_message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Mental Wellness Platform</title>
    <link rel="icon" href="Img/fav.png" type="img/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #61db65, #3ECF8E);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .signup-container {
            background: #ffffff;
            padding-left: 5rem;
            padding-right: 5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            color: #333;
            width: 30%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .signup-container h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #29B463;
            font-weight: bold;
        }

        .signup-container input {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .signup-container select {
            width: 108%;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .signup-container input:focus, 
        .signup-container select:focus {
            border-color: #29B463;
            box-shadow: 0 0 8px rgba(41, 180, 99, 0.2);
            outline: none;
        }

        .signup-container button {
            width: 106%;
            padding: 0.8rem;
            border: none;
            border-radius: 8px;
            background: #29B463;
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .signup-container button:hover {
            background: #238e4e;
        }

        .signup-container p {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .signup-container a {
            color: #29B463;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-container a:hover {
            text-decoration: underline;
        }

        .social-signup {
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .social-signup button {
            width: 106%;
            padding: 0.8rem;
            border: none;
            border-radius: 8px;
            margin-top: 0.5rem;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            color: white;
            margin-left: 21px;
        }

        .social-signup button.facebook {
            background: #3b5998;
        }

        .social-signup button.google {
            background: #db4437;
        }

        .terms {
            margin-top: 1rem;
            text-align: left;
            font-size: 0.9rem;
        }

        .terms label {
            display: flex;
            align-items: center;
        }

        .password-strength {
            text-align: left;
            font-size: 0.9rem;
            margin: 0.5rem 0;
            color: #666;
        }
        .password-wrapper {
            position: relative;
            display: inline-block;
            width: 109%;
        }

        .password-wrapper input {
            width: calc(100% - 2.5rem);
        }

        .password-wrapper .toggle-password {
            position: absolute;
            top: 50%;
            right: 1.5rem;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2rem;
            color: #666;
        }


    </style>
</head>
<body>

<?php if (!empty($error_message)): ?>
        <script>
            alert("<?php echo $error_message; ?>");
        </script>
    <?php endif; ?>

    <div class="signup-container">
        <h1>Create an Account</h1>
        <form action="" method="POST">
            <input type="text" name="full_name" placeholder="Full Name" value="<?php echo htmlspecialchars($_POST['full_name'] ?? ''); ?>">
            <input type="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">

            <!-- Password Field with Eye Icon -->
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Password">
                <span class="toggle-password" onclick="togglePassword('password')">&#128065;</span>
            </div>
            <!-- Confirm Password Field with Eye Icon -->
            <div class="password-wrapper">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                <span class="toggle-password" onclick="togglePassword('confirm_password')">&#128065;</span>
            </div>
            <select name="category" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Patient">Patient</option>
                <option value="Counselor">Counselor</option>
            </select>
            <button type="submit">Sign Up</button>
            </form>

        <p>By signing up, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
            <div class="social-signup">
                <p>Or sign up using:</p>
                <button type="button" class="google">Sign Up with Google</button>
            </div>
        </form>
        <p>Already have an account? <a href="LogIn_page.html">Log In</a></p>
    </div>

    <script>

        // Password Strength Indicator
        const passwordInput = document.getElementById('password');
        const strengthMessage = document.getElementById('strengthMessage');

        passwordInput.addEventListener('input', () => {
            const value = passwordInput.value;
            if (value.length < 6) {
                strengthMessage.textContent = "Weak (too short)";
                strengthMessage.style.color = "red";
            } else if (value.length < 12) {
                strengthMessage.textContent = "Moderate";
                strengthMessage.style.color = "orange";
            } else {
                strengthMessage.textContent = "Strong";
                strengthMessage.style.color = "green";
            }
        });
        // Function to toggle password visibility
        function togglePassword(inputId) {
            const inputField = document.getElementById(inputId);
            if (inputField.type === "password") {
                inputField.type = "text";
            } else {
                inputField.type = "password";
            }
        }
    </script>
</body>
</html>
