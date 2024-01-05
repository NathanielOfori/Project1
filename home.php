<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Bank</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        #welcome-container {
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            font-size: 3em;
            color: #3498db;
        }

        #logout-btn {
            position: fixed;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
    </style>
</head>
<body>

<button id="logout-btn" onclick="logout()">Logout</button>

<div id="welcome-container">
    <img src="UMB.png" alt="Bank Logo" width="150">
    <h1>Welcome to Your Bank</h1>
    <p>Manage your finances with ease.</p>
    <!-- Additional content or features can be added here -->
</div>

<script>
    function logout() {
        // Perform logout logic here, such as clearing session or redirecting to a logout page
        // For now, let's simulate a logout by redirecting to a logout page
        window.location.href = 'index.php';
    }
</script>

</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Bank</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        #logout-btn {
            position: fixed;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: black;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #welcome-container {
            background: rgba(0, 0, 0, 1.0);
            padding: 90px;
            border-radius: 100px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        #login-btn {
            padding: 10px 20px;
            font-size: 1.2em;
            background-color: #3498db;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div id="welcome-container">
    <h1>Welcome to Your Bank</h1>
    <img src="UMBB.png" width="500">
 <button id="login-btn" onclick="redirectToLoginPage()">Login to Your Account</button> 
</div>

<script>
    function redirectToLoginPage() {
        // Replace 'login.html' with the actual login page URL
        window.location.href = 'login.html';
    }
</script>

</body>
</html> -->
