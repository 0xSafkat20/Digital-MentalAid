<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login to the Mental Wellness Platform to access resources and tools for a healthier mind.">
    <title>Login - Mental Wellness Platform</title>
    <link rel="icon" href="Img/fav.png" type="img/x-icon">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f4f4f9, #e8f5e9);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            height: 90%;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .left-content {
            width: 50%;
            background-image: url('Img/article.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            padding: 2rem;
        }

        .left-content h1 {
            font-size: 2.5rem;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .login-container {
            width: 50%;
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-container h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #29B463;
        }

        .login-container h2 {
            font-size: 1.2rem;
            color: #555;
            text-align: center;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .login-container h2 span {
            font-weight: bold;
            color: #29B463;
        }

        .login-container form {
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }

        .login-container input {
            width: 100%;
            padding: 0.8rem;
            margin: 0.3rem 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .login-container input:focus {
            border-color: #29B463;
            box-shadow: 0 0 8px rgba(41, 180, 99, 0.2);
            outline: none;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin: -5px 0 10px;
        }

        .login-container button {
            width: 100%;
            padding: 0.8rem;
            margin-top: 1rem;
            border: none;
            border-radius: 8px;
            background: #29B463;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-container button:hover {
            background: #238e4e;
        }

        .login-container p {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555;
        }

        .login-container a {
            color: #29B463;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            margin-top: 0.5rem;
            font-size: 0.9rem;
        }

        .social-login {
            margin-top: 1rem;
            text-align: center;
        }

        .social-login button {
            background: #3b5998;
            color: white;
            width: 100%;
            padding: 0.8rem;
            margin-top: 0.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
        }

        .social-login button.google {
            background: #db4437;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }

            .left-content {
                width: 100%;
                height: 200px;
            }

            .login-container {
                width: 100%;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-content">
            <h1>"Empower your mind, embrace wellness."</h1>
        </div>
        <div class="login-container">
            <h1>Welcome Back</h1>
            <h2>"It always seems impossible until it’s done." <br><span>– Nelson Mandela</span></h2>

            <form id="loginForm" action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <div id="email-error" class="error-message"></div>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
                <div id="password-error" class="error-message"></div>

                <button id="loginButton" type="submit">Login</button>
            </form>

            <p class="forgot-password"><a href="Forget_Pass.php">Forgot Password?</a></p>
            <p>Don't have an account? <a href="Signup.php">Sign Up</a></p>

            <div class="social-login">
                <p>Or log in using:</p>
                <button onclick="window.location.href='User_Dashboard.php'">Log In with Facebook</button>
                <button class="google" onclick="window.location.href='Councelor_Dashboard.php'">Log In with Google</button>
            </div>
        </div>
    </div>

    <script>
       const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const emailError = document.getElementById('email-error');
const passwordError = document.getElementById('password-error');

function validateInputs() {
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    let isValid = true;

    // Validate email
    if (!email || !email.endsWith('@gmail.com')) {
        emailError.textContent = 'Please enter a valid email address.';
        isValid = false;
    } else {
        emailError.textContent = '';
    }

    // Validate password
    if (!password) {
        passwordError.textContent = 'Password cannot be empty.';
        isValid = false;
    } else {
        passwordError.textContent = '';
    }

    return isValid;
}

// Attach the validation to the form
const form = document.getElementById('loginForm');
form.addEventListener('submit', (e) => {
    if (!validateInputs()) {
        e.preventDefault(); // Prevent submission if inputs are invalid
    }
});

    </script>
</body>
</html>
