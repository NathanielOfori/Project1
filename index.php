<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white ;
            text-align: center;
            margin: 0;
            padding: 0;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            max-width: 15%;
            margin: 70px auto;
            background-color: whitesmoke;
            padding: 70px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 90px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome</h1>
    <div class="btn-container">
        <a href="login.php" class="btn" style="margin-left: 10px;">Login</a> 
    </div> <br>

    <div class="btn-container">
        <a href="signup.php" class="btn" style="margin-left: 10px;">Sign Up</a>
    </div>
</div>

</body>
</html>
