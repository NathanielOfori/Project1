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
    <h1><p class= "text-center" class="fs-6" class="text-success">Sign Up</p></h1>
    <form action="signupprocess.php" method="POST">
        <div class="form-group"> 
            <input class ="form-control" type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input class ="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class ="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input class ="form-control" type="password" name="repeat_password" placeholder="Repeat Password">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="signup" value="Sign Up">
        </div>
    </form>
</div>
</body>
</html>