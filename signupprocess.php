<?php include "dbconnect.php"; ?>
<?php 
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];

    }

    if (empty($username) || empty($email) || empty($password)){
        echo "<script> 
            alert('Please fill out all fields')
            window.location.href = 'signup.php';
            </script>";
    }

    if ($password !== $repeat_password) {
        echo "<script> 
            alert('Passwords do not match')
            window.location.href = 'signup.php';
            </script>";
    }

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script> 
            alert('Invalid email format')
            window.location.href = 'signup.php';
            </script>";
    }

    if (strlen($password) < 8) {
        echo "<script> 
            alert('Password must be at least 8 characters')
            window.location.href = 'signup.php';
            </script>";
    }

    if (!preg_match('/[a-z]/i', $_POST['password']) ) {
        echo "<script> 
            alert('Password must include a lowercase letter')
            window.location.href = 'signup.php';
            </script>";
    }
    
    if (!preg_match('/[A-Z]/i', $_POST['password'])){
        echo "<script> 
            alert('Password must include a uppercase letter')
            window.location.href = 'signup.php';
            </script>";
    }

    if (!preg_match('/[0-9]/', $_POST['password'])){
        echo "<script> 
            alert('Password must include a number')
            window.location.href = 'signup.php';
            </script>";
    }

    if (!preg_match('/[!@#$%^&*?+=:;~`<>()_-]/', $_POST['password'])){
        echo "<script> 
            alert('Password must include a special character')
            window.location.href = 'signup.php';
            </script>";
    }

    $hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // To create a sql query with placeholder characters as the value
    $query = "INSERT INTO signup (username, email, password) VALUES (?,?,?);";

    // preparing the sql query into a statement 
    $querystatement = $conn->stmt_init();

    // $querystatement->prepare($query) is used to prepare the created statement
    if (!$querystatement->prepare($query)) {
        die ("SQL Error: " . $querystatement->error);
    }

    // to bind the sql statement to the placeholders in the sql statement 
    $querystatement->bind_param('sss', $_POST['username'], $_POST['email'], $hashedpassword);



    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT COUNT(*) FROM signup WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($emailCount);
    $stmt->fetch();
    $stmt->close();

    if ($emailCount > 0) {
        // Email already exists, handle accordingly (e.g., display an error message)
        echo "<script>
            alert('Email already exists. Please choose a different email.');
            window.location.href = 'signup.php';
            </script>";
        exit(); // Stop execution to prevent displaying the success alert
    }

    // Email doesn't exist, proceed with the insert
    $insertQuery = "INSERT INTO signup (username, email, password) VALUES (?, ?, ?)";
    $stmnt = $conn->prepare($insertQuery);
    $stmnt->bind_param("sss", $username, $email, $hashedpassword);

    if ($stmnt->execute()) {
        // Registration successful, redirect to another page
        echo "<script>
            alert('Registration successful. Please log in.');
            window.location.href = 'login.php';
            </script>";
        
    } else {
        // Registration failed, handle accordingly
        echo "<script>
            alert('Registration failed. Please try again later.');
            window.location.href = 'signup.php';
            </script>";
         // Stop execution to prevent displaying the success alert
    }

    $stmnt->close();
    // Close your database connection
    $conn->close();

    

    


