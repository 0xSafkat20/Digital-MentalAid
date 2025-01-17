<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Mental Wellness Platform</title>
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

        .forgot-password-container {
            background: #ffffff;
            padding: 2rem 5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
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

        .forgot-password-container h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #29B463;
            font-weight: bold;
        }

        .forgot-password-container input {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .forgot-password-container input:focus {
            border-color: #29B463;
            box-shadow: 0 0 8px rgba(41, 180, 99, 0.2);
            outline: none;
        }

        .forgot-password-container button {
            width: 100%;
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

        .forgot-password-container button:hover {
            background: #238e4e;
        }

        .forgot-password-container p {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .forgot-password-container a {
            color: #29B463;
            text-decoration: none;
            font-weight: bold;
        }

        .forgot-password-container a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .forgot-password-container {
                padding: 1.5rem;
                width: 90%;
            }

            .forgot-password-container h1 {
                font-size: 2rem;
            }

            .forgot-password-container input, .forgot-password-container button {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="forgot-password-container">
        <h1>Forgot Password</h1>
        <p>Enter your email address below, and we'll send you instructions to reset your password.</p>
        <form action="ResetPassword.html">
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit">Send Reset Link</button>
        </form>
        <p>Remember your password? <a href="LogIn_page.php">Log In</a></p>
    </div>
</body>
</html>
