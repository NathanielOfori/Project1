<?php include "dbconnect.php"; ?>
<?php 
    $is_invalid = false;
    if (isset ($_POST['login'])){
    

    $query = sprintf("SELECT * FROM signup WHERE email = '%s'" ,  
    $conn->real_escape_string($_POST['email']));

    $result = $conn->query($query);

    $user = $result->fetch_assoc();

    if ($user){
        if (password_verify($_POST['password'], $user['password'])) {
            // Password verification succeeded, proceed with further logic
            // For example, you might set session variables, redirect the user, etc.
            echo '<script> 
                alert("Login successful!");
                window.location.href = "home.php";
                </script>'; 
            
            // Include your further logic here
        } else {
            // Password verification failed
            // For example, you might display an error message
            echo '<script> 
                alert("Login failed. Incorrect password.");
                window.location.href = "login.php";
                </script>'; 
            }
    } else {
        // No user found with the provided email
        echo '<script> 
        alert("Login failed. User not found.");
        window.location.href = "login.php";
        </script>'; 
    }
}
    $is_invalid = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kimeiga/bahunya/dist/bahunya.min.css"> 
    <title>Document</title>
</head>
<body>
<div class="form-container" class="col-md-20">
        <h1><p class= "text-center" class="fs-6" class="text-success">Login</p></h1>

        <?php if (!$is_invalid){
            echo '<script> 
                alert("Invalid username or password");
                window.location.href = "login.php";
                </script>';
            
        } ?>

        <form method="POST">
            <div class="form-group"> 
                <input class ="form-control" type="text" name="email" id="email" placeholder="Email" value="<?= htmlspecialchars($POST['email'] ?? '') ?>">
            </div>
            <div class="form-group">
                <input class ="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="login" value="Login">
            </div>
        </form>
</div>
</body>
</html>