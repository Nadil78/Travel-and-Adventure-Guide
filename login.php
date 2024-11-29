<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff5722; /* Orange color for the heading */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ff5722; /* Orange border */
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="password"]:focus {
            border-color: #ff8a3d; /* Lighter orange on focus */
            outline: none;
        }

        .password-container {
            position: relative;
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ff5722; /* Orange color for the eye icon */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff5722; /* Orange background */
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff8a3d; /* Lighter orange on hover */
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #ff5722; /* Orange color for links */
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form id="login-form" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="email-mobile">Email ID / Mobile No:</label>
            <input type="text" id="email-mobile" name="email-mobile" placeholder="Enter your email or mobile" required>
        </div>

        <div class="form-group password-container">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <span class="eye-icon" id="toggle-password" onclick="togglePasswordVisibility()">👁️</span>
        </div>

        <button type="submit">Login</button>

        <div class="link">
            <p><a href="#">Forgot Password?</a></p>
            <p>Don't have an account? <a href="#">Sign Up</a></p>
        </div>
    </form>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('toggle-password');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.textContent = "🙈"; // Change icon to closed eye
        } else {
            passwordField.type = "password";
            eyeIcon.textContent = "👁️"; // Change icon to open eye
        }
    }

    function validateForm() {
        const emailMobile = document.getElementById('email-mobile').value;
        const password = document.getElementById('password').value;

        // Simple validation
        if (!emailMobile || !password) {
            alert("Please fill in all fields.");
            return false;
        }

        // Additional validation can be added here

        alert("Login successful!"); // Placeholder for actual login logic
        return true; // Allow form submission
    }
</script>

</body>
</html>
